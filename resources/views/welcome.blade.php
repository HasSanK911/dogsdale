@extends('layouts.app')

@section('title', 'Welcome - ' . config('app.name'))

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-10">
            <div class="text-center mb-5">
                <h1 class="display-4 fw-bold text-primary mb-3">Welcome to Dogifier</h1>
                <p class="lead text-secondary mb-4">Your Laravel application is now running with Bootstrap and custom styling!</p>
            </div>
            
            <div class="row g-4 mb-5">
                <div class="col-md-6">
                    <div class="card h-100 border-primary">
                        <div class="card-body text-center">
                            <h5 class="card-title text-primary">Primary Color</h5>
                            <p class="card-text">This demonstrates our custom primary color (#00A8D1)</p>
                            <div class="bg-primary text-white p-3 rounded">
                                Primary Background
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card h-100 border-secondary">
                        <div class="card-body text-center">
                            <h5 class="card-title text-secondary">Secondary Color</h5>
                            <p class="card-text">This demonstrates our custom secondary color (#F6871F)</p>
                            <div class="bg-secondary text-white p-3 rounded">
                                Secondary Background
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mb-4">
                <h3 class="text-primary mb-3">Font Family: Outfit</h3>
                <p class="fs-5">This text is displayed using the Outfit font family, which provides a modern and clean appearance.</p>
                <p class="fw-light">Light weight: The quick brown fox jumps over the lazy dog</p>
                <p class="fw-normal">Normal weight: The quick brown fox jumps over the lazy dog</p>
                <p class="fw-bold">Bold weight: The quick brown fox jumps over the lazy dog</p>
            </div>

            <div class="d-flex flex-wrap justify-content-center gap-3">
                <a href="https://laravel.com/docs" target="_blank" class="btn btn-primary">
                    <i class="bi bi-book me-2"></i>Documentation
                </a>
                <a href="https://laracasts.com" target="_blank" class="btn btn-secondary">
                    <i class="bi bi-play-circle me-2"></i>Laracasts
                </a>
                <a href="https://github.com/laravel/laravel" target="_blank" class="btn btn-outline-primary">
                    <i class="bi bi-github me-2"></i>GitHub
                </a>
            </div>
        </div>
    </div>
</div>
@endsection
