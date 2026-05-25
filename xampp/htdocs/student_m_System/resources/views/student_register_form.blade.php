
@extends('app')
@push('title')
    Student Register
@endpush
@push('page_header_title')
    <h2 class="fw-bold fs-2">Student Register</h2>
@endpush
@section('content')

    <form action="{{route('student.store')}}" method="POST" class="register-form w-50">
        @csrf


        <div class="form-group">
            <label class="form-label">Reg No</label>
            <input type="text" class="form-control" name="reg_no" required>
        </div>

        <div class="form-group">
            <label class="form-label">Name</label>
            <input type="text" class="form-control" name="name" required>
        </div>

        <div class="form-group">
            <label class="form-label">Address</label>
            <input type="text" class="form-control" name="address" required>
        </div>

        <div class="form-group">
            <label class="form-label">DOB</label>
            <input type="date" class="form-control" name="dob" required>
        </div>

        <div class="form-group">
            <label class="form-label">Age</label>
            <input type="number" class="form-control" name="age" required>
        </div>

        <div class="form-group">
            <label class="form-label">Weight</label>
            <input type="number" class="form-control" name="weight" required>
        </div>

        <button type="submit" class="btn btn-success w-75 mt-5 rounded-pill">
            Register
        </button>
    </form>

@endsection
