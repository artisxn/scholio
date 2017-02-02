<notifications></notifications>

<li class="hidden-xs">
    <a href="#" id="btn-fullreen" class="waves-effect"><i class="icon-size-fullscreen"></i></a>
</li>

<li class="dropdown">
    <a href="" class="dropdown-toggle profile waves-effect" data-toggle="dropdown" aria-expanded="true">
        <img src="/images/schools/{{ Auth::user()->school->logo->path }}" alt="user-img" class="img-circle">
    </a>
    <ul class="dropdown-menu">
        <li><a href="/panel/{{ Auth::user()->role }}/profile"><i class="ti-user m-r-5"></i> Profile</a></li>
        <li><a href="javascript:void(0)"><i class="ti-lock m-r-5"></i> Lock screen</a></li>

        <li>
            <a href="javascript:void(0)"
                onclick="event.preventDefault();
                         document.getElementById('logout-form').submit();">
                <i class="ti-power-off m-r-5"></i> Logout
            </a>

            <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
            </form>
        </li>
    </ul>
</li>
