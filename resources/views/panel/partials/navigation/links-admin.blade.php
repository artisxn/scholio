<li class="list-unstyled">
    <a href="/panel/admin/dashboard" class="{{ request()->path() == 'panel/admin/dashboard' ? 'active' : ''}}"><i class="ti-home"></i>
        <span> Dashboard </span>
    </a>
</li>

<li class="has_sub">
    <a href="#" class="waves-effect waves-light"><i class="ti-ruler-pencil"></i><span> Schools </span></a>
    <ul class="list-unstyled">
        <li>
            <a href="{{ url('/panel/admin/schools') }}" class="{{ request()->path() == 'panel/admin/schools' ? 'active' : ''}}">List</a>
        </li>
        <li>
            <a href="{{ url('/panel/admin/newsub') }}" class="{{ request()->path() == 'panel/admin/newsub' ? 'active' : ''}}">New Subscription</a>
        </li>
        <li>
            <a href="{{ url('/panel/admin/reports') }}" class="{{ request()->path() == 'panel/admin/reports' ? 'active' : ''}}">Reports</a>
        </li>

        <li>
            <a href="{{ url('/panel/admin/approve') }}" class="{{ request()->path() == 'panel/admin/approve' ? 'active' : ''}}">Approve</a>
        </li>
    </ul>
</li>

<li class="list-unstyled">
    <a href="#" class="waves-effect waves-light"><i class="ti-medall"></i>
        <span> Scholarships </span>
    </a>
</li>
