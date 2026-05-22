@extends('layout.admin')
@section('content')
    <div class="container py-4">
        <div class="text-center mb-5">
            <h2 class="fw-bold text-primary">
                About StudentSys
            </h2>
            <p class="text-muted">
                Simple, modern and efficient student management system
            </p>
        </div>
        <div class="row g-4 align-items-center">
            <div class="col-lg-4">
                <div class="card border-0 shadow-sm h-100">
                    <img src="{{ asset('assets/img/aboutuspic.png') }}"
                         class="img-fluid rounded-top"
                         alt="left image">

                    <div class="card-body text-center">
                        <h6 class="fw-bold">Learning</h6>
                        <small class="text-muted">Easy student tracking system</small>
                    </div>

                </div>

            </div>
            <div class="col-lg-4">
                <div class="card border-0 shadow-sm h-100 p-4">
                    <h4 class="fw-bold mb-3 text-center">Who We Are</h4>
                    <p class="text-muted text-center">
                        StudentSys is designed for schools and institutes to manage students,
                        courses, attendance, and reports in a simple way.
                    </p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card border-0 shadow-sm h-100">
                    <img src="{{ asset('assets/img/about2pic.png') }}"
                         class="img-fluid rounded-top"
                         alt="right image">
                    <div class="card-body text-center">
                        <h6 class="fw-bold">Success</h6>
                        <small class="text-muted">Better education management</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
