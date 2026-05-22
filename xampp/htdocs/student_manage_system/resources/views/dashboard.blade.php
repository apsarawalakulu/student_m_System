@extends('layout.admin')
@section('content')
    <div class="row g-4">
        <div class="col-md-3">
            <div class="card border-0 shadow-sm">
                <div class="card-body">
                    <h6 class="text-muted">
                        Total Students</h6>
                    <h2 class="fw-bold">1200</h2>
                    <span class="badge bg-success">
                    Active
                </span>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card border-0 shadow-sm">
                <div class="card-body">
                    <h6 class="text-muted">
                        Teachers</h6>
                    <h2 class="fw-bold">85</h2>
                    <span class="badge bg-primary">
                    Staff
                </span>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card border-0 shadow-sm">
                <div class="card-body">
                    <h6 class="text-muted">
                        Courses
                    </h6>
                    <h2 class="fw-bold">
                        24
                    </h2>
                    <span class="badge bg-warning text-dark">
                    Running
                </span>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card border-0 shadow-sm">
                <div class="card-body">
                    <h6 class="text-muted">
                        Attendance
                    </h6>
                    <h2 class="fw-bold">
                        92%
                    </h2>
                    <span class="badge bg-success">
                    Excellent
                </span>
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-lg-8">
            <div class="card border-0 shadow-sm">
                <div class="card-header bg-white">
                    <h5 class="mb-0">
                        Recent Students
                    </h5>
                </div>
                <div class="card-body">
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th>Reg No</th>
                            <th>Name</th>
                            <th>Phone</th>
                            <th>Status</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>ST001</td>
                            <td>John Doe</td>
                            <td>0771234567</td>
                            <td>
                                <span class="badge bg-success">
                                    Active
                                </span>
                            </td>
                        </tr>
                        <tr>
                            <td>ST002</td>
                            <td>Jane Smith</td>
                            <td>0712345678</td>
                            <td>
                                <span class="badge bg-warning text-dark">
                                    Pending
                                </span>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card border-0 shadow-sm">
                <div class="card-header bg-white">
                    <h5 class="mb-0">
                        Quick Actions
                    </h5>
                </div>
                <div class="card-body d-grid gap-3">
                    <button class="btn btn-primary">
                        Add Student
                    </button>
                    <button class="btn btn-success">
                        Add Course
                    </button>
                    <button class="btn btn-dark">
                        Generate Report
                    </button>
                </div>
            </div>
        </div>
    </div>
@endsection
