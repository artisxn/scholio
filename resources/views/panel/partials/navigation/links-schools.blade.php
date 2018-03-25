@section('styles')
    <style>
        /*===== styling on views/panel/layouts/main.blade.php   =====*/


    </style>
@endsection

<li class="link" ><a id="navDashboard" href="{{ url('dashboard') }}" class="{{ request()->path() == 'panel/dashboard' ? 'active' : ''}}"><i class="fa fa-tachometer"></i> <span>@lang('panel/schools/navigation.dashboard')</span> </a></li>
<li class="link hidden-xs hidden-sm"><a href="#" onclick="startTour()"><i class="fa fa-tv"></i> <span >@lang('panel/schools/navigation.tourStart')</span> </a></li>

    {{--<li class="text-muted menu-title">@lang('panel/schools/navigation.management')</li>--}}
<div style="height: 1px; margin: 0 15px; background-color: #3e5f6e"></div>

     @if(auth()->user()->subscription->plan->id != 1)
        <li class="has_sub link">
            <a href="#" id="navResources"><i class="icon-people"></i> <span> @lang('panel/schools/navigation.resource.title') </span> </a>
            <ul class="list-unstyled submenu">
                <li>
                    <a href="/panel/school/students" class="{{ request()->path() == 'panel/school/students' ? 'active' : ''}}">
                        @lang('panel/schools/navigation.resource.students')
                        <span class="pull-right badge  badge-nav  " >{{ count(auth()->user()->info->connected) }}</span>
                    </a>
                </li>
                <li><a href="/panel/school/teachers" class="{{ request()->path() == 'panel/school/teachers' ? 'active' : ''}}">@lang('panel/schools/navigation.resource.teachers')
                    <span class="pull-right badge  badge-nav">{{ count(auth()->user()->info->connectedTeachers) }}</span>
                </a></li>
                <li><a href="/panel/school/requests" class="{{ request()->path() == 'panel/school/requests' ? 'active' : ''}}">@lang('panel/schools/navigation.resource.requests')
                    <span class="pull-right badge  badge-nav">{{ count(auth()->user()->info->apply) }}</span>
                </a></li>
            </ul>
        </li>
    @endif

    <li class="has_sub link">
        <a href="#" id="navProfile">
            <i class="ion-android-user-menu"></i><span> @lang('panel/schools/navigation.profile.title') </span> </a>
        <ul class="list-unstyled submenu">
             @if(auth()->user()->subscription->plan->id != 1)
                <li><a href="{{ url('panel/school/settings/public') }}" class="{{ request()->path() == 'panel/school/settings/public' ? 'active' : ''}}">@lang('panel/schools/navigation.profile.settings')</a></li>
             @endif
            <li><a href='/panel/school/profile' class="{{ request()->path() == 'panel/school/profile' ? 'active' : ''}}">@lang('panel/schools/navigation.profile.contact')</a></li>
            <li><a href='/panel/school/studies' class="{{ request()->path() == 'panel/school/studies' ? 'active' : ''}}">@lang('panel/schools/navigation.profile.studies')
                <span class="pull-right badge  badge-nav">{{ count(auth()->user()->info->study) }}</span>
            </a></li>
            <li><a href='/panel/school/profile/images' class="{{ request()->path() == 'panel/school/profile/images' ? 'active' : ''}}">@lang('panel/schools/navigation.profile.photo')
                <span class="pull-right badge  badge-nav">{{ count(auth()->user()->info->image) }}</span>
            </a></li>
        </ul>
    </li>

    <li class="has_sub link">
        <a id="navScholarships" href="#" class="{{ 0 === strpos(request()->path(), 'panel/school/admission/') ? 'active' : ''}}">
            <i class="ion-trophy"></i>
            <span> @lang('panel/schools/navigation.scholarships.title')</span></a>
        <ul class="list-unstyled submenu">
            <li><a href="{{ url('panel/school/settings/scholarships') }}" class="{{ request()->path() == 'panel/school/settings/scholarships' ? 'active' : ''}}">@lang('panel/schools/navigation.scholarships.settings')</a></li>
            <li class="hidden-xs">
                <a href="/panel/school/scholarships/create" class="{{ request()->path() == 'panel/school/scholarships/create' ? 'active' : ''}}">@lang('panel/schools/navigation.scholarships.add')
                    <span class="pull-right badge badge-danger badge-nav">{{auth()->user()->info->allScholarshipLimits()}}</span></a>
            </li>
            <li ><a href="/panel/school/scholarships/view" class="{{ request()->path() == 'panel/school/scholarships/view' ? 'active' : ''}}">@lang('panel/schools/navigation.scholarships.show')
                <span class="pull-right badge  badge-nav">{{ count(auth()->user()->info->activeScholarships())}}</span></a></li>
            <li><a href="{{ url('panel/school/scholarships/request') }}" class="{{ request()->path() == 'panel/school/scholarships/request' ? 'active' : ''}}">@lang('panel/schools/navigation.scholarships.admissions')
                <span class="pull-right badge  badge-nav">{{ count(auth()->user()->info->admissions()) }}</span>
            </a></li>
        </ul>
    </li>

    {{--<li class="has_sub">--}}
        {{--<a href="#"><i class="fa fa-cogs"></i><span> @lang('panel/schools/navigation.settings.title') </span></a>--}}
        {{--<ul class="list-unstyled">--}}
            {{--<li><a href="{{ url('panel/school/settings/public') }}" class="{{ request()->path() == 'panel/school/settings/public' ? 'active' : ''}}">@lang('panel/schools/navigation.settings.profile')</a></li>--}}
            {{--<li><a href="{{ url('panel/school/settings/scholarships') }}" class="{{ request()->path() == 'panel/school/settings/scholarships' ? 'active' : ''}}">@lang('panel/schools/navigation.settings.admissions')</a></li>--}}
        {{--</ul>--}}
    {{--</li>--}}

     @if(auth()->user()->subscription->plan->id != 1)
        <li class="has_sub" >
            <a href="#" id="navReviews" class=""><i class="ion-ios7-star-half"></i><span> @lang('panel/schools/navigation.reviews.title') </span></a>
            <ul class="list-unstyled">
                <li><a href="{{ url('panel/school/reviews/view') }}" class="{{ request()->path() == 'panel/school/reviews/view' ? 'active' : ''}}">@lang('panel/schools/navigation.reviews.show')
                    <span class="pull-right badge  badge-nav">{{ count(auth()->user()->info->reviews) }}</span>
                </a></li>
            </ul>
        </li>
    @endif

{{--<div style="height: 1px; margin: 0 15px; background-color: #3e5f6e"></div>--}}



    {{-- <li class="has_sub">
        <a href="#" class=""><i class="fa fa-graduation-cap"></i><span> Τάξεις </span></a>
        <ul class="list-unstyled">
            <li><a href="{{url('/panel/school/class/create')}}">Δημιουργία Τάξης</a></li>
            <li><a href="{{url('/panel/school/class/show')}}">Προβολή Τάξεων</a></li>
        </ul>
    </li> --}}

@section('scripts')



@endsection
