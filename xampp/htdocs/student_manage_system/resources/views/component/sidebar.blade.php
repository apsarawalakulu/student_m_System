<div class="bg-dark text-white d-flex flex-column p-3">
    <h4 class="text-warning fw-bold mb-4">
        <i class="bi bi-mortarboard-fill me-2"></i>
        StudentSys
    </h4>
    <ul class="nav flex-column gap-1 flex-grow-1">
        <li>
            <a href="{{ route('admin.dashboard') }}" class="nav-link text-white rounded px-2 py-2">
                Dashboard
            </a>
        </li>
        <li>
            <a href="{{ route('students.index') }}" class="nav-link text-white">
                Students
            </a>
        </li>
        <li>
            <a href="#" class="nav-link text-white rounded px-2 py-2">
                Teachers
            </a>
        </li>
        <li>
            <a href="#" class="nav-link text-white rounded px-2 py-2">
                Courses
            </a>
        </li>
    </ul>
    <div>
        <a href="#" class="nav-link text-danger rounded px-2 py-2">
            Logout
        </a>
    </div>
</div>
