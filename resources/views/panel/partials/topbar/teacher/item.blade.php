<notifications></notifications>

<li class="dropdown">
    <a href="" class="dropdown-toggle profile waves-effect" data-toggle="dropdown" aria-expanded="true">
        <img src="{{substr(Auth::user()->info->avatar, 0, 4) == 'http' ? '' : '/'}}{{ Auth::user()->info->avatar }}" alt="user-img" class="img-circle">
    </a>
    <ul class="dropdown-menu">

            <li><a href="/panel/users/student/studentCv"><i class="ti-user m-r-5"></i>@lang('panel/schools/topbar.profile')</a></li>
        {{-- <li><a href="javascript:void(0)"><i class="ti-lock m-r-5"></i> Lock screen</a></li> --}}

        <li>
            <a href="javascript:void(0)"
                onclick="event.preventDefault();
                         document.getElementById('logout-form').submit();">
                <i class="ti-power-off m-r-5"></i> @lang('panel/schools/topbar.logout')
            </a>

            <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
            </form>
        </li>
    </ul>
</li>
