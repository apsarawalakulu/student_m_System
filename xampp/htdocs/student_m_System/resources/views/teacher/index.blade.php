@extends('app')

@push('title')
    Teacher List
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
                <h3 class="fw-bold mb-0">Teacher List</h3>
                <small>Manage all registered teachers</small>
            </div>

            <a href="{{ route('teacher.create') }}"
               class="btn btn-light text-primary rounded-pill px-4 shadow-sm">
                + Add Teacher
            </a>

        </div>

        <!-- ACTION BAR -->
        <div class="d-flex justify-content-between align-items-center mb-3 p-3 bg-white rounded-4 shadow-sm">

            <div class="d-flex gap-2 flex-wrap">

                <a href="{{ route('teacher.index') }}"
                   class="btn btn-outline-primary btn-sm rounded-pill px-3">
                    Teachers
                </a>

                @if($teachers->count() > 0)
                    <button class="btn btn-secondary btn-sm rounded-pill px-3 shadow-sm">
                        <i class="bi bi-person-circle me-1"></i>
                        View Profile
                    </button>
                @endif

                <!-- PDF (UI ONLY) -->
                <a id="teacherPdfBtn"
                   href="{{ route('teachers.export.pdf') }}"
                   class="btn btn-outline-danger btn-sm rounded-pill px-3">
                    PDF
                </a>

                <!-- EXCEL (UI ONLY) -->
                <a href="#"
                   class="btn btn-outline-success btn-sm rounded-pill px-3">
                    Excel
                </a>

                <!-- IMPORT -->
                <a href=""
                   class="btn btn-outline-primary btn-sm rounded-pill px-3">
                    Import
                </a>

            </div>

        </div>

        <!-- SEARCH -->
        <div class="card border-0 shadow-sm rounded-4 mb-3">
            <div class="card-body">
                <div class="input-group">
                    <span class="input-group-text bg-white">🔍</span>
                    <input type="text"
                           id="searchInput"
                           class="form-control border-0"
                           placeholder="Search teachers...">
                </div>
            </div>
        </div>

        <!-- TABLE -->
        <div class="card shadow-sm border-0 rounded-4">

            <div class="card-body p-0">

                <div class="table-responsive">

                    <table id="teacherTable"
                           class="table table-hover align-middle bg-white rounded-4 overflow-hidden">

                        <thead class="table-primary text-dark">
                        <tr>
                            <th>Image</th>
                            <th>Title</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Course</th>
                            <th>Phone</th>
                            <th>NIC</th>
                            <th>DOB</th>
                            <th>Actions</th>
                        </tr>
                        </thead>

                        <tbody>

                        @forelse($teachers as $teacher)

                            <tr>

                                <td>
                                    @if($teacher->img)
                                        <img src="{{ asset('uploads/teachers/'.$teacher->img) }}"
                                             width="50"
                                             height="50"
                                             class="rounded-circle shadow"
                                             style="object-fit: cover;">
                                    @else
                                        No Image
                                    @endif
                                </td>



                                <td>{{ $teacher->title }}</td>
                                <td>{{ $teacher->name }}</td>
                                <td>{{ $teacher->email }}</td>
                                <td>{{ $teacher->course }}</td>
                                <td>{{ $teacher->phone }}</td>
                                <td>{{ $teacher->nic }}</td>
                                <td>{{$teacher->dob }}</td>

                                <td>
                                    <div class="d-flex gap-1">

                                        <a href="{{ route('teacher.edit', $teacher->id) }}"
                                           class="btn btn-warning btn-sm">
                                            <i class="bi bi-pencil"></i>
                                        </a>

                                        <a href="{{ route('teacher.delete', $teacher->id) }}"
                                           class="btn btn-danger btn-sm deleteBtn">
                                            <i class="bi bi-trash"></i>
                                        </a>

                                    </div>
                                </td>

                            </tr>

                        @empty

                            <tr>
                                <td colspan="7" class="text-center text-muted py-4">
                                    No teachers found
                                </td>
                            </tr>

                        @endforelse

                        </tbody>

                    </table>

                </div>

            </div>

        </div>

    </div>

    <!-- SEARCH SCRIPT -->
    <script>
        document.addEventListener('DOMContentLoaded', function () {

            const searchInput = document.getElementById('searchInput');
            const table = document.getElementById('teacherTable');

            searchInput.addEventListener('keyup', function () {

                let value = this.value.toLowerCase();

                table.querySelectorAll('tbody tr').forEach(row => {
                    row.style.display = row.innerText.toLowerCase().includes(value)
                        ? ''
                        : 'none';
                });

            });

        });
    </script>

    <!-- DELETE CONFIRM -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        document.querySelectorAll('.deleteBtn').forEach(btn => {
            btn.addEventListener('click', function(e) {
                e.preventDefault();
                let link = this.getAttribute('href');

                Swal.fire({
                    title: 'Are you sure?',
                    text: 'This teacher will be deleted!',
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        window.location.href = link;
                    }
                });
            });
        });
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

    <script>

        document.getElementById('teacherPdfBtn').addEventListener('click', function() {

            let searchValue = document.getElementById('searchInput').value;

            let url = this.getAttribute('href');

            if (searchValue) {
                url += '?search=' + encodeURIComponent(searchValue);
            }

            this.href = url;
        });

    </script>

@endsection
