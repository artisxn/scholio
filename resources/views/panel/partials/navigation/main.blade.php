<div class="left side-menu">
    <div class="user-details">

        <div class="pull-left">
        @if(auth()->user()->role == 'school')
            <img src="{{substr(Auth::user()->info->logo, 0, 4) == 'http' ? '' : '/images/schools/'}}{{ Auth::user()->info->logo }}" alt="" class="thumb-md" style="margin-top: 5px">
        @else
            <img src="{{substr(Auth::user()->info->avatar, 0, 4) == 'http' ? '' : '/images/schools/'}}{{ Auth::user()->info->avatar }}" alt="" class="thumb-md" style="margin-top: 5px">
        @endif
        </div>
        <div class="user-info">
            <div class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <span class="" style="font-weight: 100; font-size: 95%;">

                        {{ auth()->user()->name }}
                    </span>
                    <span class="caret"></span>
                </a>
                <ul class="dropdown-menu">
                      <li><a href=""><i class="ti-user m-r-5"></i> @lang('panel/schools/navigation.menu.profile')</a></li>
                      <li><a href=""><i class="ti-settings m-r-5"></i>@lang('panel/schools/navigation.menu.settings')</a></li>
                      <li><a href=""><i class="ti-power-off m-r-5"></i>@lang('panel/schools/navigation.menu.logout')</a></li>
                </ul>
            </div>
        </div>
    </div>
        <!--- Divider -->

        <div id="sidebar-menu">
            <ul>
                @if(Auth::user()->role == 'school')
                    @include('panel.partials.navigation.links-schools')
                @endif

                @if(Auth::user()->role == 'admin')
                    @include('panel.partials.navigation.links-admin')
                @endif

                @if(Auth::user()->role == 'student')
                    @include('panel.partials.navigation.links-students')
                @endif

                @if(Auth::user()->role == 'teacher')
                    @include('panel.partials.navigation.links-teachers')
                @endif

                @if(Auth::user()->role == 'parent')
                    @include('panel.partials.navigation.links-parents')
                @endif
            </ul>
        </div>
</div>
