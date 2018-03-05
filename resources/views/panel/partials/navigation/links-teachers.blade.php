<li class="link" style="margin-top: 50px">
    <a href="{{ url('panel/dashboard') }}" class="{{ request()->path() == 'panel/dashboard' ? 'active' : ''}}">
        <i class="fa fa-tachometer"></i>
        <span>@lang('panel/students/navigation.dashboard')</span>
    </a>
</li>


{{--<li class="text-muted menu-title">@lang('panel/students/navigation.management')</li>--}}
<div style="height: 1px; margin: 0 15px; background-color: #3e5f6e"></div>

    <li class="has_sub">
        <a href="#" class=""><i class="ion-android-user-menu"></i><span> @lang('panel/students/navigation.profile') </span> </a>
        <ul class="list-unstyled">
            <li><a class="{{ request()->path() == 'panel/users/teacher/profile' ? 'active' : ''}}" href="{{ route('teachers-profile') }}">@lang('panel/teachers/panel.contactInfo')</a></li>
            <li><a class="{{ request()->path() == 'panel/users/teacher/cv' ? 'active' : ''}}" href="{{ route('teacher-cv') }}">@lang('panel/students/navigation.cv')</a></li>
            <li><a class="{{ request()->path() == 'panel/users/teacher/schools' ? 'active' : ''}}" href="{{ route('teachers-schools') }}">@lang('panel/students/navigation.schools')
                    <span class="pull-right badge  badge-nav">{{ count(auth()->user()->connectedSchool) }}</span></a>
                </a></li>

        </ul>
    </li>

    {{-- <li class="has_sub">
        <a href="#" class=""><i class="fa fa-graduation-cap"></i><span> Τάξεις </span></a>
        <ul class="list-unstyled">
            <li><a href="{{url('/panel/users/teacher/class/show')}}">Προβολή Τάξεων</a></li>
        </ul>
    </li> --}}
