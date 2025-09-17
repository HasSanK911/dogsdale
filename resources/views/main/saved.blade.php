@extends('main.layout')

@section('title', 'Saved - Dogsdale')

@section('content')
<div class="saved-page">
    <div class="container-fluid h-100">
        <div class="row h-100">
            <!-- Left Sidebar -->
            <div class="col-lg-3 col-md-4 saved-sidebar">
                <div class="back-section mb-3">
                    <a href="{{ route('home') }}" class="btn btn-primary text-white d-flex align-items-center justify-content-center">
                        <i class="bi bi-arrow-left me-2"></i>
                        Go back
                    </a>
                </div>
                <!-- Scrollable Content -->
                <div class="sidebar-content">
                    <div class="sidebar-panel">
                        <!-- Sidebar Title -->
                        <h5 class="fw-medium mb-3">Saved Posts</h5>
                        <!-- Search Box -->
                        <div class="search-section mb-3">
                            <div class="search-box">
                                <i class="bi bi-search search-icon"></i>
                                <input type="text" class="search-input" placeholder="Search saved posts...">
                            </div>
                        </div>
                        
                        <!-- Navigation Buttons (Top) -->
                        <div class="nav-buttons">
                            <button class="nav-btn active">
                                <i class="bi bi-heart-fill me-2"></i>
                                All Saved
                            </button>
                            <button class="nav-btn">
                                <i class="bi bi-bookmark me-2"></i>
                                Bookmarks
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Main Content -->
            <div class="col-lg-9 col-md-8 saved-main-content">
                <div class="saved-content-wrapper">
                    <!-- Saved Posts -->
                    <div class="saved-posts">
                        <!-- Professional Post Design -->
                        <div class="post-card bg-white rounded-3 p-4 mb-4">
                            <!-- Post Header -->
                            <div class="d-flex justify-content-between align-items-start mb-2">
                                <div class="d-flex align-items-center">
                                    <img src="{{ asset('dogs/eli.jpeg') }}" alt="Sarah Johnson" class="rounded-circle me-3" style="width: 50px; height: 50px; object-fit: cover;">
                                    <div class="d-flex flex-column">
                                        <a class="mb-0 fw-semibold text-dark text-decoration-none" href="">Sarah Johnson</a>
                                        <small class="text-muted">2 hours ago</small>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center">
                                    <!-- Post Options Dropdown -->
                                    <div class="dropdown post-options-dropdown">
                                        <button class="btn text-muted post-options-btn" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="fas fa-ellipsis-v"></i>
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-end post-options-menu">
                                            <li><a href="#" class="dropdown-item">
                                                <i class="bi bi-bookmark me-2"></i>Save
                                            </a></li>
                                            <li><a href="#" class="dropdown-item">
                                                <i class="bi bi-eye-slash me-2"></i>Hide
                                            </a></li>
                                            <li><a href="#" class="dropdown-item">
                                                <i class="bi bi-link-45deg me-2"></i>Copy Link
                                            </a></li>
                                            <li><hr class="dropdown-divider"></li>
                                            <li><a href="#" class="dropdown-item">
                                                <i class="bi bi-heart me-2"></i>Interested
                                            </a></li>
                                            <li><a href="#" class="dropdown-item">
                                                <i class="bi bi-heart-fill me-2"></i>Not Interested
                                            </a></li>
                                            <li><hr class="dropdown-divider"></li>
                                            <li><a href="#" class="dropdown-item">
                                                <i class="bi bi-clock me-2"></i>Snooze User for 30 Days
                                            </a></li>
                                            <li><a href="#" class="dropdown-item">
                                                <i class="bi bi-person-dash me-2"></i>Unfollow User
                                            </a></li>
                                            <li><hr class="dropdown-divider"></li>
                                            <li><a href="#" class="dropdown-item">
                                                <i class="bi bi-flag me-2"></i>Report
                                            </a></li>
                                            <li><a href="#" class="dropdown-item text-danger">
                                                <i class="bi bi-person-x me-2"></i>Block
                                            </a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <!-- Dog Info Grid -->
                            <div class="dog-info-grid mb-4">
                                <div class="row g-3">
                                    <div class="col-6 col-md-4">
                                        <div class="info-item">
                                            <i class="bi bi-person text-muted me-2"></i>
                                            <span class="fw-medium">Max</span>
                                        </div>
                                    </div>
                                    <div class="col-6 col-md-4">
                                        <div class="info-item">
                                            <i class="bi bi-tag text-muted me-2"></i>
                                            <span class="fw-medium">Golden Retriever</span>
                                        </div>
                                    </div>
                                    <div class="col-6 col-md-4">
                                        <div class="info-item">
                                            <i class="bi bi-calendar text-muted me-2"></i>
                                            <span class="fw-medium">2 Years</span>
                                        </div>
                                    </div>
                                    <div class="col-6 col-md-4">
                                        <div class="info-item">
                                            <i class="bi bi-currency-dollar text-muted me-2"></i>
                                            <span class="fw-medium">$2,500</span>
                                        </div>
                                    </div>
                                    <div class="col-6 col-md-4">
                                        <div class="info-item">
                                            <i class="bi bi-gender-male text-muted me-2"></i>
                                            <span class="fw-medium">Male</span>
                                        </div>
                                    </div>
                                    <div class="col-6 col-md-4">
                                        <div class="info-item">
                                            <i class="bi bi-check-circle text-muted me-2"></i>
                                            <span class="fw-medium">Available</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Image Carousel -->
                            <div class="image-carousel mb-4">
                                <div id="carousel1" class="carousel slide" data-bs-ride="carousel">
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <img src="{{ asset('dogs/dog1.png') }}" class="d-block w-100 rounded-3" alt="Dog Image" style="height: 400px; object-fit: cover;">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="{{ asset('dogs/dog2.png') }}" class="d-block w-100 rounded-3" alt="Dog Image" style="height: 400px; object-fit: cover;">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="{{ asset('dogs/dog3.png') }}" class="d-block w-100 rounded-3" alt="Dog Image" style="height: 400px; object-fit: cover;">
                                        </div>
                                    </div>
                                    <button class="carousel-control-prev" type="button" data-bs-target="#carousel1" data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Previous</span>
                                    </button>
                                    <button class="carousel-control-next" type="button" data-bs-target="#carousel1" data-bs-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Next</span>
                                    </button>
                                </div>
                            </div>

                            <!-- Description -->
                            <div class="post-description mb-4">
                                <div class="d-flex align-items-center mb-2">
                                    <i class="bi bi-text-left me-2 text-muted"></i>
                                    <small class="text-muted">Description</small>
                                </div>
                                <div class="description-content">
                                    <p class="text-muted mb-0 description-text-truncated" id="description-text-1">
                                        Amazing dog training session with my Golden Retriever! Watch how we work on basic commands and positive reinforcement techniques. Perfect for families looking for a loyal companion. All training methods are positive and reward-based.
                                    </p>
                                    <span class="text-primary read-more" style="cursor: pointer;" onclick="toggleDescription('description-text-1')">... Read More</span>
                                </div>
                            </div>

                            <!-- Post Footer -->
                            <div class="post-footer">
                                <!-- Interaction Icons -->
                                <div class="d-flex justify-content-between align-items-center mb-2">
                                    <div class="d-flex align-items-center">
                                        <button class="btn btn-link p-0 me-3 like-btn" data-post="1">
                                            <i class="bi bi-heart text-muted fs-5"></i>
                                        </button>
                                        <button class="btn btn-link p-0 me-3">
                                            <i class="bi bi-chat text-muted fs-5"></i>
                                        </button>
                                        <button class="btn btn-link p-0">
                                            <i class="bi bi-share text-muted fs-5"></i>
                                        </button>
                                    </div>
                                    <button class="btn btn-link p-0 bookmark-btn" data-post="1">
                                        <i class="bi bi-bookmark text-muted fs-5"></i>
                                    </button>
                                </div>

                                <!-- Engagement Stats -->
                                <div class="d-flex justify-content-between align-items-center mb-3">
                                    <span class="text-muted fw-semibold">89 likes</span>
                                    <span class="text-primary" style="cursor: pointer;" data-bs-toggle="modal" data-bs-target="#commentsModal">View all 12 comments</span>
                                </div>

                                <!-- Comment Input -->
                                <div class="d-flex align-items-center">
                                    <input type="text" class="form-control form-control-sm rounded-3 me-2" placeholder="Add a Comment" style="border: 1px solid #e0e0e0;">
                                    <button class="btn btn-primary rounded-3 text-white py-2 px-3">Post</button>
                                </div>
                            </div>
                        </div>

                        <!-- Saved Post 2 -->
                        <div class="post-card bg-white rounded-3 p-4 mb-4">
                            <!-- Post Header -->
                            <div class="d-flex justify-content-between align-items-start mb-2">
                                <div class="d-flex align-items-center">
                                    <img src="{{ asset('dogs/methodman.jpeg') }}" alt="Mike Chen" class="rounded-circle me-3" style="width: 50px; height: 50px; object-fit: cover;">
                                    <div class="d-flex flex-column">
                                        <a class="mb-0 fw-semibold text-dark text-decoration-none" href="">Mike Chen</a>
                                        <small class="text-muted">5 hours ago</small>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center">
                                    <!-- Post Options Dropdown -->
                                    <div class="dropdown post-options-dropdown">
                                        <button class="btn text-muted post-options-btn" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="fas fa-ellipsis-v"></i>
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-end post-options-menu">
                                            <li><a href="#" class="dropdown-item">
                                                <i class="bi bi-bookmark me-2"></i>Save
                                            </a></li>
                                            <li><a href="#" class="dropdown-item">
                                                <i class="bi bi-eye-slash me-2"></i>Hide
                                            </a></li>
                                            <li><a href="#" class="dropdown-item">
                                                <i class="bi bi-link-45deg me-2"></i>Copy Link
                                            </a></li>
                                            <li><hr class="dropdown-divider"></li>
                                            <li><a href="#" class="dropdown-item">
                                                <i class="bi bi-heart me-2"></i>Interested
                                            </a></li>
                                            <li><a href="#" class="dropdown-item">
                                                <i class="bi bi-heart-fill me-2"></i>Not Interested
                                            </a></li>
                                            <li><hr class="dropdown-divider"></li>
                                            <li><a href="#" class="dropdown-item">
                                                <i class="bi bi-clock me-2"></i>Snooze User for 30 Days
                                            </a></li>
                                            <li><a href="#" class="dropdown-item">
                                                <i class="bi bi-person-dash me-2"></i>Unfollow User
                                            </a></li>
                                            <li><hr class="dropdown-divider"></li>
                                            <li><a href="#" class="dropdown-item">
                                                <i class="bi bi-flag me-2"></i>Report
                                            </a></li>
                                            <li><a href="#" class="dropdown-item text-danger">
                                                <i class="bi bi-person-x me-2"></i>Block
                                            </a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <!-- Dog Info Grid -->
                            <div class="dog-info-grid mb-4">
                                <div class="row g-3">
                                    <div class="col-6 col-md-4">
                                        <div class="info-item">
                                            <i class="bi bi-person text-muted me-2"></i>
                                            <span class="fw-medium">Bella</span>
                                        </div>
                                    </div>
                                    <div class="col-6 col-md-4">
                                        <div class="info-item">
                                            <i class="bi bi-tag text-muted me-2"></i>
                                            <span class="fw-medium">Labrador</span>
                                        </div>
                                    </div>
                                    <div class="col-6 col-md-4">
                                        <div class="info-item">
                                            <i class="bi bi-calendar text-muted me-2"></i>
                                            <span class="fw-medium">3 Years</span>
                                        </div>
                                    </div>
                                    <div class="col-6 col-md-4">
                                        <div class="info-item">
                                            <i class="bi bi-currency-dollar text-muted me-2"></i>
                                            <span class="fw-medium">$1,800</span>
                                        </div>
                                    </div>
                                    <div class="col-6 col-md-4">
                                        <div class="info-item">
                                            <i class="bi bi-gender-female text-muted me-2"></i>
                                            <span class="fw-medium">Female</span>
                                        </div>
                                    </div>
                                    <div class="col-6 col-md-4">
                                        <div class="info-item">
                                            <i class="bi bi-check-circle text-muted me-2"></i>
                                            <span class="fw-medium">Available</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Image Carousel -->
                            <div class="image-carousel mb-4">
                                <div id="carousel2" class="carousel slide" data-bs-ride="carousel">
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <img src="{{ asset('dogs/dog4.png') }}" class="d-block w-100 rounded-3" alt="Dog Image" style="height: 400px; object-fit: cover;">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="{{ asset('dogs/dog5.png') }}" class="d-block w-100 rounded-3" alt="Dog Image" style="height: 400px; object-fit: cover;">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="{{ asset('dogs/dog6.png') }}" class="d-block w-100 rounded-3" alt="Dog Image" style="height: 400px; object-fit: cover;">
                                        </div>
                                    </div>
                                    <button class="carousel-control-prev" type="button" data-bs-target="#carousel2" data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Previous</span>
                                    </button>
                                    <button class="carousel-control-next" type="button" data-bs-target="#carousel2" data-bs-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Next</span>
                                    </button>
                                </div>
                            </div>

                            <!-- Description -->
                            <div class="post-description mb-4">
                                <div class="d-flex align-items-center mb-2">
                                    <i class="bi bi-text-left me-2 text-muted"></i>
                                    <small class="text-muted">Description</small>
                                </div>
                                <div class="description-content">
                                    <p class="text-muted mb-0 description-text-truncated" id="description-text-2">
                                        Beautiful Labrador with excellent temperament! Perfect family dog with all vaccinations up to date. Great with kids and other pets. House trained and well-behaved. Looking for a loving forever home!
                                    </p>
                                    <span class="text-primary read-more" style="cursor: pointer;" onclick="toggleDescription('description-text-2')">... Read More</span>
                                </div>
                            </div>

                            <!-- Post Footer -->
                            <div class="post-footer">
                                <!-- Interaction Icons -->
                                <div class="d-flex justify-content-between align-items-center mb-2">
                                    <div class="d-flex align-items-center">
                                        <button class="btn btn-link p-0 me-3 like-btn" data-post="2">
                                            <i class="bi bi-heart text-muted fs-5"></i>
                                        </button>
                                        <button class="btn btn-link p-0 me-3">
                                            <i class="bi bi-chat text-muted fs-5"></i>
                                        </button>
                                        <button class="btn btn-link p-0">
                                            <i class="bi bi-share text-muted fs-5"></i>
                                        </button>
                                    </div>
                                    <button class="btn btn-link p-0 bookmark-btn" data-post="2">
                                        <i class="bi bi-bookmark text-muted fs-5"></i>
                                    </button>
                                </div>

                                <!-- Engagement Stats -->
                                <div class="d-flex justify-content-between align-items-center mb-3">
                                    <span class="text-muted fw-semibold">156 likes</span>
                                    <span class="text-primary" style="cursor: pointer;" data-bs-toggle="modal" data-bs-target="#commentsModal">View all 23 comments</span>
                                </div>

                                <!-- Comment Input -->
                                <div class="d-flex align-items-center">
                                    <input type="text" class="form-control form-control-sm rounded-3 me-2" placeholder="Add a Comment" style="border: 1px solid #e0e0e0;">
                                    <button class="btn btn-primary rounded-3 text-white py-2 px-3">Post</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

<style>
/* Saved Page Styling */
.saved-page {
    min-height: 100vh;
    background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
    padding: 0;
    margin: 0;
}

/* Sidebar Styling */
.saved-sidebar {
    background: transparent;
    border-right: 1px solid rgba(0, 0, 0, 0.06);
    padding: 24px 20px;
    height: 100vh;
    display: flex;
    flex-direction: column;
}

.sidebar-content {
    flex: 1;
    overflow-y: auto;
    padding-bottom: 20px;
    margin-bottom: 20px;
}

.sidebar-panel {
    background: #ffffff;
    border: 1px solid #e9ecef;
    border-radius: 16px;
    padding: 16px;
    box-shadow: 0 10px 30px rgba(0,0,0,0.05);
}

/* Back Button */
.back-section {
    margin-bottom: 20px;
}

/* Navigation Buttons */
.nav-buttons {
    display: flex;
    flex-direction: column;
    gap: 10px;
}

.nav-btn {
    display: flex;
    align-items: center;
    padding: 12px 16px;
    background: #f8f9fb;
    border: 1px solid #eef0f2;
    border-radius: 12px;
    color: #2c3e50;
    text-decoration: none;
    transition: all 0.3s ease;
    font-weight: 500;
}

.nav-btn:hover {
    background: #00A8D1;
    color: white;
    border-color: #00A8D1;
    transform: translateX(3px);
}

.nav-btn i {
    font-size: 18px;
}

.nav-btn.active {
    background: #00A8D1;
    color: white;
    border-color: #00A8D1;
    box-shadow: 0 6px 18px rgba(0, 168, 209, 0.15);
}

/* Search Box */
.search-section {
    margin-bottom: 30px;
}

.search-box {
    position: relative;
    display: flex;
    align-items: center;
}

.search-icon {
    position: absolute;
    left: 12px;
    color: #6c757d;
    font-size: 16px;
    z-index: 2;
}

.search-input {
    width: 100%;
    padding: 12px 12px 12px 40px;
    border: 1px solid #e9ecef;
    border-radius: 12px;
    background: #f8f9fa;
    font-size: 14px;
    transition: all 0.3s ease;
}

.search-input:focus {
    outline: none;
    border-color: #00A8D1;
    background: white;
    box-shadow: 0 0 0 3px rgba(0, 168, 209, 0.1);
}

/* Main Content */
.saved-main-content {
    padding: 20px;
    height: 100vh;
    overflow-y: auto;
    padding-bottom: 40px;
}

.saved-main-content {
    scrollbar-width: none;
    -ms-overflow-style: none;
}

.saved-main-content::-webkit-scrollbar {
    display: none;
}

.saved-content-wrapper {
    width: 100%;
    max-width: 1000px;
    margin: 0 auto;
}

/* Saved Posts Styling */
.saved-posts {
    max-width: 700px;
    margin: 0 auto;
    padding-bottom: 20px;
}

.post-card {
    transition: all 0.3s ease;
    border: 1px solid #e9ecef !important;
}

.post-card:hover {
    transform: translateY(-2px);
    box-shadow: 0 8px 25px rgba(0, 0, 0, 0.1) !important;
}

/* Dog Info Grid */
.dog-info-grid {
    background: transparent;
    padding: 0;
}

.info-item {
    display: flex;
    align-items: center;
    padding: 8px 12px;
    background: #f8f9fa;
    border-radius: 8px;
    border: 1px solid #e9ecef;
    transition: all 0.3s ease;
}

.info-item:hover {
    background: #e9ecef;
    transform: translateY(-1px);
}

.info-item i {
    font-size: 16px;
    width: 20px;
    text-align: center;
}

.info-item span {
    font-size: 14px;
    color: #495057;
}

/* Description Styling */
.description-text-truncated {
    display: -webkit-box;
    -webkit-line-clamp: 3;
    -webkit-box-orient: vertical;
    overflow: hidden;
    line-height: 1.5;
}

.description-text-full {
    display: block;
    line-height: 1.5;
}

.read-more {
    font-size: 14px;
    font-weight: 500;
    transition: all 0.3s ease;
}

.read-more:hover {
    color: #007EA1 !important;
}

/* Post Options Dropdown */
.post-options-dropdown {
    position: relative;
}

.post-options-btn {
    background: none;
    border: none;
    padding: 8px;
    border-radius: 50%;
    transition: all 0.3s ease;
}

.post-options-btn:hover {
    background: #f8f9fa;
}

.post-options-btn::after {
    display: none;
}

.post-options-menu {
    min-width: 200px;
    border: none;
    border-radius: 12px;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.15);
    padding: 8px 0;
    margin-top: 8px;
}

.post-options-menu .dropdown-item {
    padding: 10px 16px;
    font-size: 14px;
    color: #495057;
    transition: all 0.3s ease;
    display: flex;
    align-items: center;
}

.post-options-menu .dropdown-item:hover {
    background: #f8f9fa;
    color: #00A8D1;
}

.post-options-menu .dropdown-item i {
    width: 20px;
    text-align: center;
}

.post-options-menu .dropdown-divider {
    margin: 8px 0;
    border-color: #e9ecef;
}

.post-options-menu .dropdown-item.text-danger {
    color: #e74c3c !important;
}

.post-options-menu .dropdown-item.text-danger:hover {
    background: rgba(231, 76, 60, 0.1);
    color: #c0392b !important;
}

/* Responsive Design */
@media (max-width: 768px) {
    .saved-sidebar {
        padding: 15px;
    }
    
    .saved-main-content {
        padding: 15px;
        padding-bottom: 40px;
    }
    
    .post-card {
        padding: 20px !important;
    }
}

@media (max-width: 576px) {
    .saved-main-content {
        padding: 10px;
        padding-bottom: 40px;
    }
    
    .saved-sidebar {
        padding: 10px;
    }
    
    .sidebar-panel {
        padding: 12px;
    }
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Like/Bookmark functionality
    const likeButtons = document.querySelectorAll('.like-btn');
    const bookmarkButtons = document.querySelectorAll('.bookmark-btn');
    
    likeButtons.forEach(button => {
        button.addEventListener('click', function() {
            const icon = this.querySelector('i');
            if (icon.classList.contains('bi-heart')) {
                icon.classList.remove('bi-heart');
                icon.classList.add('bi-heart-fill');
                icon.style.color = '#e74c3c';
            } else {
                icon.classList.remove('bi-heart-fill');
                icon.classList.add('bi-heart');
                icon.style.color = '#6c757d';
            }
        });
    });
    
    bookmarkButtons.forEach(button => {
        button.addEventListener('click', function() {
            const icon = this.querySelector('i');
            if (icon.classList.contains('bi-bookmark')) {
                icon.classList.remove('bi-bookmark');
                icon.classList.add('bi-bookmark-fill');
                icon.style.color = '#00A8D1';
            } else {
                icon.classList.remove('bi-bookmark-fill');
                icon.classList.add('bi-bookmark');
                icon.style.color = '#6c757d';
            }
        });
    });
    
    // Post options dropdown
    const postOptionsButtons = document.querySelectorAll('.post-options-btn');
    const postOptionsMenus = document.querySelectorAll('.post-options-menu');
    
    postOptionsButtons.forEach((button, index) => {
        button.addEventListener('click', function(e) {
            e.preventDefault();
            e.stopPropagation();
            
            // Close all other dropdowns
            postOptionsMenus.forEach((menu, menuIndex) => {
                if (menuIndex !== index) {
                    menu.classList.remove('show');
                }
            });
            
            // Toggle current dropdown
            const currentMenu = postOptionsMenus[index];
            currentMenu.classList.toggle('show');
        });
    });
    
    // Close dropdowns when clicking outside
    document.addEventListener('click', function(e) {
        if (!e.target.closest('.post-options-dropdown')) {
            postOptionsMenus.forEach(menu => {
                menu.classList.remove('show');
            });
        }
    });
    
    // Search functionality
    const searchInput = document.querySelector('.search-input');
    if (searchInput) {
        searchInput.addEventListener('input', function() {
            const searchTerm = this.value.toLowerCase();
            const posts = document.querySelectorAll('.post-card');
            
            posts.forEach(post => {
                const postText = post.textContent.toLowerCase();
                if (postText.includes(searchTerm)) {
                    post.style.display = 'block';
                } else {
                    post.style.display = 'none';
                }
            });
        });
    }
});

// Read more functionality
function toggleDescription(id = 'description-text-1') {
    const descriptionText = document.getElementById(id);
    const readMoreBtn = descriptionText.nextElementSibling;
    
    if (descriptionText.classList.contains('description-text-truncated')) {
        // Show full description
        descriptionText.classList.remove('description-text-truncated');
        descriptionText.classList.add('description-text-full');
        readMoreBtn.textContent = '... Read Less';
    } else {
        // Show truncated description
        descriptionText.classList.remove('description-text-full');
        descriptionText.classList.add('description-text-truncated');
        readMoreBtn.textContent = '... Read More';
    }
}
</script>
