<div class="row">
    <div class="col-lg-3 col-sm-6">
        <div class="widget-panel widget-style-2 card-box">
            <a href="{{ url('') }}"><i class="md md-person text-primary"></i></a>
            <h2 class="m-0 counter font-600">{{ count($data['users']) }}</h2>
            <div class="text-muted m-t-5">Total Users</div>
        </div>
    </div>
    <div class="col-lg-3 col-sm-6">
        <div class="widget-panel widget-style-2 card-box">
            <a href="{{ url('') }}"><i class="md md-school text-warning"></i></a>
            <h2 class="m-0 counter font-600">{{ count($data['schools']) }}</h2>
            <div class="text-muted m-t-5">Schools</div>
        </div>
    </div>
    <div class="col-lg-3 col-sm-6">
        <div class="widget-panel widget-style-2 card-box">
            <a href="{{ url('') }}"><i class="md md-wallet-giftcard text-info"></i></a>
            <h2 class="m-0 counter font-600">{{ count($data['scholarships']) }}</h2>
            <div class="text-muted m-t-5">Scholarships</div>
        </div>
    </div>
    <div class="col-lg-3 col-sm-6">
        <div class="widget-panel widget-style-2 card-box">
            <a href="{{ url('') }}"><i class="md md-pageview text-custom"></i></a>
            <h2 class="m-0 counter font-600">{{ $data['pageviews'] }}</h2>
            <div class="text-muted m-t-5">Page Views</div>
        </div>
    </div>
</div>
