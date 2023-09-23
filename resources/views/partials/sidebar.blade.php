<nav class="sidebar">
    <div class="sidebar-header">
        <div class="logo">
            <a href="/" class="sidebar-brand">
              Events
            </a>
        </div>
        <div class="sidebar-toggler not-active">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
    <div class="sidebar-body">
        <ul class="nav">
            <li class="nav-item nav-category" id="allEvents">Все события</li>
            @foreach($allEvents as $event)
                <li class="nav-item {{ (empty(request()->query()) && $loop->first) || (int)request()->query('id') === $event->id ? 'active' : '' }}">
                    <a href="?id={{ $event->id }}" class="nav-link">
                        <i class="link-icon" data-feather="box"></i>
                        <span class="link-title">{{ $event->title }}</span>
                    </a>
                </li>
            @endforeach
            <li class="nav-item nav-category" id="MyEvents">Мои события</li>
            @foreach($authUserEvents as  $event)
                <li class="nav-item {{ (int)request()->query('id') === $event->id ? 'active' : '' }}">
                    <a href="?id={{ $event->id }}" class="nav-link">
                        <i class="link-icon" data-feather="box"></i>
                        <span class="link-title">{{ $event->title }}</span>
                    </a>
                </li>
            @endforeach
        </ul>
    </div>
</nav>
