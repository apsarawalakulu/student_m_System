<aside class="app-sidebar bg-body-secondary shadow"
       data-bs-theme="dark"
       id="app-sidebar">

    <div class="sidebar-brand">
        <a href="./index.html" class="brand-link">
            <img src="{{asset('assets/img/theme_img//CodeXpress_logo.png')}}"
                 class="brand-image opacity-75 shadow">
            <span class="brand-text fw-light">CodeXpress</span>
        </a>
    </div>

    <div class="sidebar-wrapper">
        <nav class="mt-2">

            <ul class="nav sidebar-menu flex-column"
                data-lte-toggle="treeview"
                data-accordion="false">



                <li class="nav-item">
                    <a href="{{ route('admin.dashboard') }}" class="nav-link active">
                        <i class="nav-icon bi bi-house-door-fill"></i>
                        <p>Dashboard</p>
                    </a>
                </li>




                <!-- Admin -->
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon bi bi-person-gear"></i>

                        <p>
                            Admin
                            <i class="nav-arrow bi bi-chevron-right"></i>
                        </p>
                    </a>

                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon bi bi-circle"></i>
                                <p>Add Admin</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon bi bi-circle"></i>
                                <p>Manage Admin</p>
                            </a>
                        </li>
                    </ul>
                </li>



                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon bi bi-people"></i>

                        <p>
                            Students
                            <i class="nav-arrow bi bi-chevron-right"></i>
                        </p>
                    </a>

                    <ul class="nav nav-treeview">

                        <li class="nav-item">
                            <a href="{{ route('student.register') }}" class="nav-link">
                                <i class="nav-icon bi bi-circle"></i>
                                <p>Student Register</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="/student/manage" class="nav-link">
                                <i class="nav-icon bi bi-circle"></i>
                                <p>Manage Students</p>
                            </a>
                        </li>

                    </ul>
                </li>

                <!-- Teachers -->
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon bi bi-person-video3"></i>

                        <p>
                            Teachers
                            <i class="nav-arrow bi bi-chevron-right"></i>
                        </p>
                    </a>

                    <ul class="nav nav-treeview">

                        <li class="nav-item">
                            <a href="" class="nav-link">
                                <i class="nav-icon bi bi-circle"></i>
                                <p>Add Teacher</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="" class="nav-link">
                                <i class="nav-icon bi bi-circle"></i>
                                <p>Manage Teachers</p>
                            </a>
                        </li>

                    </ul>
                </li>

                <!-- Library -->
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon bi bi-book-fill"></i>
                        <p>Library</p>
                    </a>
                </li>

                <!-- Account -->
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon bi bi-wallet2"></i>
                        <p>Account</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="" class="nav-link">
                        <i class="nav-icon bi bi-journal-text"></i>
                        <p>Course</p>
                    </a>
                </li>

                <!-- Subject -->
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon bi bi-journal-text"></i>
                        <p>Subject</p>
                    </a>
                </li>

                <!-- Assignment -->
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon bi bi-pencil-square"></i>
                        <p>Assignment</p>
                    </a>
                </li>

                <!-- Modules -->
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon bi bi-grid-fill"></i>
                        <p>Modules</p>
                    </a>
                </li>

                <!-- Attendance -->
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon bi bi-calendar-check-fill"></i>
                        <p>Attendance</p>
                    </a>
                </li>

                <!-- Exam -->
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon bi bi-file-earmark-text-fill"></i>
                        <p>Exam</p>
                    </a>
                </li>
            </ul>
        </nav>
    </div>

</aside>
