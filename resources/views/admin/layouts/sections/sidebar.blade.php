<li class="nav-item">
    <a class="nav-link collapsed{{ isActive('admin.main.dashboard' , 'active') }}" href="{{ route('admin.main.dashboard') }}">
        <i class="bi bi-grid"></i>
        <span>Dashboard</span>
    </a>
</li><!-- End Dashboard Nav -->

<li class="nav-item">
    <a class="nav-link collapsed{{ isActive('admin.menus.index' , 'active') }}" href="{{ route('admin.menus.index') }}">
        <i class="bi bi-grid"></i>
        <span>Menu</span>
    </a>
</li><!-- End Menu Nav -->

<li class="nav-item">
    <a class="nav-link collapsed{{ isActive('admin.overall.info' , 'active') }}" href="{{ route('admin.overall.info') }}">
        <i class="bi bi-grid"></i>
        <span>Overall</span>
    </a>
</li><!-- End Overall Nav -->

<li class="nav-item">
    <a class="nav-link collapsed{{ isActive('admin.settings.info' , 'active') }}" href="{{ route('admin.settings.info') }}">
        <i class="bi bi-grid"></i>
        <span>Settings</span>
    </a>
</li><!-- End Settings Nav -->

<li class="nav-item">
    <a class="nav-link collapsed{{ isActive('admin.footer.info' , 'active') }}" href="{{ route('admin.footer.info') }}">
        <i class="bi bi-grid"></i>
        <span>Footer</span>
    </a>
</li><!-- End Footer Nav -->

<li class="nav-item">
    <a class="nav-link collapsed{{ isActive('admin.pages.contactus.return' , 'active') }}" href="{{ route('admin.pages.contactus.return') }}">
        <i class="bi bi-grid"></i>
        <span>Contact</span>
    </a>
</li><!-- End Footer Nav -->

<li class="nav-item">
    <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
        <i class="bi bi-menu-button-wide"></i><span>Admins</span><i class="bi bi-chevron-down ms-auto"></i>
    </a>
    <ul id="components-nav" class="nav-content collapse {{ isActive(['admin.users.create','admin.users.edit','admin.users.index'] , 'show') }}" data-bs-parent="#sidebar-nav">
        <li>
            <a href="{{ route('admin.users.create') }}" class="{{ isActive('admin.users.create' , 'active') }}">
                <i class="bi bi-circle"></i><span>Add New</span>
            </a>
        </li>
        <li>
            <a href="{{ route('admin.users.index') }}" class="{{ isActive(['admin.users.index','admin.users.edit'] , 'active') }}">
                <i class="bi bi-circle"></i><span>All</span>
            </a>
        </li>
    </ul>
</li><!-- End Components Nav -->

<li class="nav-item">
    <a class="nav-link collapsed" data-bs-target="#components-nav2" data-bs-toggle="collapse" href="#">
        <i class="bi bi-menu-button-wide"></i><span>Pages</span><i class="bi bi-chevron-down ms-auto"></i>
    </a>
    <ul id="components-nav2" class="nav-content collapse {{ isActive(['admin.pages.index','admin.pages.view','admin.pages.edit','admin.pages.remove','admin.pages.projects.edit','admin.pages.create'] , 'show') }}" data-bs-parent="#sidebar-nav">
        <li>
            <a href="{{ route('admin.pages.create') }}" class="{{ isActive('admin.pages.create' , 'active') }}">
                <i class="bi bi-circle"></i><span>Add New</span>
            </a>
        </li>
        <li>
            <a href="{{ route('admin.pages.index') }}" class="{{ isActive(['admin.pages.index','admin.pages.view','admin.pages.edit','admin.pages.remove','admin.pages.projects.edit'], 'active') }}">
                <i class="bi bi-circle"></i><span>All</span>
            </a>
        </li>
    </ul>
</li><!-- End Components Nav -->

