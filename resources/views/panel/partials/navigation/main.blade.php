<div class="left side-menu">
    <div class="sidebar-inner slimscrollleft">
    <div class="user-details">
    <div>
        {{ Auth::user()->school->id }}
        {{ Auth::user()->school->type->name}}
    </div>

        <div class="pull-left">
            <img src="{{substr(Auth::user()->school->logo, 0, 4) == 'http' ? '' : '/images/schools/'}}{{ Auth::user()->school->logo }}" alt="" class="thumb-md" style="margin-top: 5px">
        </div>
        <div class="user-info">
            <div class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <span class="" style="font-weight: 100; font-size: 95%">

                        {{ Auth::user()->school->name() }}
                    </span> <span class="caret"></span></a>
                <ul class="dropdown-menu">
                      <li><a href=""><i class="ti-user m-r-5"></i> Προφίλ</a></li>
                      <li><a href=""><i class="ti-settings m-r-5"></i> Ρυθμίσεις</a></li>
                      <li><a href=""><i class="ti-power-off m-r-5"></i> Αποσύνδεση</a></li>
                </ul>
            </div>
            <!--<p class="text-muted m-0">Κολλέγιο</p>-->
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
            <div class="clearfix"></div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
