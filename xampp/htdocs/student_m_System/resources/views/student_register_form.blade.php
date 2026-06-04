@extends('app')

@push('title')
    Register
@endpush

@push('page_header_title')
    <span class="fw-bold">Student Registration</span>
@endpush

@section('content')

    <div class="container-fluid py-4">

        <div class="row justify-content-center">
            <div class="col-xl-9 col-lg-10">

                <div class="card border-0 shadow-lg rounded-4 overflow-hidden">

                    {{-- HEADER --}}
                    <div class="p-4 p-md-5 text-white"
                         style="background: linear-gradient(135deg,#0f172a,#111827);">

                        <h2 class="fw-bold mb-2">Create Student Account</h2>
                        <p class="text-white-50 mb-0">
                            Fill student details to register
                        </p>

                    </div>

                    {{-- FORM --}}
                    <div class="card-body p-4 p-md-5">

                        <form action="{{ route('student.store') }}"
                              method="POST"
                              enctype="multipart/form-data">

                            @csrf

                            <div class="row g-4">

                                {{-- REG NO --}}
                                <div class="col-md-6">
                                    <label class="form-label">Registration No</label>
                                    <input type="text" name="reg_no"
                                           class="form-control form-control-lg"
                                           placeholder="STU001" required>
                                </div>

                                {{-- NAME --}}
                                <div class="col-md-6">
                                    <label class="form-label">Full Name</label>
                                    <input type="text" name="name"
                                           class="form-control form-control-lg"
                                           required>
                                </div>

                                {{-- EMAIL --}}
                                <div class="col-md-6">
                                    <label class="form-label">Email</label>
                                    <input type="email" name="email"
                                           class="form-control form-control-lg"
                                           required>
                                </div>

                                {{-- PASSWORD --}}
                                <div class="col-md-6">
                                    <label class="form-label">Password</label>
                                    <input type="password" name="password"
                                           class="form-control form-control-lg"
                                           required>
                                </div>

                                {{-- ADDRESS --}}
                                <div class="col-12">
                                    <label>Address</label>
                                    <textarea name="address"
                                              class="form-control form-control-lg"
                                              rows="3"
                                              required></textarea>
                                </div>

                                {{-- DOB --}}
                                <div class="col-md-4">
                                    <label class="form-label">Date of Birth</label>
                                    <input type="date" name="dob"
                                           class="form-control form-control-lg"
                                           required>
                                </div>

                                {{-- AGE --}}
                                <<div class="col-md-4">
                                    <label>Age</label>
                                    <input type="number"
                                           name="age"
                                           class="form-control form-control-lg"
                                           required>
                                </div>

                                {{-- PHONE --}}
                                <div class="col-md-4">
                                    <label class="form-label">Phone</label>
                                    <input type="text" name="phone"
                                           class="form-control form-control-lg"
                                           required>
                                </div>

                                {{-- NIC --}}
                                <div class="col-md-6">
                                    <label class="form-label">NIC</label>
                                    <input type="text" name="nic"
                                           class="form-control form-control-lg"
                                           required>
                                </div>

                                {{-- IMAGE --}}
                                <div class="col-12">
                                    <label class="form-label">Profile Image</label>
                                    <input type="file" name="img"
                                           class="form-control form-control-lg">
                                </div>

                            </div>

                            {{-- BUTTONS --}}
                            <div class="mt-5 d-flex justify-content-between">

                                <button type="submit"
                                        class="btn btn-primary px-5 rounded-pill">
                                    Register Student
                                </button>

                                <a href="{{ route('student.index') }}"
                                   class="btn btn-outline-dark px-4 rounded-pill">
                                    View List
                                </a>

                            </div>

                        </form>

                    </div>

                </div>

            </div>
        </div>

    </div>

@endsection
