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
                    <!-- Add your main content here -->
                </div>
            </div>
            <div class="col-xl-3">
                @include('partials.home-rightsidebar')
            </div>
        </div>
    </div>
@endsection
