<li class="text-muted menu-title">Διαχειριση</li>
    <li class="has_sub">
        <a href="#" class=""><i class="ion-android-user-menu"></i><span> Προφίλ </span> </a>
        <ul class="list-unstyled">
            <li><a href="{{route('teachers-profile')}}">Στοιχεία Επικοινωνίας</a></li>
            <li><a href="">Τα Εκπαιδευτήριά μου</a></li>
            <li><a href="">Το Βιογραφικό μου</a></li>
        </ul>
    </li>

    <li class="has_sub">
        <a href="#" class=""><i class="ion-ios7-star-half"></i><span> Αξιολογήσεις </span></a>
        <ul class="list-unstyled">
            <li><a href="">Προβολή</a></li>
        </ul>
    </li>

    <li class="has_sub">
        <a href="#" class=""><i class="fa fa-graduation-cap"></i><span> Τάξεις </span></a>
        <ul class="list-unstyled">
            <li><a href="{{url('/panel/users/teacher/class/create')}}">Δημιουργία Τάξης</a></li>
            <li><a href="{{url('/panel/users/teacher/class/show')}}">Προβολή Τάξεων</a></li>
        </ul>
    </li>
