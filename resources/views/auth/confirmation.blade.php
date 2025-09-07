@extends('layouts.app')

@section('title', 'Confirmation - Dogifier')

@section('content')
    <div class="container-fluid bg-white">
        <div class="container">
            <div class="min-vh-100 d-flex align-items-center justify-content-center py-4">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="d-flex align-items-center justify-content-center h-100 p-3">
                            <img src="{{ asset('confirmation.svg') }}" class="w-75" alt="Dog">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="p-4 text-center d-flex flex-column justify-content-center h-100">
                            <h3 class="primary-color mb-3">{{ __('messages.confirmation') }}</h3>
                            <p class="primary-color mb-4">{{ __('messages.password_changed_message') }}</p>

                            <!-- Back to Login Button -->
                            <div class="d-flex justify-content-center gap-2 mb-3">
                                <a href="{{ route('login') }}" class="btn btn-primary text-white px-5 fs-6 text-decoration-none">{{ __('messages.back_to_login') }}</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
