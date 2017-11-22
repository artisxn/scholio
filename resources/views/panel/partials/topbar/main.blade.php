<div class="topbar">
    <!-- LOGO -->
    @include('panel.partials.topbar.logo')

            <!-- Button mobile view to collapse sidebar menu -->
    <div class="navbar navbar-default" role="navigation">
        <div class="container">

            <div class="pull-left">
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
                @if(config('scholio.show.fakeLogin'))
                <form  method="GET" action="/fake/login" id="langForm" style="display: inline-block; position: absolute; top: 18px; margin-left: 110px; color: #555">
                    <select onchange="this.form.submit()" style="border: none; background-color: transparent; margin: -15px; width: 250px;" name="userID">
                            @foreach(App\User::all() as $user)
                                @if(auth()->user()->id == $user->id)
                                    <option data-icon="fa" value="{{ $user->id }}" selected="selected">{{ $user->role }}-{{$user->name}} | {{ $user->id }} </option>
                                @else
                                    <option data-icon="fa" value="{{ $user->id }}">{{ $user->role }}-{{$user->name}} | {{ $user->id }} </option>
                                @endif
                            @endforeach
                    </select>
                </form>
                    @endif
                    {{--  <li></li>  --}}
                    

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
                @if(auth()->user()->role == 'school')
                        <?php echo $__env->make('panel.partials.topbar.school.item', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                @elseif(auth()->user()->role == 'student')
                     <?php echo $__env->make('panel.partials.topbar.student.item', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                @elseif(auth()->user()->role == 'teacher')
                     <?php echo $__env->make('panel.partials.topbar.teacher.item', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                @endif


            </ul>


        </div>
    </div>
</div>
