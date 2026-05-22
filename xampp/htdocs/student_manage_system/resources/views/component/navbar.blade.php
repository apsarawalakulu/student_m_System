<nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-sm px-4">

    <div class="container-fluid">

        <a class="navbar-brand fw-bold text-warning" href="#">
            <i class="bi bi-mortarboard-fill me-2"></i>
            StudentSys
        </a>

        <button class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarNav">

            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">

            <ul class="navbar-nav ms-auto align-items-lg-center">

                <li class="nav-item me-2">
                    <a class="nav-link active" href="{{ route('admin.dashboard') }}">
                        <i class="bi bi-house-door-fill me-1"></i>
                        Dashboard
                    </a>
                </li>

                <li class="nav-item me-2">
                    <a class="nav-link" href="{{ route('admin.about') }}">
                        <i class="bi bi-info-circle-fill me-1"></i>
                        About
                    </a>
                </li>
                <li class="nav-item me-2">
                    <a class="nav-link" href="{{ route('admin.contact') }}">
                        <i class="bi bi-envelope-fill me-1"></i>
                        Contact
                    </a>
                </li>
                <li class="nav-item dropdown">

                    <a class="nav-link dropdown-toggle"
                       href="#"
                       role="button"
                       data-bs-toggle="dropdown">

                        <i class="bi bi-person-circle me-1"></i>
                        Admin
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li>
                            <a class="dropdown-item" href="#">
                                Profile
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#">
                                Settings
                            </a>
                        </li>

                        <li><hr class="dropdown-divider"></li>

                        <li>
                            <a class="dropdown-item text-danger" href="#">
                                Logout
                            </a>
                        </li>

                    </ul>

                </li>

            </ul>

        </div>

    </div>

</nav>
