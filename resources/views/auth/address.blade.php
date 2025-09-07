@extends('layouts.app')

@section('title', 'Address - Dogifier')

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
                            <h3 class="primary-color mb-2">{{ __('messages.address') }}</h3>
                            <p class="text-muted primary-color mb-4">{{ __('messages.provide_address_details') }}</p>

                            <!-- City, State, Zip Code, Country Row -->
                            <div class="row mb-3">
                                <div class="col-6">
                                    <div class="position-relative">
                                        <input type="text" class="form-control" placeholder="{{ __('messages.city') }}" id="city">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="position-relative">
                                        <input type="text" class="form-control" placeholder="{{ __('messages.state') }}" id="state">
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-6">
                                    <div class="position-relative">
                                        <input type="text" class="form-control" placeholder="{{ __('messages.zip_code') }}" id="zipCode">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="position-relative">
                                        <input type="text" class="form-control" placeholder="{{ __('messages.country') }}" id="country">
                                    </div>
                                </div>
                            </div>

                            <!-- Street Address (Full Width) -->
                            <div class="mb-4">
                                <div class="position-relative">
                                    <input type="text" class="form-control" placeholder="{{ __('messages.street_address') }}" id="streetAddress">
                                </div>
                            </div>

                            <!-- Save and Next Button -->
                            <div class="d-flex justify-content-center gap-2 mb-4">
                                <a href="{{ route('login') }}" class="btn btn-primary text-white px-5 fs-6 text-decoration-none">{{ __('messages.save_and_next') }}</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
