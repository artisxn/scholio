    function test(e){
        var IMG = e.id

        $('#bigImage').attr("src", IMG);

        $('#img-modal').modal('toggle');
    }

    var lengthStudents = 0;

// $.nonbounce();

// $(document).on("scroll",function(){
//     var documentHeight = $(window).height();
//     $('#xs-submButton').css('bottom',documentHeight);
// });

    $(function() {
        var bt = $('#connectionButton');
        var offset = bt.offset() || 0;
        bt.attr("data-offset-top", offset.top + 120);

        //caches a jQuery object containing the header element
        var sb = $("#submButton1");
        $(window).scroll(function() {
            var scroll = $(window).scrollTop();
            if (scroll >= 595) {
                sb.removeClass('hidden').addClass("vissible");
            } else {
                sb.removeClass("vissible").addClass('hidden');
            }
        });
    });

    var lengthStudents = 0;
    angular.module("profileApp",[])
            .controller("profileCtrl",function ($timeout,$scope,$http, $sce) {

                $scope.notifications = []
                $scope.studies = []
                $scope.sections = []
                $scope.selectedUser = null
                $scope.selectedStudy = null
                $scope.selectedStatus = null
                $scope.buttonsDisabled = true
                $scope.studyConnection = 0
                $scope.showButton = false
                $scope.schoolStudies = null

//////////////////////

                $scope.role = function(r){
                    return lang.seeder.role[''+r]
                }

                $scope.categ = function(icon){
                    return lang.seeder.category['' + icon]
                }

                $scope.getSchoolStudies = function(){
                    $http.get('/api/notifications/getSchoolLevelStudies/public/{{$id}}', {
                        headers: {
                            'X-Requested-With': 'XMLHttpRequest',
                            'X-CSRF-TOKEN': window.Scholio.csrfToken}})
                        .success(function(data) {
                            $scope.schoolStudies = data
                            $scope.showButton = true
                            
                            

                        })
                    }

                    $scope.getSchoolSections = function(){
                    $http.get('/api/notifications/getSchoolLevelSections/public/{{$id}}', {
                        headers: {
                            'X-Requested-With': 'XMLHttpRequest',
                            'X-CSRF-TOKEN': window.Scholio.csrfToken}})
                        .success(function(data) {
                            $scope.sections = data
                            $scope.showButton = true
                        })

                    }
/////////////////////
                $scope.categoryReview = function(index, stars){
                    setTimeout(function() {
                        $('#catReview-' + index).raty({
                                score: stars,
                                halfShow : true,
                                half     : true,
                                readOnly: true,
                                starHalf : 'fa fa-fw fa-star-half'
                        });
                    }, 500);

                }

                $scope.uniqueArray = function(arr){
                    
                    return !!arr.reduce(function(a, b){ return (a === b) ? a : NaN; });
                }

                $scope.rate = function(id, stars){
                    setTimeout(function() {
                        $('#totalRating-' +id).raty({
                            score    : stars,
                            halfShow : true,
                            half     : true,
                            readOnly: true,
                            starHalf : 'fa fa-fw fa-star-half'
                        });
                    }, 20);
                }

                $scope.test = function(scholarship){
                    setTimeout(function() {
                        
                        if(scholarship.userInterested){
                        $('#i'+ scholarship.id).toggleClass('fa-thumbs-up fa-thumbs-o-up');
                        $('#t'+ scholarship.id).text('@lang('profile.scholarship.button.like')')
                        $('#b'+ scholarship.id).css("background-color", "#ccc");
                        }
                     }, 30);
                }

                $scope.ratings = function(){
                        $('rating').raty({
                            score    : window.totalStars,
                            halfShow : true,
                            half     : true,
                            readOnly: true,
                            starHalf : 'fa fa-fw fa-star-half'
                        });

                        $('#totalRating').raty({
                            score    : window.totalStars,
                            halfShow : true,
                            half     : true,
                            readOnly: true,
                            starHalf : 'fa fa-fw fa-star-half'
                        });
                }

                $scope.init = function () {
                    $scope.interestStudent = 'student';
                    $scope.trustAsHtml = $sce.trustAsHtml;
                    $scope.message = null;
                    $scope.scholarship = ['sd'];
                    $scope.col_iek_eng_dan_mus = false;
                    $scope.sxoleio = false;

                    @if(auth()->check() && auth()->user()->role == 'student')
                        $scope.getSchoolStudies();
                    @elseif(auth()->check() && auth()->user()->role == 'teacher')
                        $scope.showButton = true
                        // $scope.getSchoolSections();
                    @endif

                    var apiLink = '';
                    @if(auth()->check())
                        apiLink = '/api/profile/auth/{{ $id }}';
                    @else
                        apiLink = '/api/profile/{{ $id }}';
                    @endif
                    $http.get(apiLink, {
                        headers: {
                            'X-Requested-With': 'XMLHttpRequest',
                            'X-CSRF-TOKEN': window.Scholio.csrfToken
                                    }
                                })
                                .success(function(data)   {
                        $scope.contactInfo=data;
                        
                        window.totalStars = data.stars
                        $scope.ratings();
                        $scope.studies = data.levels;
                        if(data.scholarship[0]) $scope.message = $sce.trustAsHtml(data.scholarship[0].terms);
                        else $scope.message = ''

                        if( $scope.studies.length) $scope.initial();

                        var type=data.type_id
                        if (type==1 || type==2 || type==4 || type==10 || type==11 || type == 12) $scope.col_iek_eng_dan_mus  = true
                        if (type==13) $scope.sxoleio  = true

                        $scope.multipleSectionsSelected = {};
                        $scope.mStudies = { };
                       var multipleStudies = []

                        // data.scholarship.forEach(function(item){
                        //         item.multipleStudies.forEach(function(st){
                        //             multipleStudies.push(st.section[0].id)
                        //             $scope.mStudies[item.id] = multipleStudies
                        //             $scope.multipleSectionsSelected[item.id] = !$scope.uniqueArray(multipleStudies)
                        //         })
                        //         multipleStudies = []
                        // })


                            });


                    $scope.interestedCheck = function(id){
                        $scope.interested1 = $http.post('/api/interested/save',{'scholarship' : id}, {
                                    headers: {
                                        'X-Requested-With': 'XMLHttpRequest',
                                        'X-CSRF-TOKEN': window.Scholio.csrfToken
                                    }
                                })
                                .success(function(data)   {
                                    if(data == 'YES'){
                                        $('#t'+ id).text("@lang('profile.scholarship.button.interested')")
                                        $('#i'+ id).toggleClass('fa-thumbs-up fa-thumbs-o-up');
                                    }else{
                                        $('#t'+ id).text("@lang('profile.scholarship.button.like')")
                                        $('#i'+ id).toggleClass('fa-thumbs-o-up fa-thumbs-up');
                                        $('#b'+ id).style.backgroundColor='#ccc'
                                    }

                                });
                    }
                    $scope.levelsName=[];
                    $scope.sectionsName=[];
                    $scope.sectionsIcon=[];
                    $scope.studiesName=[];
                    $scope.studiesUrl=[];

                    $scope.initial=function (){
                        $scope.getSchoolStudies();
                        /* ========== BUILD levelsName ARRAY============ */
                        $scope.levelsName[0]=$scope.studies[0][0].section[0].level.name
//                        
                        var length=0
                        var found= false
                        for (var std in $scope.studies ){
                            found= false
                            for (var lev in $scope.levelsName ){
                                if ( $scope.levelsName[lev]==$scope.studies[std][0].section[0].level.name){
                                    found=true
                                }
                            }
                            if (!found) {
                                length++
                                $scope.levelsName[length]=$scope.studies[std][0].section[0].level.name
//                                
                            }
                        }
//                        
                        /* ========== BUILD sectionsName ARRAY============ */
                        for (lev in $scope.levelsName ){
                            $scope.sectionsName[lev]=[];
                            $scope.sectionsIcon[lev]=[];
                        }
                        length=0

                        for (lev in $scope.levelsName ){
                            for (std in $scope.studies ){
                                if ( $scope.levelsName[lev]==$scope.studies[std][0].section[0].level.name){
                                    if(!length){
                                        $scope.sectionsName[lev][0]=$scope.studies[std][0].section[0].name
                                         $scope.sectionsIcon[lev][0]=$scope.studies[std][0].section[0].icon
                                        length=1
                                    }
                                    found= false
                                    for (var sec in $scope.sectionsName[lev] ){
                                        if($scope.sectionsName[lev][sec]==$scope.studies[std][0].section[0].name){
                                            found=true
                                        }
                                    }
                                    if (!found) {
                                        $scope.sectionsName[lev][length]=$scope.studies[std][0].section[0].name
                                        $scope.sectionsIcon[lev][length]=$scope.studies[std][0].section[0].icon
                                        length++
                                    }
                                }
                            }
                            length=0
                        }
                        /* ========== BUILD studiesName ARRAY============ */
                        var study=0
                        for (lev in $scope.levelsName ){
                            $scope.studiesName[lev]=[];
                            $scope.studiesUrl[lev]=[];
                            for (sec in $scope.sectionsName[lev] ){
                                $scope.studiesName[lev][sec]=[];
                                $scope.studiesUrl[lev][sec]=[];

                                study=0
                                for (std in $scope.studies){
                                    if( $scope.levelsName[lev]==$scope.studies[std][0].section[0].level.name
                                            && $scope.sectionsName[lev][sec]==$scope.studies[std][0].section[0].name
                                    ){
                                        // 
                                        $scope.studiesName[lev][sec][study]=$scope.studies[std][0].name
                                        $scope.studiesUrl[lev][sec][study]=$scope.contactInfo.study[std].pivot.url
                                        // 

                                    // $scope.studiesIcon[lev][sec][study]=$scope.studies[std][0].icon
                                        study++
                                    }
                                }
                            }
                        }
                        @if($school->settings->map)
                            $scope.mapInitial()
                        @endif
                    }
                };
                $scope.interested = function(id, index){
                    $scope.interested1 = $http.post('/api/interested/save',{'scholarship' : id}, {
                                headers: {
                                    'X-Requested-With': 'XMLHttpRequest',
                                    'X-CSRF-TOKEN': window.Scholio.csrfToken
                                }
                            })
                            .success(function(data){
                                
                                if(data == 'YES'){
                                    $scope.contactInfo.scholarship[index].interests++;
                                    $('#i'+ id).toggleClass('fa-thumbs-up fa-thumbs-o-up');
                                    $('#t'+ id).text("@lang('profile.scholarship.button.like')")
                                    $('#b'+ id).css("background-color", "#ccc");
                                }else{
                                    $scope.contactInfo.scholarship[index].interests--;
                                    $('#i'+ id).toggleClass('fa-thumbs-o-up fa-thumbs-up');
                                    $('#t'+ id).text("@lang('profile.scholarship.button.interested')")
                                    $('#b'+ id).css("background-color", "#008da5");
                                }
                            });
                }


                $scope.mapInitial=function () {
                    var myLatlng = new google.maps.LatLng($scope.contactInfo.lat, $scope.contactInfo.lng);
                    var myOptions = {
                        zoom: 15,
                        center: myLatlng,
                        scrollwheel: false,
                        scaleControl:true,
                    }
                    var map = new google.maps.Map(document.getElementById("googleMap"), myOptions);
                    var mapXS = new google.maps.Map(document.getElementById("googleMapXS"), myOptions);
//                    

                    var marker = new google.maps.Marker({
                        position: myLatlng,
                        //animation: google.maps.Animation.DROP,
                        title:$scope.contactInfo.name,
                        icon:"/../new/img/markers/marker-teal-sm.png",
                        map: map,
                        mapTypeId: google.maps.MapTypeId.ROADMAP

                    });
                    var marker2 = new google.maps.Marker({
                        position: myLatlng,
                        //animation: google.maps.Animation.DROP,
                        title:$scope.contactInfo.name,
                        icon:"/../new/img/markers/marker-teal-sm.png",
                        map:mapXS,
                        mapTypeId: google.maps.MapTypeId.ROADMAP

                    });


                    var styledMapType = new google.maps.StyledMapType(
                            [
                                {
                                    "featureType": "poi.park",
                                    "elementType": "geometry.fill",
                                    "stylers": [
                                        {
                                            //"color": "#9ec4ae"
                                            //"color": "#A3BFA8"
                                            //"color": "#B5C5B8"
                                            //"color": "#D9F0D1"
                                            "color": "#E2F0DA"

                                            //"color": "#CBE6A3"
                                        }
                                    ]
                                },
                                {
                                    "featureType": "water",
                                    "elementType": "geometry.fill",
                                    "stylers": [
                                        {
                                            //"color": "#00bcd4"
                                            //"color": "#53D0D9"
                                            //"color": "#00C9E1"
                                            //"color": "#00D1E9"
                                            //"color": "#00E2FF"

                                            //"color": "#A4E2E7"
                                            "color": "#A4DBE7"

                                            //"color": "#A3CCFF"
                                        }
                                    ]
                                }
                            ]
                    )

                    map.mapTypes.set('styled_map', styledMapType);
                    map.setMapTypeId('styled_map');

                    mapXS.mapTypes.set('styled_map', styledMapType);
                    mapXS.setMapTypeId('styled_map');
                }



                $scope.sendRequest = function(){
                    if($scope.selectedStudy && $scope.selectedStatus){
                        $scope.sendRequestToSchool = $http.post('/api/request/school', { 'school': $scope.contactInfo.id, 'study': $scope.selectedStudy, 'status': $scope.selectedStatus }, {
                            headers: {
                                'X-Requested-With': 'XMLHttpRequest',
                                'X-CSRF-TOKEN': window.Scholio.csrfToken
                            }
                        })
                        .success(function (data) {
                            window.location.reload();
                        });
                    }
                }

                $scope.sendInterest = function(){
                    
                    $scope.sendInterestToSchool = $http.post('/api/interest/school', { 'school_id': $scope.contactInfo.id, 'study_id': $scope.interestStudy, 'name': $scope.interestName, 'email': $scope.interestEmail, 'tel': $scope.interestTel, 'student': $scope.interestStudent }, {
                            headers: {
                                'X-Requested-With': 'XMLHttpRequest',
                                'X-CSRF-TOKEN': window.Scholio.csrfToken
                            }
                        })
                        .success(function (data) {
                            window.location.reload();
                        });
                }

                $scope.textAbout="@lang('profile.more')";
                $scope.iconAbout='fa fa-angle-down'
                $scope.showMoreAbout= function (hash){
                    if($scope.textAbout === "@lang('profile.more')"){
                        $scope.textAbout= "@lang('profile.less')";
                        $scope.iconAbout='fa fa-angle-up'
                        $("#sxetika").removeClass('slideAbout').toggleClass("slidedown slideup");
                    } else {
                        $scope.textAbout = "@lang('profile.more')";
                        $scope.iconAbout='fa fa-angle-down'
                        $("#sxetika").toggleClass("slidedown slideup").addClass('slideAbout');
//                        location.hash = '#';
//                        location.hash = "#" + hash;
                    };
                }
                $scope.textStudies="@lang('profile.more')";
                $scope.iconStudies='fa fa-angle-down'
                $scope.showMoreStudies= function (hash){
                    if($scope.textStudies === "@lang('profile.more')"){
                        $scope.textStudies= "@lang('profile.less')";
                        $scope.iconStudies='fa fa-angle-up'
                        $("#sliderStudies").removeClass('slideStudies').toggleClass("slidedown slideup");
                    } else {
                        $scope.textStudies = "@lang('profile.more')";
                        $scope.iconStudies='fa fa-angle-down'
                        $("#sliderStudies").toggleClass("slidedown slideup").addClass('slideStudies');
                        location.hash = '#';
                        location.hash = "#" + hash;
//
                    };
                }
                $scope.textScholarships="@lang('profile.more')";
                $scope.iconScholarships='fa fa-angle-down'
                $scope.showMoreScholarships= function (hash){
                    if($scope.textScholarships === "@lang('profile.more')"){
                        $scope.textScholarships= "@lang('profile.less')";
                        $scope.iconScholarships='fa fa-angle-up'
                        $("#ypotrofies").removeClass('slideScholarships').toggleClass("slidedown slideup");
                    } else {
                        $scope.textScholarships = "@lang('profile.more')";
                        $scope.iconScholarships='fa fa-angle-down'
                        $("#ypotrofies").toggleClass("slidedown slideup").addClass('slideScholarships');
                        location.hash = '#';
                        location.hash = "#" + hash;
                    };
                }
                $scope.textReviews="@lang('profile.more')";
                $scope.iconReviews='fa fa-angle-down'
                $scope.showMoreReviews= function (hash){
                    if($scope.textReviews === "@lang('profile.more')"){
                        $scope.textReviews= "@lang('profile.less')";
                        $scope.iconReviewst='fa fa-angle-up'
                        $("#reviews").removeClass('slideReviews').toggleClass("slidedown slideup");
                    } else {
                        $scope.textReviews = "@lang('profile.more')";
                        $scope.iconReviews='fa fa-angle-down'
                        $("#reviews").toggleClass("slidedown slideup").addClass('slideReviews');
                        location.hash = '#';
                        location.hash = "#" + hash;
                    };
                }
                $scope.textTeachers="@lang('profile.more')";
                $scope.iconTeachers='fa fa-angle-down'
                $scope.showMoreTeachers= function (){
                    if($scope.textTeachers === "@lang('profile.more')"){
                        $scope.textTeachers= "@lang('profile.less')";
                        $scope.iconTeachers='fa fa-angle-up'
                        $("#faculty").removeClass('slideTeachers').toggleClass("slidedown slideup");
                    } else {
                        $scope.textTeachers = "@lang('profile.more')";
                        $scope.iconTeachers='fa fa-angle-down'
                        $("#faculty").toggleClass("slidedown slideup").addClass('slideTeachers');
                        location.hash = '#';
                        location.hash = "#" + hash;
                    };
                }

                $scope.getAVG = function(category) {

                    var avg = 0;

                    for (var i = $scope.reviews.length - 1; i >= 0; i--) {
                        avg += $scope.reviews[i].stars[category];
                    }

                    if($scope.reviews.length>0)
                        return Math.round((avg/$scope.reviews.length)*10) / 10;
                    else
                        return "?";
                }
            })


            /* BxSlider Directives for ng-repeat*/
            .directive('bxSlider', [function () {
                return {
                    restrict: 'A',
                    link: function (scope, element, attrs) {
                        scope.$on('repeatFinished', function () {
                            element.bxSlider(scope.$eval('{' + attrs.bxSlider + '}'));
                        });
                    }
                }
            }])
            .directive('notifyWhenRepeatFinished', ['$timeout', function ($timeout) {
                return {
                    restrict: 'A',
                    link: function (scope, element, attr) {
                        if (scope.$last === true) {
                            $timeout(function () {
                                scope.$emit('repeatFinished');
                            });
                        }
                    }
                }
            }]);
    $(document).ready(function(){
        $("#main").hide().fadeIn(1800);

    });

    setTimeout(function() {
        // $(".raty").raty({
        //     score: window.totalStars,
        //     readOnly: true
        // })
    }, 500);
