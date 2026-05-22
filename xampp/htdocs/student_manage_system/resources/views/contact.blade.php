@extends('layout.admin')
@section('content')
    <div class="row justify-content-center">
        <div class="col-lg-6">
            <div class="card shadow-sm border-0 p-4">
                <h3 class="text-center text-primary mb-4">
                    Contact Us
                </h3>
                @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
                <form action="{{ route('contact.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label>Name</label>
                        <input type="text" name="name" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label>Email</label>
                        <input type="email" name="email" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label>Message</label>
                        <textarea name="message" class="form-control" rows="4"></textarea>
                    </div>
                    <button class="btn btn-primary w-100">
                        Send Message
                    </button>
                </form>
            </div>
        </div>
    </div>
@endsection
