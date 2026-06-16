@extends('app')

@push('title')
    Student Dashboard
@endpush

@section('content')

    <div class="container-fluid py-4">

        {{-- HERO --}}
        <div class="hero-card mb-4">

            <div class="row align-items-center">

                <div class="col-lg-8">

                <span class="hero-badge">
                    STUDENT PORTAL
                </span>

                    <h1 class="hero-title mt-3">
                        Welcome Back {{ session('student_name', 'Student') }} 👋
                    </h1>

                    <p class="hero-text">
                        Track your subjects, assignments, attendance and progress in one place.
                    </p>

                    <div class="d-flex gap-3 mt-4 flex-wrap">

                        <button class="btn btn-light hero-btn">
                            <i class="bi bi-journal-check me-2"></i>
                            My Subjects
                        </button>

                        <button class="btn btn-outline-light hero-btn">
                            <i class="bi bi-upload me-2"></i>
                            Submit Assignment
                        </button>

                    </div>

                </div>

            </div>

        </div>

        {{-- STATS --}}
        <div class="row g-4 mb-4">

            <div class="col-xl-3 col-md-6">
                <div class="dashboard-card">
                    <p class="card-label">Subjects</p>
                    <h2 class="card-number">6</h2>
                </div>
            </div>

            <div class="col-xl-3 col-md-6">
                <div class="dashboard-card">
                    <p class="card-label">Assignments</p>
                    <h2 class="card-number">12</h2>
                </div>
            </div>

            <div class="col-xl-3 col-md-6">
                <div class="dashboard-card">
                    <p class="card-label">Attendance</p>
                    <h2 class="card-number">92%</h2>
                </div>
            </div>

            <div class="col-xl-3 col-md-6">
                <div class="dashboard-card">
                    <p class="card-label">Rank</p>
                    <h2 class="card-number">#5</h2>
                </div>
            </div>

        </div>

        {{-- MAIN --}}
        <div class="row g-4">

            {{-- LEFT --}}
            <div class="col-lg-8">

                <div class="glass-card mb-4">

                    <h4 class="fw-bold mb-3">My Progress</h4>

                    <div class="analytics-box">
                        <i class="bi bi-graph-up analytics-icon"></i>
                    </div>

                </div>

                <div class="glass-card">

                    <h4 class="fw-bold mb-3">Recent Assignments</h4>

                    <table class="table align-middle">

                        <thead>
                        <tr>
                            <th>Subject</th>
                            <th>Status</th>
                            <th>Marks</th>
                        </tr>
                        </thead>

                        <tbody>

                        <tr>
                            <td>Math</td>
                            <td><span class="badge bg-success">Submitted</span></td>
                            <td>85%</td>
                        </tr>

                        <tr>
                            <td>Science</td>
                            <td><span class="badge bg-warning text-dark">Pending</span></td>
                            <td>-</td>
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
                            <i class="bi bi-upload"></i> Submit Work
                        </button>

                        <button class="action-btn bg-success">
                            <i class="bi bi-book"></i> Subjects
                        </button>

                        <button class="action-btn bg-warning">
                            <i class="bi bi-calendar"></i> Schedule
                        </button>

                    </div>

                </div>

                <div class="glass-card">

                    <h4 class="fw-bold mb-3">Activity</h4>

                    <div class="activity-item">
                        <div class="activity-dot bg-primary"></div>
                        <div>
                            <h6>Assignment Submitted</h6>
                            <small class="text-muted">2 mins ago</small>
                        </div>
                    </div>

                    <div class="activity-item">
                        <div class="activity-dot bg-success"></div>
                        <div>
                            <h6>Quiz Completed</h6>
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
            background: linear-gradient(135deg, #4f46e5, #7c3aed);
            border-radius: 28px;
            padding: 50px;
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

        /* floating glow */
        .hero-card::before{
            content: "";
            position: absolute;
            width: 300px;
            height: 300px;
            background: rgba(255,255,255,0.12);
            border-radius: 50%;
            top: -100px;
            right: -100px;
        }

        .hero-card::after{
            content: "";
            position: absolute;
            width: 200px;
            height: 200px;
            background: rgba(255,255,255,0.08);
            border-radius: 50%;
            bottom: -80px;
            left: -80px;
        }

        .hero-title{
            font-size: 42px;
            font-weight: 800;
            letter-spacing: -1px;
        }

        .hero-text{
            opacity: 0.85;
            max-width: 600px;
            line-height: 1.7;
            font-size: 15px;
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
            border: 1px solid rgba(255,255,255,0.4);
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
            border-radius: 16px;
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
