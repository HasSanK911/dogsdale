@extends('main.layout')

@section('title', 'Home - Dogifier')

@section('content')
    <div class="container-fluid h-100 d-flex flex-column pt-3">
        <div class="row flex-grow-1 h-100">
            <div class="col-xl-3 d-flex flex-column h-100">
                <div class="flex-grow-1 overflow-y-auto">
                    @include('partials.home-leftsidebar')
                </div>
            </div>
            <div class="col-xl-6 d-flex flex-column h-100">
                <div class="flex-grow-1 overflow-y-auto">
                    <div class="main-content-area p-3">
                        <h2>{{ __('messages.welcome_to_dogifier') }}</h2>
                        <p>{{ __('messages.comprehensive_dog_platform') }}</p>
                        
                        <!-- Test app.scss styles -->
                        <div class="mt-4">
                            <h4 class="primary-color">Testing App.scss Styles</h4>
                            <p class="secondary-color">This text should be orange if app.scss is working</p>
                            
                            <div class="mt-3">
                                <input type="text" class="form-control" placeholder="Test form control styling" style="max-width: 300px;">
                            </div>
                            
                            <div class="mt-3">
                                <div class="input-group" style="max-width: 300px;">
                                    <span class="input-group-text">@</span>
                                    <input type="email" class="form-control" placeholder="Test input group">
                                </div>
                            </div>
                            
                        <div class="mt-3">
                            <input type="text" class="otp-input" placeholder="0" style="margin-right: 10px;">
                            <input type="text" class="otp-input" placeholder="0" style="margin-right: 10px;">
                            <input type="text" class="otp-input" placeholder="0" style="margin-right: 10px;">
                            <input type="text" class="otp-input" placeholder="0">
                        </div>
                        
                        <!-- Test content to make main area scrollable -->
                        <div class="mt-5">
                            <h5>Test Content for Scrolling</h5>
                            <p>This content is added to test independent scrolling in the main column.</p>
                            <div class="mb-3">
                                <div class="card">
                                    <div class="card-body">
                                        <h6 class="card-title">Card 1</h6>
                                        <p class="card-text">This is test content to make the main column scrollable.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <div class="card">
                                    <div class="card-body">
                                        <h6 class="card-title">Card 2</h6>
                                        <p class="card-text">More test content to ensure scrolling works properly.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <div class="card">
                                    <div class="card-body">
                                        <h6 class="card-title">Card 3</h6>
                                        <p class="card-text">Additional content to test the scrolling functionality.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <div class="card">
                                    <div class="card-body">
                                        <h6 class="card-title">Card 4</h6>
                                        <p class="card-text">More content to ensure the main column is scrollable.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <div class="card">
                                    <div class="card-body">
                                        <h6 class="card-title">Card 5</h6>
                                        <p class="card-text">Final test content to verify independent scrolling.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 d-flex flex-column h-100">
                <div class="flex-grow-1 overflow-y-auto">
                    @include('partials.home-rightsidebar')
                </div>
            </div>
        </div>
    </div>
@endsection
