@extends('app')

@section('content')

    <div class="container py-5">

        <div class="row justify-content-center">

            <div class="col-lg-8">

                {{-- CARD --}}
                <div class="card shadow-lg border-0 rounded-4">

                    {{-- HEADER --}}
                    <div class="card-header text-dark rounded-top-4 py-3"
                         style="background: linear-gradient(135deg, #a282f1, #ffffff);">
                        <h4 class="mb-0 fw-bold">
                            <i class="bi bi-person-plus-fill me-2"></i>
                            Add New Teacher
                        </h4>
                    </div>

                    {{-- BODY --}}
                    <div class="card-body p-4">

                        {{-- SUCCESS MESSAGE --}}
                        @if(session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif

                        {{-- VALIDATION ERRORS --}}
                        @if($errors->any())
                            <div class="alert alert-danger">
                                <ul class="mb-0">
                                    @foreach($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form method="POST" action="{{ route('teacher.store') }}" enctype="multipart/form-data">
                            @csrf

                            <div class="row g-3">

                                <div class="col-md-6">
                                    <label class="form-label">Title</label>

                                    <select name="title" class="form-control">
                                        <option value="">Select Title</option>
                                        <option value="Mr">Mr</option>
                                        <option value="Mrs">Mrs</option>
                                        <option value="Miss">Miss</option>
                                        <option value="Dr">Dr</option>
                                    </select>
                                </div>

                                <div class="col-md-6">
                                    <label class="form-label">Name</label>
                                    <input type="text" name="name" class="form-control" placeholder="Enter name">
                                </div>

                                <div class="col-md-6">
                                    <label class="form-label">Email</label>
                                    <input type="email" name="email" class="form-control" placeholder="Enter email">
                                </div>

                                <div class="col-md-6">
                                    <label class="form-label">Password</label>
                                    <input type="password" name="password" class="form-control" placeholder="Enter password">
                                </div>

                                <div class="col-md-6">
                                    <label class="form-label">Course</label>

                                    <select name="course" class="form-control">
                                        <option value="">Select Course</option>

                                        @foreach($courses as $course)
                                            <option value="{{ $course->name }}">
                                                {{ $course->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="col-md-6">
                                    <label class="form-label">Phone</label>
                                    <input type="text" name="phone" class="form-control" placeholder="Enter phone">
                                </div>

                                <div class="col-md-6">
                                    <label class="form-label">NIC</label>
                                    <input type="text" name="nic" class="form-control" placeholder="Enter NIC">
                                </div>

                                <div class="col-md-6">
                                    <label class="form-label">Date of Birth</label>
                                    <input type="date" name="dob" class="form-control">
                                </div>

                                <div class="col-12">
                                    <label class="form-label">Address</label>
                                    <textarea name="address" rows="3" class="form-control" placeholder="Enter address"></textarea>
                                </div>

                                <div class="col-12">
                                    <label class="form-label">Profile Image</label>
                                    <input type="file" name="img" class="form-control">
                                </div>

                                <div class="col-12 text-end mt-3">
                                    <button type="submit" class="btn btn-primary px-4 py-2 rounded-pill">
                                        <i class="bi bi-check-circle me-1"></i>
                                        Save Teacher
                                    </button>
                                </div>

                            </div>

                        </form>

                    </div>

                </div>

            </div>

        </div>

    </div>

@endsection
