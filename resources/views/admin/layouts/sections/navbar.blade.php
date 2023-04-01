<nav class="header-nav ms-auto">
    <ul class="d-flex align-items-center">

{{--        <li class="nav-item d-block d-lg-none">--}}
{{--            <a class="nav-link nav-icon search-bar-toggle " href="#">--}}
{{--                <i class="bi bi-search"></i>--}}
{{--            </a>--}}
{{--        </li><!-- End Search Icon-->--}}

        @if($note_fication->not_show == 0)
        <li class="nav-item dropdown">
            <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
                <i class="bi bi-bell"></i>
                <span class="badge bg-primary badge-number">1</span>
            </a><!-- End Notification Icon -->
            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications">
                <li class="dropdown-header">
                    You have 1 new notification
                    <a href="{{ route('admin.markAsRead', $note_fication->id) }}"><span class="badge rounded-pill bg-primary p-2 ms-2">Mark as read</span></a>
                </li>
                <li>
                    <hr class="dropdown-divider">
                </li>
                <li class="notification-item">
                    <i class="bi bi-info-circle text-primary"></i>
                    <div>
                        <h4>Hallo!</h4>
                        <p>{{ $note_fication->not_body }}</p>
                    </div>
                </li>
            </ul><!-- End Notification Dropdown Items -->
        </li><!-- End Notification Nav -->
        @endif

{{--        <li class="nav-item dropdown">--}}

{{--            <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">--}}
{{--                <i class="bi bi-chat-left-text"></i>--}}
{{--                <span class="badge bg-success badge-number"></span>--}}
{{--            </a><!-- End Messages Icon -->--}}

{{--            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow messages">--}}
{{--                <li class="dropdown-header">--}}
{{--                    You have 3 new messages--}}
{{--                    <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>--}}
{{--                </li>--}}
{{--                <li>--}}
{{--                    <hr class="dropdown-divider">--}}
{{--                </li>--}}

{{--                <li class="message-item">--}}
{{--                    <a href="#">--}}
{{--                        <img src="assets/img/messages-1.jpg" alt="" class="rounded-circle">--}}
{{--                        <div>--}}
{{--                            <h4>Maria Hudson</h4>--}}
{{--                            <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>--}}
{{--                            <p>4 hrs. ago</p>--}}
{{--                        </div>--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--                <li>--}}
{{--                    <hr class="dropdown-divider">--}}
{{--                </li>--}}

{{--                <li class="message-item">--}}
{{--                    <a href="#">--}}
{{--                        <img src="assets/img/messages-2.jpg" alt="" class="rounded-circle">--}}
{{--                        <div>--}}
{{--                            <h4>Anna Nelson</h4>--}}
{{--                            <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>--}}
{{--                            <p>6 hrs. ago</p>--}}
{{--                        </div>--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--                <li>--}}
{{--                    <hr class="dropdown-divider">--}}
{{--                </li>--}}

{{--                <li class="message-item">--}}
{{--                    <a href="#">--}}
{{--                        <img src="assets/img/messages-3.jpg" alt="" class="rounded-circle">--}}
{{--                        <div>--}}
{{--                            <h4>David Muldon</h4>--}}
{{--                            <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>--}}
{{--                            <p>8 hrs. ago</p>--}}
{{--                        </div>--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--                <li>--}}
{{--                    <hr class="dropdown-divider">--}}
{{--                </li>--}}

{{--                <li class="dropdown-footer">--}}
{{--                    <a href="#">Show all messages</a>--}}
{{--                </li>--}}

{{--            </ul><!-- End Messages Dropdown Items -->--}}

{{--        </li><!-- End Messages Nav -->--}}

        <li class="nav-item dropdown pe-3">

            <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
                <span class="d-none d-md-block dropdown-toggle ps-2">{{ auth()->user()->usr_user_name }}</span>
            </a><!-- End Profile Iamge Icon -->

            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                <li class="dropdown-header">
                    <h6>{{ auth()->user()->usr_user_name }}</h6>
                    <span>{{ auth()->user()->usr_user_email ?? '' }}</span>
                </li>
                <li>
                    <hr class="dropdown-divider">
                </li>

                <li>
                    <a class="dropdown-item d-flex align-items-center" href="{{ route('admin.profile.info') }}">
                        <i class="bi bi-person"></i>
                        <span>My Profile</span>
                    </a>
                </li>
                <li>
                    <hr class="dropdown-divider">
                </li>

                <li>
                    <a class="dropdown-item d-flex align-items-center" href="{{ route('admin.account.info') }}">
                        <i class="bi bi-gear"></i>
                        <span>Account Settings</span>
                    </a>
                </li>
                <li>
                    <hr class="dropdown-divider">
                </li>

                <li>
                    <hr class="dropdown-divider">
                </li>

                <li>
                    <a class="dropdown-item d-flex align-items-center" href="{{ route('admin.auth.logout') }}">
                        <i class="bi bi-box-arrow-right"></i>
                        <span>Sign Out</span>
                    </a>
                </li>

            </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

    </ul>
</nav><!-- End Icons Navigation -->
