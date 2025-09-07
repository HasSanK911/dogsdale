<div class="">
    <div class="bg-white rounded-3 p-2 mb-3 w-100" >
        <div class="d-flex flex-column align-items-center justify-content-center my-3">
             <img src="{{asset('dogs/wendell.jpg')}}" class="rounded-circle" alt="profile_img" width="80px" height="80px">
             <a href="" class="text-decoration-none text-dark ms-3 mt-3 fw-semibold fs-4">{{ __('messages.profile_name') }}</a>
        </div>
         <div class="sidebar-nav d-flex flex-column justify-content-center my-3">
             <a href="{{ route('home') }}" class="text-decoration-none text-dark fw-normal fs-5 rounded-3 d-flex align-items-center px-2">
                 <i class="fas fa-home me-3"></i>{{ __('messages.home') }}
             </a>
             <a href="" class="text-decoration-none text-dark fw-normal fs-5 rounded-3 d-flex align-items-center px-2">
                 <i class="fas fa-book-open me-3"></i>{{ __('messages.stories') }}
             </a>
             <a href="" class="text-decoration-none text-dark fw-normal fs-5 rounded-3 d-flex align-items-center px-2">
                 <i class="fas fa-video me-3"></i>{{ __('messages.videos') }}
             </a>
             <a href="" class="text-decoration-none text-dark fw-normal fs-5 rounded-3 d-flex align-items-center px-2">
                 <i class="fas fa-comments me-3"></i>{{ __('messages.forum') }}
             </a>
             <a href="" class="text-decoration-none text-dark fw-normal fs-5 rounded-3 d-flex align-items-center px-2">
                 <i class="fas fa-dog me-3"></i>{{ __('messages.create_kennel') }}
             </a>
             <a href="" class="text-decoration-none text-dark fw-normal fs-5 rounded-3 d-flex align-items-center px-2">
                 <i class="fas fa-bullhorn me-3"></i>{{ __('messages.litter_announcements') }}
             </a>
         </div>
    </div>
</div>

<style>
    .sidebar-nav a {
        height: 50px;
        transition: all 0.3s ease;
    }
    .sidebar-nav a:hover {
        background-color: #00A8D1;
        color: white !important;
        transform: translateX(5px);
    }
    .sidebar-nav a i {
        width: 20px;
        text-align: center;
    }
    .profile-name {
        font-family: 'Outfit', -apple-system, BlinkMacSystemFont, sans-serif;
    }
</style>