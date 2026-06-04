@extends('app')

@section('content')

    <div class="container mt-4">

        <div class="card shadow-lg p-4 text-center">

            <h1>👋 Welcome Student</h1>

            <h3 class="text-primary">
                {{ Auth::guard('students')->user()->name }}
            </h3>

            <p class="text-muted">
                Welcome to Student Dashboard
            </p>

        </div>

    </div>

@endsection
