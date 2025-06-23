<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('admin.dashboard') }}">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="bi bi-emoji-smile"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Scool !</div>
    </a>

    <hr class="sidebar-divider my-0">

    <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.dashboard') }}">
            <i class="bi bi-speedometer2"></i>
            <span>Admin dashboard</span></a>
    </li>

    <hr class="sidebar-divider">

    <div class="sidebar-heading">
        Management
    </div>

    <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.users.index') }}">
            <i class="bi bi-people"></i>
            <span>Users</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="classrooms.html">
            <i class="bi bi-building"></i>
            <span>Classrooms</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="evaluations.html">
            <i class="bi bi-clipboard"></i>
            <span>Evaluations</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="notes.html">
            <i class="bi bi-123"></i>
            <span>Notes</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="roles.html">
            <i class="bi bi-shield-lock"></i>
            <span>Roles</span></a>
    </li>

    <hr class="sidebar-divider d-none d-md-block">

    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
