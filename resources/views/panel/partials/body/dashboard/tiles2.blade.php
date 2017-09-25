
{{--Styling on panel/pages/school/dashboard/main.blade.php--}}

<div class="row">
    <div class="col-lg-3 col-md-4 col-sm-6">
        <a href="{{ url('/panel/school/students') }}">
            <div class="panel-box box1">
                <img src="/new/img/student2.png" alt="student image" class="panel-image">
                <span class="panel-counter">{{ count($data['students']) }}</span>
                <span class="panel-text">@lang('panel/schools/dashboard.students')</span>
            </div>
        </a>
    </div>


    <div class="col-lg-4 col-md-8 col-sm-6">
        <a href="{{ url('/panel/school/teachers') }}">
            <div class="panel-box box2">
                <img src="/new/img/teacher.png" alt="teacher image" class="panel-image">
                <span class="panel-counter">{{ count($data['teachers']) }}</span>
                <span class="panel-text">@lang('panel/schools/dashboard.teachers')</span>
            </div>
        </a>
    </div>
    <!-- ==================== -->
    {{--<div class="clearfix"></div>--}}


    <div class="col-lg-5 col-md-8 col-sm-6">
        <a href="{{ url('/panel/school/studies') }}">
            <div class="panel-box box2">
                <img src="/panel/assets/images/steps/step3-skills2.png" alt="photos image" class="panel-image">
                <span class="panel-counter">{{ count($data['studies']) }}</span>
                <span class="panel-text">@lang('panel/schools/dashboard.studies')</span>
            </div>
        </a>
    </div>

    <div class="col-lg-3 col-md-4 col-sm-6">
        <a href="{{ url('/panel/school/profile/images') }}">
            <div class="panel-box box2">
                <img src="/panel/assets/images/steps/photo.png" alt="photos image" class="panel-image">
                <span class="panel-counter">{{ count($data['images']) }}</span>
                <span class="panel-text">@lang('panel/schools/dashboard.photos')</span>
            </div>
        </a>
    </div>
    <!-- ==================== -->
    {{--<div class="clearfix"></div>--}}

    <div class="col-lg-3 col-md-4 col-sm-6">
        <a href="{{ url('/panel/school/scholarships/view') }}">
            <div class="panel-box box2">
                <img src="/new/img/trophyB.png" alt="trophy image" class="panel-image">
                <span class="panel-counter">{{ count($data['scholarships']) }}</span>
                <span class="panel-text">@lang('panel/schools/dashboard.scholarships')</span>
            </div>
        </a>
    </div>

    <div class="col-lg-3 col-md-4 col-sm-6">
        <a href="{{ url('/panel/school/scholarships/request') }}">
            <div class="panel-box box2">
                <img src="/panel/assets/images/steps/terms.png" alt="admissions image" class="panel-image">
                <span class="panel-counter">{{ count($data['admissions']) }}</span>
                <span class="panel-text">@lang('panel/schools/dashboard.admissions')</span>
            </div>
        </a>
    </div>

    <!-- ==================== -->
    {{--<div class="clearfix"></div>--}}

    <div class="col-lg-3 col-md-4 col-sm-6">
        <a href="{{ url('/panel/dashboard') }}">
            <div class="panel-box box2">
                <img src="/panel/assets/images/steps/stars.png" alt="stars image" class="panel-image">
                <span class="panel-counter">{{ count($data['pageviews']) }}</span>
                <span class="panel-text">@lang('panel/schools/dashboard.reviews')</span>
            </div>
        </a>
    </div>
    <div class="col-lg-3 col-md-4 col-sm-6 ">
        <a href="{{ url('/panel/dasboard') }}">
            <div class="panel-box box2">
                <img src="/panel/assets/images/steps/step2-marketing.png" alt="page image" class="panel-image">
                <span class="panel-counter">{{ $data['pageviews'] }}</span>
                <span class="panel-text">@lang('panel/schools/dashboard.pageviews')</span>
            </div>
        </a>
    </div>


</div>
