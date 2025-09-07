@extends('layouts.app')

@section('title', 'Verify Email - Dogifier')

@section('content')
    <div class="container-fluid bg-white">
        <div class="container">
            <div class="min-vh-100 d-flex align-items-center justify-content-center py-4">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="d-flex align-items-center justify-content-center h-100 p-3">
                            <img src="{{ asset('login-vector.svg') }}" class="w-100" alt="Dog">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="p-4">
                            <h3 class="primary-color">{{ __('messages.verify_email') }}</h3>
                            <p class="primary-color">{{ __('messages.enter_email_for_verification') }}</p>

                            <!-- Email Input Field -->
                            <div class="input-group mb-3">
                                <span class="input-group-text bg-transparent border-end-0">
                                    <i class="bi bi-envelope text-muted"></i>
                                </span>
                                <input type="email" class="form-control border-start-0" placeholder="{{ __('messages.enter_email_address') }}"
                                    id="email">
                            </div>

                            <!-- Send Reset Link Button -->
                            <div class="d-flex justify-content-center gap-2 mb-3">
                                <a href="{{ route('verification') }}" class="btn btn-primary text-white px-5 fs-6 text-decoration-none">{{ __('messages.send_code') }}</a>
                            </div>

                            <!-- Back to Login -->
                            <div class="text-center">
                                <a href="{{ route('login') }}" class="text-decoration-none text-secondary">
                                    <i class="bi bi-arrow-left me-2"></i>{{ __('messages.back_to_login') }}
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
