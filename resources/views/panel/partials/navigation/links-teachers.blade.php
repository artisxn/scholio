<li class="link" style="margin-top: 20px">
    <a href="{{ url('panel/dashboard') }}" class="{{ request()->path() == 'panel/dashboard' ? 'active' : ''}}">
        <i class="fa fa-tachometer"></i>
        <span>@lang('panel/students/navigation.dashboard')</span>
    </a>
</li>


<li class="text-muted menu-title">Διαχείριση</li>
    <li class="has_sub">
        <a href="#" class=""><i class="ion-android-user-menu"></i><span> Προφίλ </span> </a>
        <ul class="list-unstyled">
            <li><a class="{{ request()->path() == 'panel/users/teacher/profile' ? 'active' : ''}}" href="{{ route('teachers-profile') }}">Στοιχεία Επικοινωνίας</a></li>
            <li><a class="{{ request()->path() == 'panel/users/teacher/cv' ? 'active' : ''}}" href="{{ route('teacher-cv') }}">Το Βιογραφικό μου</a></li>
            <li><a class="{{ request()->path() == 'panel/users/teacher/schools' ? 'active' : ''}}" href="{{ route('teachers-schools') }}">Τα Εκπαιδευτήρια μου</a></li>

        </ul>
    </li>

    {{-- <li class="has_sub">
        <a href="#" class=""><i class="fa fa-graduation-cap"></i><span> Τάξεις </span></a>
        <ul class="list-unstyled">
            <li><a href="{{url('/panel/users/teacher/class/show')}}">Προβολή Τάξεων</a></li>
        </ul>
    </li> --}}
