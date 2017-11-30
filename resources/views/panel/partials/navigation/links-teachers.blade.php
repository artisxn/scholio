<li class="text-muted menu-title">Διαχειριση</li>
    <li class="has_sub">
        <a href="#" class=""><i class="ion-android-user-menu"></i><span> Προφίλ </span> </a>
        <ul class="list-unstyled">
            <li><a class="{{ request()->path() == 'panel/users/teacher/profile' ? 'active' : ''}}" href="{{ route('teachers-profile') }}">Στοιχεία Επικοινωνίας</a></li>
            <li><a class="{{ request()->path() == 'panel/users/teacher/schools' ? 'active' : ''}}" href="{{ route('teachers-schools') }}">Τα Εκπαιδευτήριά μου</a></li>
            <li><a class="{{ request()->path() == 'panel/users/teacher/cv' ? 'active' : ''}}" href="{{ route('teacher-cv') }}">Το Βιογραφικό μου</a></li>
        </ul>
    </li>

    {{-- <li class="has_sub">
        <a href="#" class=""><i class="fa fa-graduation-cap"></i><span> Τάξεις </span></a>
        <ul class="list-unstyled">
            <li><a href="{{url('/panel/users/teacher/class/show')}}">Προβολή Τάξεων</a></li>
        </ul>
    </li> --}}
