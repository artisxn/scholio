<li class="list-unstyled">
    <a href="#" class="waves-effect waves-light"><i class="ti-home"></i>
        <span> Dashboard </span>
    </a>
</li>

<li class="has_sub">
    <a href="#" class="waves-effect waves-light"><i class="ti-user"></i> <span> Users </span> </a>
    <ul class="list-unstyled">
        <li><a href="{{ url('/panel/allusers') }}">All</a></li>
        <li><a href="{{ url('/panel/students') }}">Students</a></li>
        <li><a href="{{ url('/panel/parents') }}">Parents</a></li>
        <li><a href="{{ url('/panel/teachers') }}">Teachers</a></li>
        <li><a href="{{ url('/panel/notifications') }}">Notifications</a></li>
    </ul>
</li>

<li class="list-unstyled">
    <a href="{{ url('/panel/schools') }}" class="waves-effect waves-light"><i class="ti-ruler-pencil"></i>
        <span> Schools </span>
    </a>
</li>

<li class="list-unstyled">
    <a href="{{ url('/panel/schools') }}" class="waves-effect waves-light"><i class="ti-medall"></i>
        <span> Scholarships </span>
    </a>
</li>
