@extends('app')

@section('content')

    <div class="container py-4">

        <div class="card shadow-lg border-0">

            <div class="card-header bg-warning">
                <h4 class="mb-0">Edit Teacher</h4>
            </div>

            <div class="card-body">

                <form method="POST" action="{{ route('teacher.update', $teacher->id) }}" enctype="multipart/form-data">
                    @csrf

                    <select name="title" class="form-control">
                        <option value="Mr" {{ $teacher->title == 'Mr' ? 'selected' : '' }}>Mr</option>
                        <option value="Mrs" {{ $teacher->title == 'Mrs' ? 'selected' : '' }}>Mrs</option>
                        <option value="Miss" {{ $teacher->title == 'Miss' ? 'selected' : '' }}>Miss</option>
                        <option value="Dr" {{ $teacher->title == 'Dr' ? 'selected' : '' }}>Dr</option>
                    </select>

                    {{-- NAME --}}
                    <input type="text" name="name"
                           value="{{ $teacher->name }}"
                           class="form-control mb-2"
                           placeholder="Teacher Name">

                    {{-- EMAIL --}}
                    <input type="email" name="email"
                           value="{{ $teacher->email }}"
                           class="form-control mb-2"
                           placeholder="Email">

                    {{-- COURSE DROPDOWN --}}
                    <select name="course" class="form-control mb-2">
                        <option value="">Select Course</option>

                        @foreach($courses as $course)
                            <option value="{{ $course->name }}"
                                {{ $teacher->course == $course->name ? 'selected' : '' }}>
                                {{ $course->name }}
                            </option>
                        @endforeach
                    </select>

                    {{-- PHONE --}}
                    <input type="text" name="phone"
                           value="{{ $teacher->phone }}"
                           class="form-control mb-2"
                           placeholder="Phone">

                    {{-- NIC --}}
                    <input type="text" name="nic"
                           value="{{ $teacher->nic }}"
                           class="form-control mb-2"
                           placeholder="NIC">

                    {{--DOB --}}
                    <input type="date" name="dob"
                           value="{{ $teacher->dob }}"
                           class="form-control">

                    {{-- ADDRESS --}}
                    <textarea name="address"
                              class="form-control mb-2"
                              placeholder="Address">{{ $teacher->address }}</textarea>

                    {{-- IMAGE --}}
                    <input type="file" name="img" class="form-control mb-3">

                    {{-- SHOW CURRENT IMAGE --}}
                    @if($teacher->img)
                        <img src="{{ asset('uploads/teachers/'.$teacher->img) }}"
                             width="80"
                             class="rounded mb-3">
                    @endif

                    <button class="btn btn-success w-100">
                        Update Teacher
                    </button>

                </form>

            </div>

        </div>

    </div>

@endsection
