@extends('app')

@push('title')
    Student Profile
@endpush

@section('content')

    <div class="container py-5">

        <div class="card border-0 shadow-lg rounded-4 overflow-hidden">

            <!-- HEADER -->
            <div class="bg-dark text-white p-4">

                <h2 class="fw-bold mb-1">
                    {{ $student->name }}
                </h2>

                <p class="mb-0 text-white-50">
                    {{ $student->email }}
                </p>

            </div>

            <div class="row g-0">

                <!-- IMAGE -->
                <div class="col-md-4 text-center p-5 bg-light">

                    @if($student->img)

                        <img src="{{ asset('storage/'.$student->img) }}"
                             class="rounded-circle shadow"
                             width="220"
                             height="220"
                             style="object-fit: cover;">

                    @else

                        <img src="https://via.placeholder.com/220"
                             class="rounded-circle shadow">

                    @endif

                </div>

                <!-- DETAILS -->
                <div class="col-md-8 p-5">

                    <table class="table table-borderless">

                        <tr>
                            <th width="200">Registration No</th>
                            <td>{{ $student->reg_no }}</td>
                        </tr>

                        <tr>
                            <th>Full Name</th>
                            <td>{{ $student->name }}</td>
                        </tr>

                        <tr>
                            <th>Email</th>
                            <td>{{ $student->email }}</td>
                        </tr>

                        <tr>
                            <th>Address</th>
                            <td>{{ $student->address }}</td>
                        </tr>

                        <tr>
                            <th>Date of Birth</th>
                            <td>{{ $student->dob }}</td>
                        </tr>

                        <tr>
                            <th>Age</th>
                            <td>{{ $student->age }}</td>
                        </tr>

                        <tr>
                            <th>Phone</th>
                            <td>{{ $student->phone }}</td>
                        </tr>

                        <tr>
                            <th>NIC</th>
                            <td>{{ $student->nic }}</td>
                        </tr>

                    </table>

                    <a href="{{ url()->previous() }}"
                       class="btn btn-dark rounded-pill px-4 mt-3">

                        ← Back

                    </a>

                </div>

            </div>

        </div>

    </div>

@endsection
