<div class="topbar">
    <!-- LOGO -->
    <?php echo $__env->make('panel.partials.topbar.logo', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

            <!-- Button mobile view to collapse sidebar menu -->
    <div class="navbar navbar-default" role="navigation">
        <div class="container  top-bar-container">

            <div class=" pull-left">
                <button class="button-menu-mobile open-left">
                    <i class="fa fa-outdent"></i>
                </button>
                <form method="GET" id="langForm" style="display: inline-block; position: absolute; top: 18px; margin-left: 60px; color: #555">
                    <select onchange="changeLang(this)" class="" data-live-search="false" data-mobile="false" data-size='3' data-width="100%" data-style=""
                            style="border: none; background-color: transparent; margin: -15px">
                        <option data-icon="fa" value="en" {{ request()->cookie('lang')=='en' ? 'selected':'' }} >ENG</option>
                        <option data-icon="fa" value="el" {{ request()->cookie('lang')=='el' ? 'selected':'' }} >GR</option>
                    </select>
                </form>
            </div>






            <div class="icon-box">
                     <span class="icon-navigation-container hidden-xxs">
                         @if(auth()->user()->role == 'school')
                             @include('panel.partials.topbar.school.main')
                         @elseif(auth()->user()->role == 'student')
                             @include('panel.partials.topbar.student.main')
                         @elseif(auth()->user()->role == 'teacher')
                             @include('panel.partials.topbar.teacher.main')
                         @endif
                  </span>
            </div>






            <ul class="nav navbar-nav navbar-right pull-right">

                <?php echo $__env->make('panel.partials.topbar.item', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>


            </ul>


        </div>
    </div>
</div>
