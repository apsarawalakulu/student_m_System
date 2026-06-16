@extends('app')

@push('title')
    Teacher Dashboard
@endpush

@section('content')

    <div class="container-fluid py-4">

        {{-- HERO --}}
        <div class="hero-card mb-4">

            <div class="row align-items-center">

                <div class="col-lg-8">

                <span class="hero-badge">
                    TEACHER PORTAL
                </span>

                    <h1 class="hero-title mt-3">
                        Welcome Back {{ session('teacher_name') }} 👨‍🏫
                    </h1>

                    <p class="hero-text">
                        Manage students, assignments, classes and academic performance easily.
                    </p>

                    <div class="d-flex gap-3 mt-4 flex-wrap">

                        <button class="btn btn-light hero-btn">
                            <i class="bi bi-journal-plus me-2"></i>
                            Create Assignment
                        </button>

                        <button class="btn btn-outline-light hero-btn">
                            <i class="bi bi-people-fill me-2"></i>
                            View Students
                        </button>

                    </div>

                </div>

            </div>

        </div>

        {{-- STATS --}}
        <div class="row g-4 mb-4">

            <div class="col-xl-3 col-md-6">
                <div class="dashboard-card">
                    <p class="card-label">Students</p>
                    <h2 class="card-number">120</h2>
                </div>
            </div>

            <div class="col-xl-3 col-md-6">
                <div class="dashboard-card">
                    <p class="card-label">Classes</p>
                    <h2 class="card-number">6</h2>
                </div>
            </div>

            <div class="col-xl-3 col-md-6">
                <div class="dashboard-card">
                    <p class="card-label">Assignments</p>
                    <h2 class="card-number">18</h2>
                </div>
            </div>

            <div class="col-xl-3 col-md-6">
                <div class="dashboard-card">
                    <p class="card-label">Pending Reviews</p>
                    <h2 class="card-number">7</h2>
                </div>
            </div>

        </div>

        {{-- MAIN --}}
        <div class="row g-4">

            {{-- LEFT --}}
            <div class="col-lg-8">

                <div class="glass-card mb-4">

                    <h4 class="fw-bold mb-3">Class Performance</h4>

                    <div class="analytics-box">
                        <i class="bi bi-bar-chart-line-fill analytics-icon"></i>
                    </div>

                </div>

                <div class="glass-card">

                    <h4 class="fw-bold mb-3">Recent Submissions</h4>

                    <table class="table align-middle">

                        <thead>
                        <tr>
                            <th>Student</th>
                            <th>Assignment</th>
                            <th>Status</th>
                        </tr>
                        </thead>

                        <tbody>

                        <tr>
                            <td>John Doe</td>
                            <td>Math Homework</td>
                            <td><span class="badge bg-success">Checked</span></td>
                        </tr>

                        <tr>
                            <td>Ann Smith</td>
                            <td>Science Project</td>
                            <td><span class="badge bg-warning text-dark">Pending</span></td>
                        </tr>

                        </tbody>

                    </table>

                </div>

            </div>

            {{-- RIGHT --}}
            <div class="col-lg-4">

                <div class="glass-card mb-4">

                    <h4 class="fw-bold mb-3">Quick Actions</h4>

                    <div class="d-grid gap-3">

                        <button class="action-btn bg-primary">
                            <i class="bi bi-plus-circle"></i> Add Assignment
                        </button>

                        <button class="action-btn bg-success">
                            <i class="bi bi-people"></i> Students
                        </button>

                        <button class="action-btn bg-warning">
                            <i class="bi bi-journal-text"></i> Exams
                        </button>

                        <button class="action-btn bg-danger">
                            <i class="bi bi-calendar-check"></i> Attendance
                        </button>

                    </div>

                </div>

                <div class="glass-card">

                    <h4 class="fw-bold mb-3">Activity</h4>

                    <div class="activity-item">
                        <div class="activity-dot bg-primary"></div>
                        <div>
                            <h6>Assignment Created</h6>
                            <small class="text-muted">5 mins ago</small>
                        </div>
                    </div>

                    <div class="activity-item">
                        <div class="activity-dot bg-success"></div>
                        <div>
                            <h6>Student Graded</h6>
                            <small class="text-muted">1 hour ago</small>
                        </div>
                    </div>

                </div>

            </div>

        </div>

    </div>

    <style>

        body{
            background: linear-gradient(135deg, #eef2ff, #f8fafc);
            font-family: 'Segoe UI', sans-serif;
        }
        .hero-card{
            background: linear-gradient(135deg, #1e3c72, #2a5298);
            border-radius: 30px;
            padding: 45px;
            color: white;
            position: relative;
            overflow: hidden;
            box-shadow: 0 20px 50px rgba(0,0,0,0.15);
            transition: 0.4s ease;
        }

        .hero-card:hover{
            transform: translateY(-6px);
            box-shadow: 0 25px 60px rgba(0,0,0,0.25);
        }

        /* soft floating circles */
        .hero-card::before{
            content: "";
            position: absolute;
            width: 280px;
            height: 280px;
            background: rgba(255,255,255,0.10);
            border-radius: 50%;
            top: -120px;
            right: -100px;
        }

        .hero-card::after{
            content: "";
            position: absolute;
            width: 200px;
            height: 200px;
            background: rgba(255,255,255,0.08);
            border-radius: 50%;
            bottom: -90px;
            left: -90px;
        }

        .hero-title{
            font-size: 40px;
            font-weight: 800;
            letter-spacing: -1px;
        }

        .hero-text{
            opacity: 0.85;
            font-size: 15px;
            line-height: 1.7;
            max-width: 600px;
        }

        .hero-badge{
            background: rgba(255,255,255,0.15);
            padding: 6px 18px;
            border-radius: 50px;
            font-size: 12px;
            letter-spacing: 1px;
            text-transform: uppercase;
        }

        .dashboard-card{
            background: white;
            border-radius: 22px;
            padding: 25px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.06);
            transition: all 0.3s ease;
            border: 1px solid rgba(0,0,0,0.04);
        }

        .dashboard-card:hover{
            transform: translateY(-8px);
            box-shadow: 0 18px 40px rgba(0,0,0,0.12);
        }

        .card-label{
            font-size: 13px;
            color: #94a3b8;
        }

        .card-number{
            font-size: 34px;
            font-weight: 800;
        }

        .glass-card{
            background: rgba(255,255,255,0.75);
            backdrop-filter: blur(12px);
            border-radius: 25px;
            padding: 28px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.05);
            border: 1px solid rgba(255,255,255,0.5);
        }

        .action-btn{
            border: none;
            color: white;
            padding: 14px;
            border-radius: 16px;
            font-weight: 600;
            display: flex;
            align-items: center;
            gap: 10px;
            transition: 0.3s ease;
            cursor: pointer;
        }

        .action-btn:hover{
            transform: scale(1.05);
            filter: brightness(1.1);
        }
        .table{
            border-collapse: separate;
            border-spacing: 0 12px;
        }

        .table tbody tr{
            background: white;
            border-radius: 14px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.04);
            transition: 0.3s;
        }

        .table tbody tr:hover{
            transform: scale(1.01);
        }

        .table td{
            padding: 16px;
            border: none;
        }

        .dashboard-card,
        .glass-card,
        .hero-card{
            animation: fadeInUp 0.6s ease;
        }

        @keyframes fadeInUp{
            from{
                opacity: 0;
                transform: translateY(15px);
            }
            to{
                opacity: 1;
                transform: translateY(0);
            }
        }



    </style>

@endsection
