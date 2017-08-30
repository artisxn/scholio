@section('styles')
    <style>

    </style>
@endsection

<li class="link"><a href="{{ url('dashboard') }}" class="{{ request()->path() == 'panel/dashboard' ? 'active' : ''}}"><i class="fa fa-tachometer"></i> <span>@lang('panel/schools/navigation.dashboard')</span> </a></li>

    <li class="text-muted menu-title">@lang('panel/schools/navigation.management')</li>

    <li class="has_sub link">
        <a href="#"><i class="icon-people"></i> <span> @lang('panel/schools/navigation.resource.title') </span> </a>
        <ul class="list-unstyled submenu">
            <li><a href="/panel/school/students" class="{{ request()->path() == 'panel/school/students' ? 'active' : ''}}">@lang('panel/schools/navigation.resource.students') </a> </li>
            <li><a href="/panel/school/teachers" class="{{ request()->path() == 'panel/school/teachers' ? 'active' : ''}}">@lang('panel/schools/navigation.resource.teachers') </a></li>
            <li><a href="/panel/school/requests" class="{{ request()->path() == 'panel/school/requests' ? 'active' : ''}}">@lang('panel/schools/navigation.resource.requests') </a></li>
            <!-- ========= DELETE ME ============ -->
            <li><a href="/panel/school/testing" class="{{ request()->path() == 'panel/school/testing' ? 'active' : ''}}">Testing </a></li>
            <!-- ================================ -->
        </ul>
    </li>

    <li class="has_sub link">
        <a href="#" >
            <i class="ion-android-user-menu"></i><span> @lang('panel/schools/navigation.profile.title') </span> </a>
        <ul class="list-unstyled submenu">
            <li><a href='/panel/school/profile' class="{{ request()->path() == 'panel/school/profile' ? 'active' : ''}}">@lang('panel/schools/navigation.profile.contact')</a></li>
            <li><a href='/panel/school/studies' class="{{ request()->path() == 'panel/school/studies' ? 'active' : ''}}">@lang('panel/schools/navigation.profile.studies')</a></li>
            <li><a href='/panel/school/profile/images' class="{{ request()->path() == 'panel/school/profile/images' ? 'active' : ''}}">@lang('panel/schools/navigation.profile.photo')</a></li>
        </ul>
    </li>

    <li class="has_sub link">
        <a href="#" class="{{ 0 === strpos(request()->path(), 'panel/school/admission/') ? 'active' : ''}}">
            <i class="ion-trophy"></i>
            <span> @lang('panel/schools/navigation.scholarships.title')</span></a>
        <ul class="list-unstyled submenu">
            <li ><a href="/panel/school/scholarships/create" class="{{ request()->path() == 'panel/school/scholarships/create' ? 'active' : ''}}">@lang('panel/schools/navigation.scholarships.add')</a></li>
            <li ><a href="/panel/school/scholarships/view" class="{{ request()->path() == 'panel/school/scholarships/view' ? 'active' : ''}}">@lang('panel/schools/navigation.scholarships.show')</a></li>
            <li><a href="{{ url('panel/school/scholarships/request') }}" class="{{ request()->path() == 'panel/school/scholarships/request' ? 'active' : ''}}">@lang('panel/schools/navigation.scholarships.admissions')</a></li>
        </ul>
    </li>

    <li class="has_sub">
        <a href="#"><i class="fa fa-cogs"></i><span> @lang('panel/schools/navigation.settings.title') </span></a>
        <ul class="list-unstyled">
            <li><a href="{{ url('panel/school/settings/public') }}" class="{{ request()->path() == 'panel/school/settings/public' ? 'active' : ''}}">@lang('panel/schools/navigation.settings.profile')</a></li>
            <li><a href="{{ url('panel/school/settings/scholarships') }}" class="{{ request()->path() == 'panel/school/settings/scholarships' ? 'active' : ''}}">@lang('panel/schools/navigation.settings.admissions')</a></li>
        </ul>
    </li>

    <li class="has_sub">
        <a href="#" class=""><i class="ion-ios7-star-half"></i><span> @lang('panel/schools/navigation.reviews.title') </span></a>
        <ul class="list-unstyled">
            <li><a href="">@lang('panel/schools/navigation.reviews.show')</a></li>
        </ul>
    </li>

    {{-- <li class="has_sub">
        <a href="#" class=""><i class="fa fa-graduation-cap"></i><span> Τάξεις </span></a>
        <ul class="list-unstyled">
            <li><a href="{{url('/panel/school/class/create')}}">Δημιουργία Τάξης</a></li>
            <li><a href="{{url('/panel/school/class/show')}}">Προβολή Τάξεων</a></li>
        </ul>
    </li> --}}

@section('scripts')

@endsection
