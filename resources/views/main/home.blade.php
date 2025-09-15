@extends('main.layout')

@section('title', 'Home - Dogifier')

@section('content')
    <div class="container-fluid h-100 d-flex flex-column pt-3">
        <div class="row flex-grow-1 h-100">
            <div class="col-lg-3 flex-column h-100 d-none d-lg-flex">
                <div class="flex-grow-1 overflow-y-auto">
                    @include('home.home-leftsidebar')
                </div>
            </div>
            <div class="col-lg-6 flex-column h-100">
                <div class="flex-grow-1 overflow-y-auto">
                    <div class="h-100">
                        @include('home.posts')
                        @include('home.discover-people')
                        @include('home.explore-kennels')
                    </div>
                </div>
            </div>
            <div class="col-lg-3 flex-column h-100 d-none d-lg-flex">
                <div class="flex-grow-1 overflow-y-auto">
                    @include('home.home-rightsidebar')
                </div>
            </div>
        </div>
    </div>
@endsection
