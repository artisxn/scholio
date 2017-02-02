<div class="topbar">

    <!-- LOGO -->
      @include('panel.partials.topbar.logo')

    <!-- Button mobile view to collapse sidebar menu -->
    <div class="navbar navbar-default" role="navigation">
        <div class="container">
            <div class="">
                <div class="pull-left">
                    <button class="button-menu-mobile open-left">
                        <i class="fa fa-outdent"></i>
                    </button>
                    <span class="clearfix"></span>
                </div>

                <!-- Search -->
                @include('panel.partials.topbar.search')

                <!-- Items -->
                <ul class="nav navbar-nav navbar-right pull-right">
                    @include('panel.partials.topbar.item')
                </ul>
            </div>
            <!--/.nav-collapse -->
        </div>
    </div>
</div>
