
@extends('app')
@push('title')
    Student Update
@endpush
@push('page_header_title')
    <h2 class="fw-bold fs-2">Student Update</h2>
@endpush
@section('content')
    <div class="container">
        <div class="row justify-content-center align-items-center min-vh-100">

            <div class="col-md-6 col-lg-5">
                <div class="card shadow-lg border-0 rounded-4">

                    <div class="card-header bg-dark text-white text-center fw-bold">
                        Student Update
                    </div>

                    <div class="card-body p-4">

                        <form action="{{ route('students.update', $student->id) }}"
                              method="POST"
                              enctype="multipart/form-data">

                            @csrf
                            @method('PUT')

                            <div class="mb-3">
                                <label class="form-label">Reg No</label>
                                <input type="text" class="form-control" name="reg_no" value="{{ $student->reg_no }}" required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Name</label>
                                <input type="text" class="form-control" name="name" value="{{ $student->name }}" required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Email</label>
                                <input type="email" class="form-control" name="email" value="{{ $student->email }}" required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Password</label>
                                <input type="password" class="form-control" name="password">
                                <small class="text-muted">Leave blank if not changing</small>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Address</label>
                                <input type="text" class="form-control" name="address" value="{{ $student->address }}" required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">DOB</label>
                                <input type="date" class="form-control" name="dob" value="{{ $student->dob }}" required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Age</label>
                                <input type="number" class="form-control" name="age" value="{{ $student->age }}" required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Phone</label>
                                <input type="tel" class="form-control" name="phone" value="{{ $student->phone }}" required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">NIC</label>
                                <input type="text" class="form-control" name="nic" value="{{ $student->nic }}" required>
                            </div>


                            <div class="mb-3">
                                <label class="form-label">Image</label>
                                <input type="file" class="form-control" name="img">
                                <br>
                                @if($student->img)
                                    <img src="{{ asset('storage/'.$student->img) }}" width="80">
                                @endif
                            </div>

                            <button type="submit" class="btn btn-warning w-100 rounded-pill mt-3">
                                Update
                            </button>

                        </form>

                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
