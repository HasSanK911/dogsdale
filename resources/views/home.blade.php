@extends('layouts.app')

@section('title', 'Welcome - Dogifier')

@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-8 text-center">
            <h1 class="display-4 fw-bold text-primary mb-4">Welcome to Dogifier</h1>
            <p class="lead text-muted mb-5">You have successfully logged in to your account.</p>
            <div class="d-flex justify-content-center gap-3">
                <a href="#" class="btn btn-primary">Dashboard</a>
                <a href="#" class="btn btn-outline-primary">Profile</a>
            </div>
        </div>
    </div>
</div>
@endsection
