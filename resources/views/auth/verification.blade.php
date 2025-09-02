@extends('layouts.app')

@section('title', 'Verification - Dogifier')

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
                            <h3 class="primary-color">Verification</h3>
                            <p class="primary-color">Verify your email</p>

                            <!-- OTP Input Fields -->
                            <div class="d-flex justify-content-center gap-3 mb-4">
                                <input type="text" class="otp-input" maxlength="1" placeholder="0">
                                <input type="text" class="otp-input" maxlength="1" placeholder="0">
                                <input type="text" class="otp-input" maxlength="1" placeholder="0">
                                <input type="text" class="otp-input" maxlength="1" placeholder="0">
                            </div>

                            <!-- Resend Code Section -->
                            <div class="d-flex justify-content-between align-items-center mb-4">
                                <span class="text-muted">Didn't receive code?</span>
                                <a href="#" class="text-decoration-none secondary-color">Send again!</a>
                            </div>

                            <!-- Verify Button -->
                            <div class="d-flex justify-content-center gap-2 mb-3">
                                <a href="{{ route('reset-password') }}" class="btn btn-primary text-white px-5 fs-6 text-decoration-none">Verify</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // OTP input functionality
            const otpInputs = document.querySelectorAll('.otp-input');
            
            otpInputs.forEach((input, index) => {
                // Auto-focus next input when typing
                input.addEventListener('input', function() {
                    if (this.value.length === 1) {
                        if (index < otpInputs.length - 1) {
                            otpInputs[index + 1].focus();
                        }
                    }
                });
                
                // Handle backspace
                input.addEventListener('keydown', function(e) {
                    if (e.key === 'Backspace' && this.value.length === 0) {
                        if (index > 0) {
                            otpInputs[index - 1].focus();
                        }
                    }
                });
                
                // Handle paste
                input.addEventListener('paste', function(e) {
                    e.preventDefault();
                    const pastedData = e.clipboardData.getData('text').slice(0, 4);
                    const digits = pastedData.split('');
                    
                    otpInputs.forEach((input, i) => {
                        if (digits[i]) {
                            input.value = digits[i];
                        }
                    });
                    
                    // Focus the last filled input or the first empty one
                    const lastFilledIndex = Math.min(digits.length - 1, otpInputs.length - 1);
                    otpInputs[lastFilledIndex].focus();
                });
            });
        });
    </script>
@endsection
