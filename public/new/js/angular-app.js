(function(window, document) {

  angular.module("landingApp",[])

      .controller("landCtrl",function ($scope, $http) {

        

        var fetchTypes = function(){
          $http.get('api/school/types/all').success(function(data){
            $scope.schoolTypes = data;
          });
        }

        fetchTypes();

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