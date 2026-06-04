@extends('app')

@push('title')
    Dashboard
@endpush

@section('content')

    <div class="container-fluid py-4">

        {{-- HERO SECTION --}}
        <div class="hero-card mb-4">

            <div class="row align-items-center">

                <div class="col-lg-8">

                <span class="hero-badge">
                    STUDENT MANAGEMENT SYSTEM
                </span>

                    <h1 class="hero-title mt-3">
                        Welcome Back Admin 👩‍💻
                    </h1>

                    <p class="hero-text">
                        Monitor students, teachers, analytics,
                        attendance and finance from one modern dashboard.
                    </p>

                    <div class="d-flex gap-3 mt-4 flex-wrap">

                        <button class="btn btn-light hero-btn">
                            <i class="bi bi-bar-chart-fill me-2"></i>
                            Analytics
                        </button>

                        <button class="btn btn-outline-light hero-btn">
                            <i class="bi bi-person-plus-fill me-2"></i>
                            Add Student
                        </button>

                    </div>

                </div>

                <div class="col-lg-4 text-center d-none d-lg-block">

                    <div class="hero-icon-wrapper">
                        <i class="bi bi-mortarboard-fill hero-icon"></i>
                    </div>

                </div>

            </div>

        </div>

        {{-- STATISTICS --}}
        <div class="row g-4 mb-4">

            <div class="col-xl-3 col-md-6">

                <div class="dashboard-card">

                    <div class="d-flex justify-content-between">

                        <div>

                            <p class="card-label">
                                Total Students
                            </p>

                            <h2 class="card-number">
                                {{ $totalStudents }}
                            </h2>

                            <div class="progress modern-progress mt-3">
                                <div class="progress-bar bg-primary"
                                     style="width:85%"></div>
                            </div>

                            <small class="text-success">
                                +12% Growth
                            </small>

                        </div>

                        <div class="dashboard-icon bg-primary-subtle text-primary">
                            <i class="bi bi-people-fill"></i>
                        </div>

                    </div>

                </div>

            </div>

            <div class="col-xl-3 col-md-6">

                <div class="dashboard-card">

                    <div class="d-flex justify-content-between">

                        <div>

                            <p class="card-label">
                                Teachers
                            </p>

                            <h2 class="card-number">
                                85
                            </h2>

                            <div class="progress modern-progress mt-3">
                                <div class="progress-bar bg-success"
                                     style="width:70%"></div>
                            </div>

                            <small class="text-success">
                                Active Faculty
                            </small>

                        </div>

                        <div class="dashboard-icon bg-success-subtle text-success">
                            <i class="bi bi-person-workspace"></i>
                        </div>

                    </div>

                </div>

            </div>

            <div class="col-xl-3 col-md-6">

                <div class="dashboard-card">

                    <div class="d-flex justify-content-between">

                        <div>

                            <p class="card-label">
                                Attendance
                            </p>

                            <h2 class="card-number">
                                92%
                            </h2>

                            <div class="progress modern-progress mt-3">
                                <div class="progress-bar bg-warning"
                                     style="width:92%"></div>
                            </div>

                            <small class="text-warning">
                                Weekly Average
                            </small>

                        </div>

                        <div class="dashboard-icon bg-warning-subtle text-warning">
                            <i class="bi bi-clipboard2-data-fill"></i>
                        </div>

                    </div>

                </div>

            </div>

            <div class="col-xl-3 col-md-6">

                <div class="dashboard-card">

                    <div class="d-flex justify-content-between">

                        <div>

                            <p class="card-label">
                                Revenue
                            </p>

                            <h2 class="card-number">
                                $12.4K
                            </h2>

                            <div class="progress modern-progress mt-3">
                                <div class="progress-bar bg-danger"
                                     style="width:65%"></div>
                            </div>

                            <small class="text-danger">
                                Fee Collection
                            </small>

                        </div>

                        <div class="dashboard-icon bg-danger-subtle text-danger">
                            <i class="bi bi-cash-stack"></i>
                        </div>

                    </div>

                </div>

            </div>

        </div>

        {{-- MAIN CONTENT --}}
        <div class="row g-4">

            {{-- LEFT SIDE --}}
            <div class="col-lg-8">

                {{-- ANALYTICS --}}
                <div class="glass-card mb-4">

                    <div class="d-flex justify-content-between align-items-center mb-4">

                        <div>

                            <h4 class="fw-bold mb-1">
                                Student Analytics
                            </h4>

                            <small class="text-muted">
                                Monthly Overview
                            </small>

                        </div>

                        <button class="btn btn-light rounded-pill px-4">
                            Export
                        </button>

                    </div>

                    <div class="analytics-box">

                        <div class="text-center">
                            <i class="bi bi-bar-chart-line-fill analytics-icon"></i>

                            <h5 class="mt-3 text-muted">
                                Analytics Chart Area
                            </h5>
                        </div>

                    </div>

                </div>

                {{-- STUDENT TABLE --}}
                <div class="glass-card">

                    <div class="d-flex justify-content-between align-items-center mb-4">

                        <div>
                            <h4 class="fw-bold mb-1">
                                Recent Students
                            </h4>

                            <small class="text-muted">
                                Latest registered students
                            </small>
                        </div>

                        <input type="text"
                               class="form-control modern-search"
                               placeholder="Search">

                    </div>

                    <div class="table-responsive">

                        <table class="table align-middle">

                            <thead>
                            <tr>
                                <th>Student</th>
                                <th>Status</th>
                                <th>Course</th>
                                <th>Performance</th>
                                <th></th>
                            </tr>
                            </thead>

                            <tbody>

                            @forelse($recentStudents as $student)

                                <tr>

                                    <td>

                                        <div class="d-flex align-items-center gap-3">

                                            <img src="https://ui-avatars.com/api/?name={{ $student->name }}"
                                                 class="student-avatar">

                                            <div>

                                                <h6 class="mb-0">
                                                    {{ $student->name }}
                                                </h6>

                                                <small class="text-muted">
                                                    {{ $student->email }}
                                                </small>

                                            </div>

                                        </div>

                                    </td>

                                    <td>

        <span class="badge bg-success-subtle text-success">
            Active
        </span>

                                    </td>

                                    <td>
                                        Student
                                    </td>

                                    <td>

                                        <div class="progress modern-progress">

                                            <div class="progress-bar bg-primary"
                                                 style="width:80%"></div>

                                        </div>

                                    </td>

                                    <td>

                                        <button class="btn btn-light btn-sm rounded-circle">
                                            <i class="bi bi-three-dots"></i>
                                        </button>

                                    </td>

                                </tr>

                            @empty

                                <tr>

                                    <td colspan="5" class="text-center py-5">
                                        No Students Found
                                    </td>

                                </tr>

                            @endforelse

                            </tbody>

                        </table>

                    </div>

                </div>

            </div>

            {{-- RIGHT SIDE --}}
            <div class="col-lg-4">

                {{-- QUICK ACTIONS --}}
                <div class="glass-card mb-4">

                    <h4 class="fw-bold mb-4">
                        Quick Actions
                    </h4>

                    <div class="d-grid gap-3">

                        <button class="action-btn bg-primary">
                            <i class="bi bi-person-plus-fill"></i>
                            Add Student
                        </button>

                        <button class="action-btn bg-success">
                            <i class="bi bi-book-fill"></i>
                            Courses
                        </button>

                        <button class="action-btn bg-warning">
                            <i class="bi bi-calendar-event-fill"></i>
                            Exams
                        </button>

                        <button class="action-btn bg-danger">
                            <i class="bi bi-cash-stack"></i>
                            Payments
                        </button>

                    </div>

                </div>

                {{-- ACTIVITY --}}
                <div class="glass-card">

                    <h4 class="fw-bold mb-4">
                        Activity
                    </h4>

                    <div class="activity-item">

                        <div class="activity-dot bg-primary"></div>

                        <div>

                            <h6 class="mb-1">
                                New Student Registered
                            </h6>

                            <small class="text-muted">
                                2 mins ago
                            </small>

                        </div>

                    </div>

                    <div class="activity-item">

                        <div class="activity-dot bg-success"></div>

                        <div>

                            <h6 class="mb-1">
                                Attendance Updated
                            </h6>

                            <small class="text-muted">
                                1 hour ago
                            </small>

                        </div>

                    </div>

                    <div class="activity-item">

                        <div class="activity-dot bg-danger"></div>

                        <div>

                            <h6 class="mb-1">
                                Payment Pending
                            </h6>

                            <small class="text-muted">
                                Today
                            </small>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

    <style>

        body{
            background:#eef2ff;
        }

        .hero-card{
            background: linear-gradient(135deg,#4f46e5,#7c3aed);
            border-radius:30px;
            padding:50px;
            color:white;
            position:relative;
            overflow:hidden;
        }

        .hero-title{
            font-size:45px;
            font-weight:800;
        }

        .hero-text{
            opacity:.8;
            max-width:600px;
            line-height:1.8;
        }

        .hero-badge{
            background:rgba(255,255,255,.15);
            padding:8px 20px;
            border-radius:30px;
            font-size:13px;
            letter-spacing:1px;
        }

        .hero-btn{
            border-radius:15px;
            padding:12px 25px;
            font-weight:600;
        }

        .hero-icon{
            font-size:160px;
            opacity:.15;
        }

        .dashboard-card{
            background:white;
            border-radius:25px;
            padding:25px;
            box-shadow:0 10px 30px rgba(0,0,0,.05);
            transition:.3s;
            height:100%;
        }

        .dashboard-card:hover{
            transform:translateY(-8px);
        }

        .dashboard-icon{
            width:70px;
            height:70px;
            border-radius:20px;
            display:flex;
            align-items:center;
            justify-content:center;
            font-size:28px;
        }

        .card-label{
            color:#94a3b8;
            font-size:14px;
        }

        .card-number{
            font-size:35px;
            font-weight:800;
        }

        .glass-card{
            background:rgba(255,255,255,.7);
            backdrop-filter:blur(10px);
            border-radius:30px;
            padding:30px;
            box-shadow:0 8px 30px rgba(0,0,0,.05);
        }

        .analytics-box{
            height:350px;
            border-radius:25px;
            background:#f8fafc;
            display:flex;
            align-items:center;
            justify-content:center;
        }

        .analytics-icon{
            font-size:70px;
            color:#94a3b8;
        }

        .modern-search{
            width:220px;
            border-radius:15px;
            border:none;
            padding:12px 20px;
            background:#f1f5f9;
        }

        .student-avatar{
            width:45px;
            height:45px;
            border-radius:50%;
        }

        .modern-progress{
            height:8px;
            border-radius:30px;
            background:#e2e8f0;
        }

        .action-btn{
            border:none;
            color:white;
            padding:16px;
            border-radius:18px;
            font-weight:600;
            display:flex;
            align-items:center;
            gap:10px;
            transition:.3s;
        }

        .action-btn:hover{
            transform:scale(1.03);
        }

        .activity-item{
            display:flex;
            gap:15px;
            margin-bottom:25px;
        }

        .activity-dot{
            width:12px;
            height:12px;
            border-radius:50%;
            margin-top:7px;
        }

        .table{
            border-collapse:separate;
            border-spacing:0 15px;
        }

        .table tbody tr{
            background:white;
            border-radius:20px;
            box-shadow:0 5px 20px rgba(0,0,0,.03);
        }

        .table td{
            padding:18px;
            border:none;
        }

    </style>

@endsection
