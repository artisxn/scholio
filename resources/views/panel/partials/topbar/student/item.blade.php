<li>
    <div class="text-center cs-select-container">
        <select class="cs-select-student cs-select cs-skin-circular cs-skin-circular-student">
            <option value="" disabled selected>Select</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>

        </select>
    </div>
</li>

<notifications></notifications>

{{--<li class="hidden-xs">--}}
    {{--<a href="#" id="btn-fullreen" class="waves-effect"><i class="icon-size-fullscreen"></i></a>--}}
{{--</li>--}}

<li class="dropdown">
    <a href="" class="dropdown-toggle profile waves-effect" data-toggle="dropdown" aria-expanded="true">
        <img src="{{substr(Auth::user()->info->avatar, 0, 4) == 'http' ? '' : ''}}{{ Auth::user()->info->avatar }}" alt="user-img" class="img-circle">
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
