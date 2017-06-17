@section('styles')
    <style>

    </style>
@endsection

<li class="link"><a href="{{ url('dashboard') }}" class="{{ request()->path() == 'panel/dashboard' ? 'active' : ''}}"><i class="fa fa-tachometer"></i> <span>Πίνακας Ελέγχου</span> </a></li>

    <li class="text-muted menu-title">Διαχειριση</li>

    <li class="has_sub link">
        <a href="#"><i class="icon-people"></i> <span> Δυναμικό </span> </a>
        <ul class="list-unstyled submenu">
            <li><a href="/panel/school/students" class="{{ request()->path() == 'panel/school/students' ? 'active' : ''}}">Φοιτητές </a> </li>
            <li><a href="/panel/school/teachers" class="{{ request()->path() == 'panel/school/teachers' ? 'active' : ''}}">Διδάσκοντες </a></li>
            <li><a href="/panel/school/requests" class="{{ request()->path() == 'panel/school/requests' ? 'active' : ''}}">Αιτήματα </a></li>
        </ul>
    </li>

    <li class="has_sub link">
        <a href="#" >
            <i class="ion-android-user-menu"></i><span> Προφίλ </span> </a>
        <ul class="list-unstyled submenu">
            <li><a href='/panel/school/profile' class="{{ request()->path() == 'panel/school/profile' ? 'active' : ''}}">Στοιχεία Επικοινωνίας</a></li>
            <li><a href='/panel/school/studies' class="{{ request()->path() == 'panel/school/studies' ? 'active' : ''}}">Ειδικότητες</a></li>
            <li><a href='/panel/school/profile/images' class="{{ request()->path() == 'panel/school/profile/images' ? 'active' : ''}}">Φωτογραφίες</a></li>
        </ul>
    </li>

    <li class="has_sub link">
        <a href="#" >
            <i class="ion-trophy"></i>
            <span> Υποτροφίες </span></a>
        <ul class="list-unstyled submenu">
            <li ><a href="/panel/school/scholarships/create" class="{{ request()->path() == 'panel/school/scholarships/create' ? 'active' : ''}}">Δημιουργία Νέας</a></li>
            <li ><a href="/panel/school/scholarships/view" class="{{ request()->path() == 'panel/school/scholarships/view' ? 'active' : ''}}">Προβολή</a></li>
            <li><a href="{{ url('panel/school/scholarships/request') }}" class="{{ request()->path() == 'panel/school/scholarships/request' ? 'active' : ''}}">Αιτήματα</a></li>
        </ul>
    </li>

    <li class="has_sub">
        <a href="#"><i class="fa fa-cogs"></i><span> Ρυθμίσεις </span></a>
        <ul class="list-unstyled">
            <li><a href="{{ url('panel/school/settings/public') }}" class="{{ request()->path() == 'panel/school/settings/public' ? 'active' : ''}}">Δημόσιο Προφίλ</a></li>
            <li><a href="{{ url('panel/school/settings/scholarships') }}" class="{{ request()->path() == 'panel/school/settings/scholarships' ? 'active' : ''}}">Αίτηση Υποτροφίας</a></li>
        </ul>
    </li>

    <li class="has_sub">
        <a href="#" class=""><i class="ion-ios7-star-half"></i><span> Αξιολογήσεις </span></a>
        <ul class="list-unstyled">
            <li><a href="">Προβολή</a></li>
        </ul>
    </li>

    {{-- <li class="has_sub">
        <a href="#" class=""><i class="fa fa-graduation-cap"></i><span> Τάξεις </span></a>
        <ul class="list-unstyled">
            <li><a href="{{url('/panel/school/class/create')}}">Δημιουργία Τάξης</a></li>
            <li><a href="{{url('/panel/school/class/show')}}">Προβολή Τάξεων</a></li>
        </ul>
    </li> --}}

@section('scripts')

@endsection
