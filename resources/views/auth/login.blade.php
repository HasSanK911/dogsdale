@extends('layouts.app')

@section('title', 'Login - Dogifier')

@section('content')
    <div class="container-fluid bg-white">
        <div class="container">
            <div class="min-vh-100 d-flex align-items-center justify-content-center py-4">
                <div class="row bg-white rounded-4">
                    <div class="col-lg-6">
                        <div class="d-flex align-items-center justify-content-center h-100 p-3">
                            <img src="{{ asset('login-vector.svg') }}" class="w-100" alt="Dog">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="p-4">
                            <h3 class="primary-color">Log In</h3>
                            <p class="primary-color">Select method to login to your account</p>

                            <!-- Email Input Field -->
                            <div class="input-group mb-3">
                                <span class="input-group-text bg-transparent border-end-0">
                                    <i class="bi bi-envelope text-muted"></i>
                                </span>
                                <input type="email" class="form-control border-start-0" placeholder="Enter Your Email"
                                    id="email">
                            </div>

                            <!-- Password Input Field -->
                            <div class="input-group mb-3">
                                <span class="input-group-text bg-transparent border-end-0">
                                    <i class="bi bi-lock text-muted"></i>
                                </span>
                                <input type="password" class="form-control border-start-0" placeholder="Enter Your Password"
                                    id="password">
                                <span class="input-group-text bg-transparent border-start-0">
                                    <i class="bi bi-eye-slash text-muted password-toggle" style="cursor: pointer;"></i>
                                </span>
                            </div>

                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Remember me
                                    </label>
                                </div>
                                <div>
                                    <a href="{{ route('verify-email') }}" class="text-decoration-none text-secondary">Forgot Password?</a>
                                </div>
                            </div>

                            <!-- Login Button -->
                            <div class="d-flex justify-content-center gap-2">
                                <button class="btn btn-primary text-white px-5 fs-6">Log in</button>
                            </div>

                            <div class="d-flex justify-content-center align-items-center my-3 gap-2">
                                <div class="line-center"></div>
                                <div class="text-nowrap">Or Login With</div>
                                <div class="line-center"></div>
                            </div>

                            <!-- Social Media Buttons -->
                            <div class="d-flex justify-content-center gap-2">
                                <button class="btn btn-outline-primary rounded-3">
                                    <img src="{{ asset('icons/google.png') }}" width="30" height="30" alt="Google">
                                </button>
                                <button class="btn btn-outline-primary rounded-3">
                                    <img src="{{ asset('icons/facebook.png') }}" width="30" height="30"
                                        alt="Facebook">
                                </button>
                            </div>

                            <div class="mt-3 text-center">
                                <p class="text-muted">Don't have an account? <a href="{{ route('signup') }}" class="text-decoration-none text-primary">Sign up!</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Password toggle functionality
            const passwordToggle = document.querySelector('.password-toggle');
            const passwordInput = document.querySelector('#password');

            if (passwordToggle && passwordInput) {
                passwordToggle.addEventListener('click', function() {
                    const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
                    passwordInput.setAttribute('type', type);

                    // Toggle icon
                    this.classList.toggle('bi-eye');
                    this.classList.toggle('bi-eye-slash');
                });
            }
        });
    </script>
@endsection
