<aside class="app-sidebar shadow"
       style="background: linear-gradient(180deg, #a282f1 0%, #2439b8 100%); color: #333;
       border-right: 1px solid #99b9ed;"
       id="app-sidebar">

    <!-- BRAND -->
    <div class="sidebar-brand text-center py-3 border-bottom">
        <a href="#" class="d-flex align-items-center justify-content-center text-decoration-none">
            <img src="{{asset('assets/img/theme_img/CodeXpress_logo.png')}}"
                 class="rounded-circle shadow"
                 width="40" height="40">

            <span class="ms-2 fw-bold text-dark fs-5">CodeXpress</span>
        </a>
    </div>

    <div class="sidebar-wrapper">
        <nav class="mt-2">

            <ul class="nav sidebar-menu flex-column">


                {{-- ================= ADMIN ================= --}}
                @if(session()->has('admin_id'))

                    <li class="nav-item">
                        <a href="{{ route('admin.dashboard') }}" class="nav-link">
                            <i class="nav-icon bi bi-house-door-fill"></i>
                            <p>Admin Dashboard</p>
                        </a>
                    </li>

                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            <i class="nav-icon bi bi-people"></i>
                            <p>Students <i class="nav-arrow bi bi-chevron-right"></i></p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('student.register') }}" class="nav-link">
                                    <i class="bi bi-circle"></i>
                                    <p>Register Student</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('students.list') }}" class="nav-link">
                                    <i class="bi bi-circle"></i>
                                    <p>View Students</p>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            <i class="nav-icon bi bi-person-video3"></i>
                            <p>Teachers <i class="nav-arrow bi bi-chevron-right"></i></p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('teacher.create') }}" class="nav-link">
                                    <i class="bi bi-circle"></i>
                                    <p>Add Teacher</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('teacher.index') }}" class="nav-link">
                                    <i class="bi bi-circle"></i>
                                    <p>View Teachers</p>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item"><a href="#" class="nav-link"><i class="bi bi-book"></i><p>Library</p></a></li>
                    <li class="nav-item"><a href="#" class="nav-link"><i class="bi bi-wallet2"></i><p>Account</p></a></li>
                    <li class="nav-item"><a href="#" class="nav-link"><i class="bi bi-journal-text"></i><p>Course</p></a></li>
                    <li class="nav-item"><a href="#" class="nav-link"><i class="bi bi-grid-fill"></i><p>Modules</p></a></li>
                    <li class="nav-item"><a href="#" class="nav-link"><i class="bi bi-calendar-check-fill"></i><p>Attendance</p></a></li>
                    <li class="nav-item"><a href="#" class="nav-link"><i class="bi bi-file-earmark-text-fill"></i><p>Exam</p></a></li>

                @endif



                {{-- ================= STUDENT ================= --}}
                @if(session()->has('student_id'))

                    <li class="nav-item">
                        <a href="{{ route('student.dashboard') }}" class="nav-link">
                            <i class="nav-icon bi bi-house-door-fill"></i>
                            <p>Student Dashboard</p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="bi bi-journal-text"></i>
                            <p>My Subjects</p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="bi bi-pencil-square"></i>
                            <p>Assignments</p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="bi bi-calendar-check-fill"></i>
                            <p>Attendance</p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="bi bi-file-earmark-text-fill"></i>
                            <p>Results</p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="bi bi-book"></i>
                            <p>Library</p>
                        </a>
                    </li>

                @endif



                {{-- ================= TEACHER ================= --}}
                @if(session()->has('teacher_id'))

                    <li class="nav-item">
                        <a href="{{ route('teacher.dashboard') }}" class="nav-link">
                            <i class="nav-icon bi bi-house-door-fill"></i>
                            <p>Teacher Dashboard</p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="{{ route('students.list') }}" class="nav-link">
                            <i class="bi bi-people"></i>
                            <p>Students (View)</p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="bi bi-journal-text"></i>
                            <p>Subjects</p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="bi bi-pencil-square"></i>
                            <p>Assignments</p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="bi bi-calendar-check-fill"></i>
                            <p>Attendance</p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="bi bi-book"></i>
                            <p>Library</p>
                        </a>
                    </li>

                @endif


            </ul>
        </nav>
    </div>

</aside>
