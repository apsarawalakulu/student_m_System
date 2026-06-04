@extends('app')

@push('title')
    Student List
@endpush

@push('nav-brand')
    LMS
@endpush

@section('content')

    <div class="container-fluid py-4">

        <!-- HEADER -->
        <div class="d-flex justify-content-between align-items-center mb-4 p-3 bg-white rounded-4 shadow-sm">

            <div>
                <h3 class="fw-bold mb-0">Student List</h3>
                <small class="text-muted">Manage all registered students</small>
            </div>

            <button class="btn btn-primary rounded-pill px-4 shadow-sm"
                    data-bs-toggle="modal"
                    data-bs-target="#studentModal">
                 Add Student
            </button>

        </div>


        <div class="d-flex justify-content-between align-items-center mb-3">

            <!-- LEFT BUTTONS -->
            <div class="d-flex gap-2 flex-wrap">


                <a href="{{ route('student.index') }}"
                   class="btn btn-dark btn-sm rounded-pill px-3 shadow-sm">
                    <i class="bi bi-people me-1"></i>
                    Students
                </a>


                @if($students->count() > 0)
                    <button class="btn btn-secondary btn-sm rounded-pill px-3 shadow-sm"
                            data-bs-toggle="modal"
                            data-bs-target="#viewModal{{ $students[0]->id }}">
                        <i class="bi bi-person-circle me-1"></i>
                        View Profile
                    </button>
                @endif

                <!-- EXPORT PDF -->
                <button class="btn btn-danger btn-sm rounded-pill px-3 shadow-sm">
                    <i class="bi bi-file-earmark-pdf-fill me-1"></i>
                    Export PDF
                </button>

                <!-- EXPORT EXCEL -->
                <button class="btn btn-success btn-sm rounded-pill px-3 shadow-sm">
                    <i class="bi bi-file-earmark-excel-fill me-1"></i>
                    Export Excel
                </button>

            </div>

        </div>

        <!-- SEARCH -->
        <div class="card border-0 shadow-sm rounded-4 mb-3">
            <div class="card-body">
                <input type="text"
                       id="searchInput"
                       class="form-control"
                       placeholder="🔍 Search students...">
            </div>
        </div>

        <!-- TABLE -->
        <div class="card shadow-sm border-0 rounded-4">

            <div class="card-body p-0">

                <div class="table-responsive">

                    <table id="studentTable" class="table table-hover align-middle mb-0">

                        <thead class="table-dark">
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
                                    @if($student->status == 'Active')
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

                <div class="modal-header bg-dark text-white">
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
                                <select name="status" class="form-control">
                                    <option value="">Select Status</option>
                                    <option value="Active">Active</option>
                                    <option value="Inactive">Inactive</option>
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
                        <h5 class="modal-title">Edit Student</h5>
                        <button class="btn-close" data-bs-dismiss="modal"></button>
                    </div>

                    <form action="{{ route('student.update', $student->id) }}"
                          method="POST"
                          enctype="multipart/form-data">

                        @csrf
                        @method('PUT')
                        <div class="modal-body">

                            <div class="row g-3">

                                <div class="col-md-6">
                                    <input type="text" name="reg_no" value="{{ $student->reg_no }}" class="form-control">
                                </div>

                                <div class="col-md-6">
                                    <input type="text" name="name" value="{{ $student->name }}" class="form-control">
                                </div>

                                <div class="col-md-6">
                                    <input type="email" name="email" value="{{ $student->email }}" class="form-control">
                                </div>

                                <div class="col-md-6">
                                    <input type="text" name="phone" value="{{ $student->phone }}" class="form-control">
                                </div>

                                <div class="col-md-12">
                                    <textarea name="address" class="form-control">{{ $student->address }}</textarea>
                                </div>

                                <div class="col-md-4">
                                    <input type="date" name="dob" value="{{ $student->dob }}" class="form-control">
                                </div>

                                <div class="col-md-4">
                                    <input type="number" name="age" value="{{ $student->age }}" class="form-control">
                                </div>

                                <div class="col-md-4">
                                    <input type="text" name="nic" value="{{ $student->nic }}" class="form-control">
                                </div>

                                <div class="col-md-12">
                                    <input type="file" name="img" class="form-control">
                                </div>

                            </div>

                        </div>

                        <div class="modal-footer">
                            <button class="btn btn-warning">Update</button>
                        </div>

                    </form>

                </div>

            </div>

        </div>

    @endforeach


    {{-- ================= SCRIPT ================= --}}
    <script>

        document.addEventListener('DOMContentLoaded', function () {

            const searchInput = document.getElementById('searchInput');
            const table = document.getElementById('studentTable');

            searchInput.addEventListener('keyup', function () {

                let value = this.value.toLowerCase();

                table.querySelectorAll('tbody tr').forEach(row => {
                    row.style.display = row.innerText.toLowerCase().includes(value) ? '' : 'none';
                });

            });

        });

        function confirmDelete(id) {

            Swal.fire({
                title: 'Are you sure?',
                text: 'This students will be deleted!',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    document.getElementById('delete-form-' + id).submit();
                }
            });

        }





    </script>



@endsection
