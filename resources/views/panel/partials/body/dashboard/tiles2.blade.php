<div class="row">
    <div class="col-lg-3 col-sm-6">
    <a href="{{ url('/panel/school/students') }}">
        <div class="widget-panel widget-style-2 card-box">
            <i class="md md-person text-primary"></i>
            <h2 class="m-0 counter font-600">{{ count($data['students']) }}</h2>
            <div class="text-muted m-t-5">Total Students</div>
        </div>
        </a>
    </div>
    <div class="col-lg-3 col-sm-6">
     <a href="{{ url('/panel/school/teachers') }}">
        <div class="widget-panel widget-style-2 card-box">
            <i class="md md-school text-warning"></i>
            <h2 class="m-0 counter font-600">{{ count($data['teachers']) }}</h2>
            <div class="text-muted m-t-5">teachers</div>
        </div>
        </a>
    </div>
    <div class="col-lg-3 col-sm-6">
     <a href="{{ url('/panel/school/scholarships/view') }}">
        <div class="widget-panel widget-style-2 card-box">
            <i class="md md-wallet-giftcard text-info"></i>
            <h2 class="m-0 counter font-600">{{ count($data['scholarships']) }}</h2>
            <div class="text-muted m-t-5">Scholarships</div>
        </div>
        </a>
    </div>
    <div class="col-lg-3 col-sm-6">
        <div class="widget-panel widget-style-2 card-box">
            <a href="{{ url('') }}"><i class="md md-pageview text-custom"></i></a>
            <h2 class="m-0 counter font-600">{{ $data['pageviews'] }}</h2>
            <div class="text-muted m-t-5">Page Views</div>
        </div>
    </div>
</div>
