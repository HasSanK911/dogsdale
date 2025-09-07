@extends('main.layout')

@section('title', 'My Dogs - Dogifier')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1 class="h3 mb-4">{{ __('messages.my_dogs') }}</h1>
        </div>
    </div>
    
    <div class="row">
        <div class="col-md-8">
            <div class="card border-0 shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">{{ __('messages.dog_management') }}</h5>
                    <p class="text-muted">{{ __('messages.manage_dogs_info') }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
