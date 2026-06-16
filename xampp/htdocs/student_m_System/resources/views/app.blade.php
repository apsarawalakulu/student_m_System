
    <!DOCTYPE html>
<html lang="en">

<head>
    @include('component.head')
</head>

<body class="hold-transition sidebar-mini layout-fixed">

<!--begin::App Wrapper-->
<div class="app-wrapper">

    <!--begin::Sidebar-->
    @include('component.sidebar')
    <!--end::Sidebar-->

    <!--begin::App Main-->
    <main class="app-main">

        <!--begin::App Content Header-->
        <div class="app-content-header">

            <!--begin::Container-->
            <div class="container-fluid">

                <!--begin::Row-->
                <div class="row">

                    <div class="col-sm-6">
                        <h3 class="mb-0">
                            @stack('page_header_title')
                        </h3>
                    </div>

                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-end">
                            <li class="breadcrumb-item">
                                <a href="#">
                                    <i class="bi bi-house-door-fill me-1"></i>
                                    Home
                                </a>
                            </li>

                            <li class="breadcrumb-item">
                                <a href="{{ route('admin.dashboard') }}">
                                    Dashboard
                                </a>
                            </li>

                            <li class="breadcrumb-item">
                                <a href="">
                                    Back
                                </a>
                            </li>
                        </ol>
                    </div>

                </div>
                <!--end::Row-->

            </div>
            <!--end::Container-->

        </div>
        <!--end::App Content Header-->

        <!--begin::App Content-->
        <div class="app-content">

            <!--begin::Container-->
            <div class="container-fluid">

                @yield('content')

            </div>
            <!--end::Container-->

        </div>
        <!--end::App Content-->

    </main>
    <!--end::App Main-->

    <!--begin::Footer-->
    @include('component.footer')
    <!--end::Footer-->

</div>
<!--end::App Wrapper-->

@include('component.script')
<!--end::Script-->

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>


</body>
</html>
