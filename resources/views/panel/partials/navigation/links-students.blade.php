<li class="link"><a href="{{ url('panel/dashboard') }}" class="{{ request()->path() == 'panel/dashboard' ? 'active' : ''}}"><i class="fa fa-tachometer"></i> <span>@lang('panel/students/navigation.dashboard')</span> </a></li>


<li class="text-muted menu-title">@lang('panel/students/navigation.management')</li>
<li class="has_sub">
    <a href="#" class=""><i class="ion-android-user-menu"></i><span> @lang('panel/students/navigation.profile') </span> </a>
    <ul class="list-unstyled">
        <li><a href="{{ route('students-cv') }}" class="{{ request()->path() == 'panel/users/student/studentCv' ? 'active' : ''}}">@lang('panel/students/navigation.cv')</a></li>
     {{--    <li><a href="{{ route('students-profile') }}" class="{{ request()->path() == 'panel/users/student/profile' ? 'active' : ''}}">Επεξεργασία Προφίλ</a></li> --}}
       <li><a href="{{ route('students-kinship') }}" class="{{ request()->path() == 'panel/users/student/kinship' ? 'active' : ''}}">@lang('panel/students/navigation.parents')</a></li>
        <li><a href="{{ route('students-my-schools') }}" class="{{ request()->path() == 'panel/users/student/mySchools' ? 'active' : ''}}">@lang('panel/students/navigation.schools')</a></li>

    </ul>
</li>

<li class="has_sub">
    <a href="#" >
        <i class="ion-trophy"></i>
        <span>@lang('panel/students/navigation.scholarships')</span></a>
    <ul class="list-unstyled">
        <li><a class="{{ request()->path() == 'panel/users/student/scholarship/request' ? 'active' : ''}}" href="{{ route('student-scholarship-request') }}">@lang('panel/students/navigation.admissions')
        {{ count(auth()->user()->admissions) }}
        </a></li>
        {{--  <li><a href="">@lang('panel/students/navigation.reply')</a></li>  --}}
    </ul>
</li>

<li class="has_sub">
    <a href="#" class=""><i class="ion-ios7-star-half"></i><span>@lang('panel/students/navigation.reviews')</span></a>
    <ul class="list-unstyled">
        <li><a href="{{ url('/panel/users/student/review/show') }}" class="{{ request()->path() == 'panel/users/student/review/show' ? 'active' : ''}}">@lang('panel/students/navigation.reviews-view')</a></li>
    </ul>
</li>

{{-- <li>
    <a href="{{ url('/panel/users/student/class/show') }}" class=""><i class="fa fa-graduation-cap"></i><span> ΟΙ ΤΑΞΕΙΣ ΜΟΥ </span></a>
</li> --}}
