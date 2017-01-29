{{-- <li class="dropdown hidden-xs">
    <a href="#" data-target="#" class="dropdown-toggle waves-effect" data-toggle="dropdown" aria-expanded="true">
        <i class="icon-bell"></i> <span class="badge badge-xs badge-danger">{{ count(Auth::user()->notifications) }}</span>
    </a>
    <ul class="dropdown-menu dropdown-menu-lg">
        <li class="notifi-title"><span class="label label-default pull-right">New 3</span>Notification</li>
        <li class="list-group nicescroll notification-list">
          @foreach(Auth::user()->unreadNotifications as $notification)
             @include('notifications.' . snake_case(class_basename($notification->type)))
          @endforeach
        </li>
        <li>
            <a href="javascript:void(0);" class="list-group-item text-right">
                <small class="font-600">See all notifications</small>
            </a>
        </li>
    </ul>
</li> --}}
<notifications></notifications>
