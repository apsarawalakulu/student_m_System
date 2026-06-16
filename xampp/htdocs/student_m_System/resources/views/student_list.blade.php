@extends('app')

@push('title')
    Student List
@endpush

@push('nav-brand')
    LMS
@endpush

@section('content')



    <div class="container-fluid py-4" style="background: #f5f7fb; min-height: 100vh;">

        <!-- HEADER -->
        <div class="d-flex justify-content-between align-items-center mb-4 p-4 rounded-4 shadow-sm"
             style="background: linear-gradient(135deg, #6641d6, #331481); color: white;">

            <div>
                <h3 class="fw-bold mb-0">Student List</h3>
                <small>Manage all registered students</small>
            </div>

            <button class="btn btn-light text-primary rounded-pill px-4 shadow-sm"
                    data-bs-toggle="modal"
                    data-bs-target="#studentModal">
                + Add Student
            </button>

        </div>


        <div class="d-flex justify-content-between align-items-center mb-3 p-3 bg-white rounded-4 shadow-sm">

            <!-- LEFT BUTTONS -->
            <div class="d-flex gap-2 flex-wrap">



                @if($students->count() > 0)
                    <button class="btn btn-secondary btn-sm rounded-pill px-3 shadow-sm"
                            data-bs-toggle="modal"
                            data-bs-target="#viewModal{{ $students[0]->id }}">
                        <i class="bi bi-person-circle me-1"></i>
                        View Profile
                    </button>
                @endif

                <!-- EXPORT PDF -->
                <a href="{{ route('students.export.pdf', ['search' => request('search')]) }}"
                    class="btn btn-outline-danger btn-sm">
                        PDF
                    </a>

                <!-- EXPORT EXCEL -->
                    <a href="{{ route('students.export', ['search' => request('search')]) }}"
                       class="btn btn-outline-success btn-sm">
                        Excel
                    </a>

                    <!-- IMPORT -->
                    <button class="btn btn-outline-primary btn-sm rounded-pill px-4 shadow-sm"
                            data-bs-toggle="modal"
                            data-bs-target="#importModal">
                        <i class="bi bi-upload me-1"></i>
                        Import
                    </button>
                    @include('students.import-modal')

            </div>

        </div>

        <!-- SEARCH -->
        <div class="card border-0 shadow-sm rounded-4 mb-3">
            <div class="card-body">
                <div class="input-group">
                    <span class="input-group-text bg-white">🔍</span>
                    <input type="text"
                           id="searchInput"
                           name="search"
                           class="form-control border-0"
                           placeholder="Search students...">

                </div>
            </div>
        </div>

        <!-- TABLE -->
        <div class="card shadow-sm border-0 rounded-4">

            <div class="card-body p-0">

                <div class="table-responsive">

                    <table id="studentTable"
                           class="table table-hover align-middle bg-white rounded-4 overflow-hidden">

                        <thead class="table-primary text-dark">
                        <tr>
                            <th>Reg No</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Address</th>
                            <th>DOB</th>
                            <th>Age</th>
                            <th>Status</th>
                            <th>Phone</th>
                            <th>NIC</th>
                            <th>Image</th>
                            <th>Actions</th>
                        </tr>
                        </thead>

                        <tbody>

                        @forelse($students as $student)

                            <tr>
                                <td>{{ $student->reg_no }}</td>
                                <td>{{ $student->name }}</td>
                                <td>{{ $student->email }}</td>
                                <td>{{ $student->address }}</td>
                                <td>{{ $student->dob }}</td>
                                <td>{{ $student->age }}</td>

                                <td>
                                    @if($student->status == 'active')
                                        <span class="badge bg-success">Active</span>
                                    @else
                                        <span class="badge bg-danger">Inactive</span>
                                    @endif
                                </td>

                                <td>{{ $student->phone }}</td>
                                <td>{{ $student->nic }}</td>

                                <!-- IMAGE -->
                                <td>
                                    @if($student->img)
                                        <img src="{{ asset('storage/'.$student->img) }}"
                                             width="50"
                                             height="50"
                                             class="rounded-circle shadow"
                                             style="object-fit: cover;">
                                    @else
                                        No Image
                                    @endif
                                </td>

                                <!-- ACTIONS -->
                                <td>
                                    <div class="d-flex gap-1">

                                        <button class="btn btn-info btn-sm"
                                                data-bs-toggle="modal"
                                                data-bs-target="#viewModal{{ $student->id }}">
                                            <i class="bi bi-eye"></i>
                                        </button>

                                        <button class="btn btn-warning btn-sm"
                                                data-bs-toggle="modal"
                                                data-bs-target="#editModal{{ $student->id }}">
                                            <i class="bi bi-pencil"></i>
                                        </button>

                                        <form id="delete-form-{{ $student->id }}"
                                              action="{{ route('student.delete',$student->id) }}"
                                              method="POST">

                                            @csrf
                                            @method('DELETE')

                                            <button type="button"
                                                    class="btn btn-danger btn-sm"
                                                    onclick="confirmDelete({{ $student->id }})">
                                                <i class="bi bi-trash"></i>
                                            </button>

                                        </form>

                                    </div>
                                </td>
                            </tr>

                        @empty

                            <tr>
                                <td colspan="7" class="text-center text-muted py-4">
                                    No students found
                                </td>
                            </tr>

                        @endforelse

                        </tbody>

                    </table>

                </div>

            </div>

        </div>

    </div>

    {{-- ================= VIEW PROFILE MODAL ================= --}}
    @foreach($students as $student)

        <div class="modal fade" id="viewModal{{ $student->id }}" tabindex="-1">

            <div class="modal-dialog modal-lg modal-dialog-centered">

                <div class="modal-content border-0 rounded-4 overflow-hidden shadow-lg">

                    <div class="bg-dark text-white p-4">
                        <h4 class="mb-0">{{ $student->name }}</h4>
                        <small>{{ $student->email }}</small>
                    </div>

                    <div class="row g-0">

                        <div class="col-md-4 text-center p-4 bg-light">

                            @if($student->img)
                                <img src="{{ asset('storage/'.$student->img) }}"
                                     class="rounded-circle shadow"
                                     width="150"
                                     height="150"
                                     style="object-fit: cover;">
                            @else
                                <div class="text-muted">No Image</div>
                            @endif

                        </div>

                        <div class="col-md-8 p-4">

                            <table class="table table-borderless">

                                <tr><th>Reg No</th><td>{{ $student->reg_no }}</td></tr>
                                <tr><th>Name</th><td>{{ $student->name }}</td></tr>
                                <tr><th>Email</th><td>{{ $student->email }}</td></tr>
                                <tr><th>Address</th><td>{{ $student->address }}</td></tr>
                                <tr><th>DOB</th><td>{{ $student->dob }}</td></tr>
                                <tr><th>Age</th><td>{{ $student->age }}</td></tr>
                                <tr><th>Phone</th><td>{{ $student->phone }}</td></tr>
                                <tr><th>NIC</th><td>{{ $student->nic }}</td></tr>
                                <tr><th>Status</th><td>{{ $student->status }}</td></tr>
                                <tr><th>Image</th><td>{{ $student->img}}</td></tr>
                                <tr><th>Action</th><td>{{ $student->action }}</td></tr>

                            </table>


                            <button class="btn btn-secondary rounded-pill px-4"
                                    data-bs-dismiss="modal">
                                Close
                            </button>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    @endforeach


    {{-- ================= ADD STUDENT MODAL ================= --}}
    <div class="modal fade" id="studentModal" tabindex="-1">

        <div class="modal-dialog modal-lg modal-dialog-centered">

            <div class="modal-content border-0 rounded-4 shadow-lg">

                <div class="card-header text-dark rounded-top-4 py-3"
                     style="background: linear-gradient(135deg, #a282f1, #ffffff);">
                    <h5 class="modal-title">Add Student</h5>
                    <button class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
                </div>

                <form action="{{ route('student.store') }}" method="POST" enctype="multipart/form-data">

                    @csrf

                    <div class="modal-body">

                        <div class="row g-3">

                            <div class="col-md-6">
                                <input type="text" name="reg_no" class="form-control" placeholder="Reg No">
                            </div>

                            <div class="col-md-6">
                                <input type="text" name="name" class="form-control" placeholder="Name">
                            </div>

                            <div class="col-md-6">
                                <input type="email" name="email" class="form-control" placeholder="Email">
                            </div>

                            <div class="col-md-6">
                                <input type="password" name="password" class="form-control" placeholder="Password">
                            </div>

                            <div class="col-md-12">
                                <textarea name="address" class="form-control" placeholder="Address"></textarea>
                            </div>

                            <div class="col-md-4">
                                <input type="date" name="dob" class="form-control">
                            </div>

                            <div class="col-md-4">
                                <input type="number" name="age" class="form-control" placeholder="Age">
                            </div>

                            <div class="col-md-4">
                                <input type="text" name="phone" class="form-control" placeholder="Phone">
                            </div>

                            <div class="col-md-6">
                                <input type="text" name="nic" class="form-control" placeholder="NIC">
                            </div>

                            <div class="col-md-6">
                                <label>Status</label>
                                <select name="status" class="form-control" required>
                                    <option value="active">Active</option>
                                    <option value="inactive">Inactive</option>
                                </select>
                            </div>

                            <div class="col-md-12">
                                <input type="file" name="img" class="form-control">
                            </div>

                        </div>

                    </div>

                    <div class="modal-footer">
                        <button class="btn btn-primary">Save Student</button>
                    </div>

                </form>

            </div>

        </div>

    </div>



    {{-- ================= EDIT MODAL ================= --}}
    @foreach($students as $student)

        <div class="modal fade" id="editModal{{ $student->id }}" tabindex="-1">
            <div class="modal-dialog modal-lg modal-dialog-centered">
                <div class="modal-content border-0 rounded-4 shadow-lg">

                    <div class="modal-header bg-dark text-white">
                        <h5 class="modal-title">
                            <i class="bi bi-pencil-square me-2"></i>
                            Edit Student
                        </h5>

                        <button type="button"
                                class="btn-close btn-close-white"
                                data-bs-dismiss="modal"></button>
                    </div>

                    <form action="{{ route('student.update', $student->id) }}"
                          method="POST"
                          enctype="multipart/form-data">

                        @csrf
                        @method('PUT')

                        <div class="modal-body">

                            <div class="row g-3">

                                {{-- Reg No --}}
                                <div class="col-md-6">
                                    <label class="form-label">Reg No</label>
                                    <input type="text"
                                           name="reg_no"
                                           value="{{ $student->reg_no }}"
                                           class="form-control">
                                </div>

                                {{-- Name --}}
                                <div class="col-md-6">
                                    <label class="form-label">Name</label>
                                    <input type="text"
                                           name="name"
                                           value="{{ $student->name }}"
                                           class="form-control">
                                </div>

                                {{-- Email --}}
                                <div class="col-md-6">
                                    <label class="form-label">Email</label>
                                    <input type="email"
                                           name="email"
                                           value="{{ $student->email }}"
                                           class="form-control">
                                </div>

                                {{-- Phone --}}
                                <div class="col-md-6">
                                    <label class="form-label">Phone</label>
                                    <input type="text"
                                           name="phone"
                                           value="{{ $student->phone }}"
                                           class="form-control">
                                </div>

                                {{-- Address --}}
                                <div class="col-md-12">
                                    <label class="form-label">Address</label>
                                    <textarea name="address"
                                              class="form-control"
                                              rows="3">{{ $student->address }}</textarea>
                                </div>

                                {{-- DOB --}}
                                <div class="col-md-4">
                                    <label class="form-label">DOB</label>
                                    <input type="date"
                                           name="dob"
                                           value="{{ $student->dob }}"
                                           class="form-control">
                                </div>

                                {{-- Age --}}
                                <div class="col-md-4">
                                    <label class="form-label">Age</label>
                                    <input type="number"
                                           name="age"
                                           value="{{ $student->age }}"
                                           class="form-control">
                                </div>

                                {{-- NIC --}}
                                <div class="col-md-4">
                                    <label class="form-label">NIC</label>
                                    <input type="text"
                                           name="nic"
                                           value="{{ $student->nic }}"
                                           class="form-control">
                                </div>

                                {{-- Status --}}
                                <div class="col-md-6">
                                    <label class="form-label">Status</label>

                                    <select name="status"
                                            class="form-select"
                                            required>

                                        <option value="active"
                                            {{ $student->status == 'active' ? 'selected' : '' }}>
                                            Active
                                        </option>

                                        <option value="inactive"
                                            {{ $student->status == 'inactive' ? 'selected' : '' }}>
                                            Inactive
                                        </option>

                                    </select>
                                </div>

                                {{-- Student Image --}}
                                <div class="col-md-12">
                                    <hr>

                                    <label class="form-label fw-semibold">
                                        Student Image
                                    </label>

                                    <div class="text-center mb-3">

                                        @if($student->img)
                                            <img src="{{ asset('storage/' . $student->img) }}"
                                                 width="120"
                                                 height="120"
                                                 class="rounded-circle border shadow"
                                                 style="object-fit:cover;">
                                        @else
                                            <img src="https://via.placeholder.com/120"
                                                 width="120"
                                                 height="120"
                                                 class="rounded-circle border shadow">
                                        @endif

                                    </div>

                                    <input type="file"
                                           name="img"
                                           class="form-control">
                                </div>

                            </div>

                        </div>

                        <div class="modal-footer">
                            <button type="button"
                                    class="btn btn-secondary rounded-pill"
                                    data-bs-dismiss="modal">
                                Cancel
                            </button>

                            <button type="submit"
                                    class="btn btn-warning rounded-pill px-4">
                                <i class="bi bi-check-circle me-1"></i>
                                Update Student
                            </button>
                        </div>

                    </form>

                </div>
            </div>
        </div>

    @endforeach

    {{-- ================= SCRIPT ================= --}}
    <script>


        document.addEventListener('DOMContentLoaded', function () {

            const input = document.getElementById('searchInput');
            const rows = document.querySelectorAll('#studentTable tbody tr');

            input.addEventListener('keyup', function () {

                const value = input.value.trim();


                if (value === '') {
                    rows.forEach(r => r.style.display = '');
                    return;
                }

                const isNumber = /^[0-9]+$/.test(value);

                rows.forEach(row => {

                    const name = row.cells[1].innerText.trim().toLowerCase();
                    const age  = row.cells[5].innerText.trim();

                    let show = false;


                    if (isNumber) {
                        show = (parseInt(age) === parseInt(value));
                    }


                    else {
                        show = name.includes(value.toLowerCase());
                    }

                    row.style.display = show ? '' : 'none';
                });

            });

        });







        // 🗑 DELETE CONFIRM
        window.confirmDelete = function (id) {

            Swal.fire({
                title: 'Are you sure?',
                text: 'This student will be deleted!',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    document.getElementById('delete-form-' + id).submit();
                }
            });

        };

    </script>

<style>

    tbody tr:hover {
        background: #f1f7ff !important;
        transition: 0.2s;
    }

    .table td, .table th {
        vertical-align: middle;
    }

</style>

@endsection
