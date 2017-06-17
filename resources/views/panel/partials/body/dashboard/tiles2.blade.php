<style>
    .sc-card:hover{}
    .panel:hover{}
    .image{}
    .counter {}
    .text{}
</style>

<div class="row">
    <div class="col-lg-3 col-md-4 col-sm-6 sc-card" style="">
        <a href="{{ url('/panel/school/students') }}">
        <div class="panel" style="padding: 20px 10px; height: 100px; border: 1px solid #008da5; border-radius: 10px; text-align: center; box-shadow: 0 0 11px #bbb">
            {{--<i class="md md-person text-primary"></i>--}}
            <img src="/new/img/student2.png" alt="student image" class="image" height="45px">
            <span class="counter" style="color: #00839b; font-weight: 400; font-size: 130%; margin: 0 3px 0 15px;">{{ count($data['students']) }}</span>
            <span class="text" style="color: #008da5; font-weight: 300; font-size: 120%">Μαθητές</span>
        </div>
        </a>
    </div>


    <div class="col-lg-3 col-md-4 col-sm-6">
        <a href="{{ url('/panel/school/teachers') }}">
            <div class="panel" style="padding: 20px 10px; height: 100px; border: 1px solid #008da5; border-radius: 10px; text-align: center; box-shadow: 0 0 11px #bbb">
                {{--<i class="md md-person text-primary"></i>--}}
                <img src="/new/img/teacher.png" alt="teacher image" class="image" height="45px">
                <span class="counter" style="color: #00839b; font-weight: 400; font-size: 130%; margin: 0 3px 0 15px;">{{ count($data['teachers']) }}</span>
                <span class="text" style="color: #008da5; font-weight: 300; font-size: 120%">Διδάσκοντες</span>
            </div>
        </a>
    </div>

    <div class="col-lg-3 col-md-4 col-sm-6">
        <a href="{{ url('/panel/school/scholarships/view') }}">
            <div class="panel" style="padding:20px 10px; height: 100px; border: 1px solid #008da5; border-radius: 10px; text-align: center; box-shadow: 0 0 11px #bbb">
                {{--<i class="md md-person text-primary"></i>--}}
                <img src="/new/img/trophy4.png" alt="trophy image" class="image" height="45px">
                <span class="counter" style="color: #00839b; font-weight: 400; font-size: 130%; margin: 0 3px 0 15px;">{{ count($data['scholarships']) }}</span>
                <span class="text" style="color: #008da5; font-weight: 300; font-size: 120%">Υποτροφίες</span>
            </div>
        </a>
    </div>

    <div class="col-lg-3 col-md-4 col-sm-6">
        <a href="{{ url('/panel/school/scholarships/request') }}">
            <div class="panel" style="padding: 20px 10px; height: 100px; border: 1px solid #008da5; border-radius: 10px; text-align: center; box-shadow: 0 0 11px #bbb">
                {{--<i class="md md-person text-primary"></i>--}}
                <img src="/panel/assets/images/steps/terms.png" alt="admissions image" class="image" height="45px">
                <span class="counter" style="color: #00839b; font-weight: 400; font-size: 130%; margin: 0 3px 0 15px;">{{ count($data['admissions']) }}</span>
                <span class="text" style="color: #008da5; font-weight: 300; font-size: 120%">Αιτήματα Υπ.</span>
            </div>
        </a>
    </div>

    <div class="col-lg-3 col-md-4 col-sm-6">
        <a href="{{ url('/panel/school/studies') }}">
            <div class="panel" style="padding: 20px 10px; height: 100px; border: 1px solid #008da5; border-radius: 10px; text-align: center; box-shadow: 0 0 11px #bbb">
                {{--<i class="md md-person text-primary"></i>--}}
                <img src="/panel/assets/images/steps/step3-skills2.png" alt="photos image" class="image" height="45px">
                <span class="counter" style="color: #00839b; font-weight: 400; font-size: 130%; margin: 0 3px 0 15px;">{{ count($data['studies']) }}</span>
                <span class="text" style="color: #008da5; font-weight: 300; font-size: 120%">Ειδικ Σπουδών</span>
            </div>
        </a>
    </div>

    <div class="col-lg-3 col-md-4 col-sm-6">
        <a href="{{ url('/panel/school/profile/images') }}">
            <div class="panel" style="padding: 20px 10px; height: 100px; border: 1px solid #008da5; border-radius: 10px; text-align: center; box-shadow: 0 0 11px #bbb">
                {{--<i class="md md-person text-primary"></i>--}}
                <img src="/panel/assets/images/steps/photo.png" alt="photos image" class="image" height="45px">
                <span class="counter" style="color: #00839b; font-weight: 400; font-size: 130%; margin: 0 3px 0 15px;">{{ count($data['images']) }}</span>
                <span class="text" style="color: #008da5; font-weight: 300; font-size: 120%">Φωτογραφίες</span>
            </div>
        </a>
    </div>

    <div class="col-lg-3 col-md-4 col-sm-6">
        <a href="{{ url('/panel/school/students') }}">
            <div class="panel" style="padding:20px 10px; height: 100px; border: 1px solid #008da5; border-radius: 10px; text-align: center; box-shadow: 0 0 11px #bbb">
                {{--<i class="md md-person text-primary"></i>--}}
                <img src="/panel/assets/images/steps/step2-marketing.png" alt="page image" class="image" height="45px">
                <span class="counter" style="color: #00839b; font-weight: 400; font-size: 130%; margin: 0 3px 0 15px;">{{ $data['pageviews'] }}</span>
                <span class="text" style="color: #008da5; font-weight: 300; font-size: 120%">Page Views</span>
            </div>
        </a>
    </div>
</div>
