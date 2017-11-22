
{{--Styling on panel/pages/school/dashboard/main.blade.php--}}

<div class="row">
    <div class="col-lg-3 col-md-4 col-sm-6" >
        <a href="{{ url('/panel/school/students') }}" id="btn-students">
            <div class="panel-box box1">
                <img src="/new/img/student2.png"      alt="student image"  class="panel-image hidden"  id="img-student-color">
                <img src="/new/img/student2-line.png" alt="student image"  class="panel-image visible" id="img-student-black">


                <span class="sc-t-gray" id="students-text">
                    <span class="panel-counter">{{ count($data['students']) }}</span>
                    <span class="panel-text">@lang('panel/schools/dashboard.students')</span>
                </span>
            </div>
        </a>
    </div>


    <div class="col-lg-4 col-md-8 col-sm-6">
        <a href="{{ url('/panel/school/teachers') }}" id="btn-teachers">
            <div class="panel-box box2">
                <img src="/new/img/teacher.png"      alt="teacher image" class="panel-image hidden"   id="img-teacher-color">
                <img src="/new/img/teacher-line.png" alt="teacher image" class="panel-image visible"  id="img-teacher-black">

                <span class="sc-t-gray" id="teachers-text">
                    <span class="panel-counter">{{ count($data['teachers']) }}</span>
                    <span class="panel-text">@lang('panel/schools/dashboard.teachers')</span>
                </span>
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
        <a href="{{ url('/panel/school/scholarships/view') }}" id="btn-trophy">
            <div class="panel-box box2">
                <img src="/new/img/trophy-outline-filled.png"      alt="trophy image" class="panel-image hidden"   id="img-trophy-color">
                <img src="/new/img/trophy-outline.png"             alt="trophy image" class="panel-image visible"  id="img-trophy-black">

                <span class="sc-t-gray" id="trophy-text">
                    <span class="panel-counter">{{ count($data['scholarships']) }}</span>
                    <span class="panel-text">@lang('panel/schools/dashboard.scholarships')</span>
                </span>
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
        <a href="{{ url('panel/school/reviews/view') }}">
            <div class="panel-box box2">
                <img src="/panel/assets/images/steps/stars.png" alt="stars image" class="panel-image">
                <span class="panel-counter">{{ $data['reviews'] }}</span>
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
