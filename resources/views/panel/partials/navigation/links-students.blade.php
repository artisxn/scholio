<li class="text-muted menu-title">Διαχειριση</li>
<li class="has_sub">
    <a href="#" class=""><i class="ion-android-user-menu"></i><span> Προφίλ </span> </a>
    <ul class="list-unstyled"> 
        <li><a href="{{ route('students-cv') }}" class="{{ request()->path() == 'panel/users/student/studentCv' ? 'active' : ''}}">Το Βιογραφικό μου</a></li>
     {{--    <li><a href="{{ route('students-profile') }}" class="{{ request()->path() == 'panel/users/student/profile' ? 'active' : ''}}">Επεξεργασία Προφίλ</a></li> --}}
       <li><a href="{{ route('students-kinship') }}" class="{{ request()->path() == 'panel/users/student/kinship' ? 'active' : ''}}">Στοιχεία Γονέων και Κηδεμόνων</a></li>
        <li><a href="{{ route('students-my-schools') }}" class="{{ request()->path() == 'panel/users/student/mySchools' ? 'active' : ''}}">Τα Εκπαιδευτήριά μου</a></li>
       
    </ul>
</li>

<li class="has_sub">
    <a href="#" >
        <i class="ion-trophy"></i>
        <span> Υποτροφίες </span></a>
    <ul class="list-unstyled">
        <li><a href="">Αιτήματα</a></li>
        <li><a href="">Απαντήσεις</a></li>
    </ul>
</li>

<li class="has_sub">
    <a href="#" class=""><i class="ion-ios7-star-half"></i><span> Αξιολογήσεις </span></a>
    <ul class="list-unstyled">
        <li><a href="{{ url('/panel/users/student/review/show') }}" class="{{ request()->path() == 'panel/users/student/review/show' ? 'active' : ''}}">Προβολή</a></li>
    </ul>
</li>

{{-- <li>
    <a href="{{ url('/panel/users/student/class/show') }}" class=""><i class="fa fa-graduation-cap"></i><span> ΟΙ ΤΑΞΕΙΣ ΜΟΥ </span></a>
</li> --}}
