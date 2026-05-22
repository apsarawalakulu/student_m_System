<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap-icons.min.css') }}">
</head>
<body>
<div class="container-fluid">
    <div class="row flex-nowrap">
        <div class="col-12 col-md-3 col-lg-2 px-0 bg-dark min-vh-100">
            @include('component.sidebar')
        </div>
        <div class="col-12 col-md-9 col-lg-10 p-0">
            @include('component.navbar')
            <div class="container-fluid p-4">
                @yield('content')
            </div>
        </div>
    </div>
</div>
<script src="{{ asset('assets/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>
