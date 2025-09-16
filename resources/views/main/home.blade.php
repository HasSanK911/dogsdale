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
                        @include('home.main-content')
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

<style>
/* Ensure proper layout and scrolling for all columns */
html, body {
    height: 100% !important;
    overflow: hidden; /* Prevent body scroll */
}

.container-fluid.h-100 {
    height: calc(100vh - 90px) !important;
    overflow: hidden;
}

.row.flex-grow-1 {
    height: 100% !important;
    min-height: 0 !important;
}

.col-lg-3, .col-lg-6 {
    height: 100% !important;
    min-height: 0 !important;
}

.flex-grow-1 {
    height: 100% !important;
    min-height: 0 !important;
    overflow-y: auto !important;
}

/* Hide scrollbars but keep functionality */
.overflow-y-auto {
    scrollbar-width: none; /* Firefox */
    -ms-overflow-style: none; /* Internet Explorer 10+ */
}

.overflow-y-auto::-webkit-scrollbar {
    display: none; /* WebKit */
}
</style>
