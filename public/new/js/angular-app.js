(function(window, document) {

  angular.module("landingApp",['ui.bootstrap','algoliasearch', 'algolia.autocomplete'])

      .controller("landCtrl",function ($scope, $http,algolia) {

        $scope.over=false;
        $scope.over2=false;
        $scope.over3=false;
        $scope.role=null;
        $scope.active=function(role){
              $scope.role=role;
          }

        var fetchTypes = function(){
          $http.get('api/school/types/all').success(function(data){
            $scope.schoolTypes = data;
          });
        }

        fetchTypes();

    $scope.selectedButton=1;

        //========Angular TypeAhead=================


        var _selected;

        $scope.selected = 'all';
        //$scope.locationSelected='Θεσσαλονίκη, Ελλάδα';


        $scope.ngModelOptionsSelected = function(value) {
          if (arguments.length) {
            _selected = value;
          } else {
            return _selected;
          }
        };

        $scope.modelOptions = {
          debounce: {
            default: 500,
            blur: 250
          },
          getterSetter: true
        };

        $scope.schoolTypess = []


          var st1=  $scope.schoolTypess
          var temp = JSON.stringify(st1)
              .replace(/ά/g,"α")
              .replace(/έ/g,"ε")
              .replace(/ή/g,"η")
              .replace(/ί/g,"ι")
              .replace(/ό/g,"ο")
              .replace(/ύ/g,"υ")
              .replace(/ώ/g,"ω")
              .replace(/type/g,"type2")
              .replace(/tags/g,"tags2");
          var st2= JSON.parse(temp);
          $scope.schoolTypess  = angular.merge([], st2, st1);


          $scope.formatLabel = function(model) {
              for (var i=0; i< $scope.schoolTypess.length; i++) {
                  if (model === $scope.schoolTypess[i].id) {
                      console.log('ng-model='+model)
                      return $scope.schoolTypess[i].type;
                  }
              }
          }

          //========Google geoLocation=================

          //?geocode=Greece &lang=el_GR &location=38.174248,23.726653 &radius=8000 &country=GR
          $scope.locationSelected=null



          $scope.getLocation = function(val) {
              return $http.get('//maps.googleapis.com/maps/api/geocode/json?components=country:GR', {
                  params: {
                      language: 'el',
                      address: val,
                      sensor: false
                  }
              }).then(function(response){
                  return response.data.results.map(function(item){
                      return item.formatted_address;
                  });
              });
          };

          $scope.result1 = '';
          $scope.options1 = {
              country: 'gr'
          };
          $scope.details1 = '';


          $scope.result2 = '';
          $scope.options2 = {
              country: 'gr',
              types: '(cities)'
          };
          $scope.details2 = '';



          //========Algolia Autocomplete=================

          $scope.input=''
          var client = algolia.Client('N08SZYEUO0', 'e00bc4548ea05c691c81f7c30c100bd7');
          var schools = client.initIndex('dummySchools');
          var scholarships = client.initIndex('dummyScholarships');
          var studies = client.initIndex('dummyStudies');

          $scope.getDatasets1 = function() {
              return [
              {
                  source: algolia.sources.hits(scholarships, { hitsPerPage: 3 }),
                  displayKey: function(suggestion){
                   return suggestion.school + ' - ' + suggestion.study;
                 },

                  templates: {
                    header: '<div class="aa-suggestions-category">' + lang.main.first.algolia.search.institutions +'</div>',
                      suggestion: function(suggestion) {
                          return '<a target="_blank" style="color: #888;" href="/scholarship/' + suggestion.scholarship_id +'"><span ng-show="false"><img src="'+ suggestion.school_logo +'" height="30px" style="margin-right: 10px;">' +
                            suggestion._highlightResult.school.value + ' - ' + suggestion._highlightResult.study.value + ' - ' + lang.seeder.criteria[suggestion.criteria_id] + '</span></a>';
                      },
                  }
              },
              {
                  source: algolia.sources.hits(scholarships, { hitsPerPage: 2 }),
                  displayKey: 'study',
                  templates: {
                    header: '<div class="aa-suggestions-category2">' + lang.main.first.algolia.search.studies +'</div>',
                      suggestion: function(suggestion) {
                          return '<a style="color:black" target="_blank" href="public/scholarships?q='+ suggestion.study +'">' +
                              '<span>' + suggestion._highlightResult.study.value + ' - ' + suggestion.level + '</span></a>';
                      }
                  }
              }
              ];
          };

          $scope.getDatasets2 = function() {
              return [
              {
                  source: algolia.sources.hits(schools, { hitsPerPage: 3 }),
                  displayKey: 'name',
                  templates: {
                      header: '<div class="aa-suggestions-category">'+ lang.main.first.algolia.search.institutions +'</div>',
                      suggestion: function(suggestion) {
                          return '<a style="color: #888;" href="/public/profile/' + suggestion.id +'"><span><img src="'+ suggestion.logo +'" height="30px" style="margin-right: 10px;">' +
                              suggestion._highlightResult.name.value + '</span></a>';
                      },
                  }
              },
              {
                  source: algolia.sources.hits(studies, { hitsPerPage: 2 }),
                  displayKey: 'name',
                  templates: {
                    header: '<div class="aa-suggestions-category2">' + lang.main.first.algolia.search.studies +'</div>',
                      suggestion: function(suggestion) {
                          return '<span>' +
                              suggestion._highlightResult.name.value + '</span>';
                      },
                    empty: '<div class="aa-empty">' + lang.main.first.algolia.search.results + '</div>'
                  }
              }
              ];
          };

          $scope.$on('autocomplete:selected', function(event, suggestion, dataset) {
            if(suggestion.email){
              window.location = '/public/profile/' + suggestion.school_id;
            }
          });








      })



      .directive('ngAutocomplete', function($parse) {
        return {
          scope: {
            details: '=',
            ngAutocomplete: '=',
            options: '='
          },


          link: function(scope, element, attrs, model) {

            //options for autocomplete
            var opts

            //convert options provided to opts
            var initOpts = function() {
              opts = {}
              if (scope.options) {
                if (scope.options.types) {
                  opts.types = []
                  opts.types.push(scope.options.types)
                }
                if (scope.options.bounds) {
                  opts.bounds = scope.options.bounds
                }
                if (scope.options.country) {
                  opts.componentRestrictions = {
                    country: scope.options.country
                  }
                }
              }
            }
            initOpts()

            //create new autocomplete
            //reinitializes on every change of the options provided
            var newAutocomplete = function() {
              scope.gPlace = new google.maps.places.Autocomplete(element[0], opts);
              google.maps.event.addListener(scope.gPlace, 'place_changed', function() {
                scope.$apply(function() {
//              if (scope.details) {
                  scope.details = scope.gPlace.getPlace();
//              }
                  scope.ngAutocomplete = element.val();
                });
              })
            }
            newAutocomplete()

            //watch options provided to directive
            scope.watchOptions = function () {
              return scope.options
            };
            scope.$watch(scope.watchOptions, function () {
              initOpts()
              newAutocomplete()
              element[0].value = '';
              scope.ngAutocomplete = element.val();
            }, true);
          }
        };
      })


      .directive("scroll", function ($window) {
        return function (scope, element, attrs) {
          angular.element($window).bind("scroll", function () {
            if (this.pageYOffset >= 430) {
              //element.addClass('animate');
              //$('#sec2').removeClass('opacityLow');
              $('#sec2').addClass('opacityFull');
              //$('#sec2').toggleClass('opacityLow opacityFull');
            } else {
              //element.removeClass('animate');
            }
            if (this.pageYOffset >= 950) {
              //element.addClass('animate');
              $('#secNew').removeClass('right-out').addClass('right-in');
              //$('#sec2').toggleClass('opacityLow opacityFull');
            }

          });
        };
      })
})(window, document);