@extends('layouts.app')

@section('title', 'Sign Up - Dogifier')

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
                            <h3 class="primary-color">{{ __('messages.create_account') }}</h3>
                            <p class="primary-color">{{ __('messages.create_account_description') }}</p>

                            <!-- Email Input Field -->
                            <div class="input-group mb-3">
                                <span class="input-group-text bg-transparent border-end-0">
                                    <i class="bi bi-envelope text-muted"></i>
                                </span>
                                <input type="email" class="form-control border-start-0" placeholder="{{ __('messages.enter_email') }}"
                                    id="email">
                            </div>

                            <!-- Password Input Field -->
                            <div class="input-group mb-3">
                                <span class="input-group-text bg-transparent border-end-0">
                                    <i class="bi bi-lock text-muted"></i>
                                </span>
                                <input type="password" class="form-control border-start-0" placeholder="{{ __('messages.enter_password') }}"
                                    id="password">
                                <span class="input-group-text bg-transparent border-start-0">
                                    <i class="bi bi-eye-slash text-muted password-toggle" style="cursor: pointer;"></i>
                                </span>
                            </div>

                            <!-- Confirm Password Input Field -->
                            <div class="input-group mb-4">
                                <span class="input-group-text bg-transparent border-end-0">
                                    <i class="bi bi-lock text-muted"></i>
                                </span>
                                <input type="password" class="form-control border-start-0" placeholder="{{ __('messages.confirm_password') }}"
                                    id="confirmPassword">
                                <span class="input-group-text bg-transparent border-start-0">
                                    <i class="bi bi-eye-slash text-muted password-toggle" style="cursor: pointer;"></i>
                                </span>
                            </div>

                            <!-- Remember Me Checkbox -->
                            <div class="form-check mb-4">
                                <input class="form-check-input" type="checkbox" value="" id="rememberMe">
                                <label class="form-check-label" for="rememberMe">
                                    {{ __('messages.remember_me') }}
                                </label>
                            </div>

                            <!-- Sign Up Button -->
                            <div class="d-flex justify-content-center gap-2 mb-4">
                                <a href="{{ route('your-details') }}" class="btn btn-primary text-white px-5 fs-6 text-decoration-none">{{ __('messages.signup') }}</a>
                            </div>

                            <!-- Back to Login -->
                            <div class="text-center">
                                <p class="text-muted">{{ __('messages.already_have_account') }} <a href="{{ route('login') }}" class="text-decoration-none text-primary">{{ __('messages.login') }}</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Password toggle functionality for both password fields
            const passwordToggles = document.querySelectorAll('.password-toggle');
            const passwordInputs = document.querySelectorAll('input[type="password"]');
            
            passwordToggles.forEach((toggle, index) => {
                toggle.addEventListener('click', function() {
                    const input = passwordInputs[index];
                    const type = input.getAttribute('type') === 'password' ? 'text' : 'password';
                    input.setAttribute('type', type);
                    
                    // Toggle icon
                    this.classList.toggle('bi-eye');
                    this.classList.toggle('bi-eye-slash');
                });
            });
        });
    </script>
@endsection
