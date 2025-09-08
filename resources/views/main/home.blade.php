@extends('main.layout')

@section('title', 'Home - Dogifier')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-3">
                @include('partials.home-leftsidebar')
            </div>
            <div class="col-xl-6">
                <div class="main-content-area">
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
                    </div>
                </div>
            </div>
            <div class="col-xl-3">
                @include('partials.home-rightsidebar')
            </div>
        </div>
    </div>
@endsection
