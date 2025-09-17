@extends('main.layout')

@section('title', 'Videos - Dogsdale')

@section('content')
<div class="videos-page">
    <div class="container-fluid h-100">
        <div class="row h-100">
            <!-- Left Sidebar -->
            <div class="col-lg-3 col-md-4 videos-sidebar">
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
                        <h5 class="fw-medium mb-3">Videos</h5>
                        <!-- Search Box -->
                        <div class="search-section mb-3">
                            <div class="search-box">
                                <i class="bi bi-search search-icon"></i>
                                <input type="text" class="search-input" placeholder="Search videos...">
                            </div>
                        </div>
                        <!-- Back Button -->
                        
                        
                        <!-- Navigation Buttons (Top) -->
                        <div class="nav-buttons">
                            <button class="nav-btn active">
                                <i class="bi bi-play-circle me-2"></i>
                                For You
                            </button>
                            <button class="nav-btn">
                                <i class="bi bi-bookmark me-2"></i>
                                Saved Videos
                            </button>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Main Content -->
            <div class="col-lg-9 col-md-8 videos-main-content">
                <div class="videos-content-wrapper">

                    <!-- Video Posts -->
                    <div class="video-posts">
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

                            <!-- Video Content (replacing image carousel) -->
                            <div class="video-content mb-4">
                                <video class="w-100 rounded-3" controls style="height: 400px; object-fit: cover;">
                                    <source src="{{ asset('dogs/WhatsApp Video 2024-04-06 at 20.02.18_6c944d1b.mp4') }}" type="video/mp4">
                                </video>
                            </div>

                            <!-- Description -->
                            <div class="post-description mb-4">
                                <div class="d-flex align-items-center mb-2">
                                    <i class="bi bi-text-left me-2 text-muted"></i>
                                    <small class="text-muted">Description</small>
                                </div>
                                <div class="description-content">
                                    <p class="text-muted mb-0 description-text-truncated" id="description-text">
                                        Amazing dog training session with my Golden Retriever! Watch how we work on basic commands and positive reinforcement techniques. Perfect for families looking for a loyal companion. All training methods are positive and reward-based.
                                    </p>
                                    <span class="text-primary read-more" style="cursor: pointer;" onclick="toggleDescription()">... Read More</span>
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

                        <!-- Video Post 2 -->
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

                            <!-- Video Content -->
                            <div class="video-content mb-4">
                                <video class="w-100 rounded-3" controls style="height: 400px; object-fit: cover;">
                                    <source src="{{ asset('dogs/WhatsApp Video 2024-04-06 at 20.02.18_6c944d1b.mp4') }}" type="video/mp4">
                                </video>
                            </div>

                            <!-- Description -->
                            <div class="post-description mb-4">
                                <div class="d-flex align-items-center mb-2">
                                    <i class="bi bi-text-left me-2 text-muted"></i>
                                    <small class="text-muted">Description</small>
                                </div>
                                <div class="description-content">
                                    <p class="text-muted mb-0 description-text-truncated" id="description-text-2">
                                        This compilation of funny dog moments will make your day! Dogs are truly the best comedians. Perfect entertainment for the whole family. #FunnyDogs #DogComedy #HappyDogs
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
                                    <span class="text-muted fw-semibold">234 likes</span>
                                    <span class="text-primary" style="cursor: pointer;" data-bs-toggle="modal" data-bs-target="#commentsModal">View all 28 comments</span>
                                </div>

                                <!-- Comment Input -->
                                <div class="d-flex align-items-center">
                                    <input type="text" class="form-control form-control-sm rounded-3 me-2" placeholder="Add a Comment" style="border: 1px solid #e0e0e0;">
                                    <button class="btn btn-primary rounded-3 text-white py-2 px-3">Post</button>
                                </div>
                            </div>
                        </div>

                        <!-- Video Post 3 -->
                        <div class="post-card bg-white rounded-3 p-4 mb-4">
                            <!-- Post Header -->
                            <div class="d-flex justify-content-between align-items-start mb-2">
                                <div class="d-flex align-items-center">
                                    <img src="{{ asset('dogs/redboy.jpeg') }}" alt="Emma Wilson" class="rounded-circle me-3" style="width: 50px; height: 50px; object-fit: cover;">
                                    <div class="d-flex flex-column">
                                        <a class="mb-0 fw-semibold text-dark text-decoration-none" href="">Emma Wilson</a>
                                        <small class="text-muted">1 day ago</small>
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

                            <!-- Video Content -->
                            <div class="video-content mb-4">
                                <video class="w-100 rounded-3" controls style="height: 400px; object-fit: cover;">
                                    <source src="{{ asset('dogs/WhatsApp Video 2024-04-06 at 20.02.18_6c944d1b.mp4') }}" type="video/mp4">
                                </video>
                            </div>

                            <!-- Description -->
                            <div class="post-description mb-4">
                                <div class="d-flex align-items-center mb-2">
                                    <i class="bi bi-text-left me-2 text-muted"></i>
                                    <small class="text-muted">Description</small>
                                </div>
                                <div class="description-content">
                                    <p class="text-muted mb-0 description-text-truncated" id="description-text-3">
                                        Incredible agility competition performance! The Border Collie absolutely crushed this course. The dedication and training really pays off! #DogAgility #BorderCollie #Competition
                                    </p>
                                    <span class="text-primary read-more" style="cursor: pointer;" onclick="toggleDescription('description-text-3')">... Read More</span>
                                </div>
                            </div>

                            <!-- Post Footer -->
                            <div class="post-footer">
                                <!-- Interaction Icons -->
                                <div class="d-flex justify-content-between align-items-center mb-2">
                                    <div class="d-flex align-items-center">
                                        <button class="btn btn-link p-0 me-3 like-btn" data-post="3">
                                            <i class="bi bi-heart text-muted fs-5"></i>
                                        </button>
                                        <button class="btn btn-link p-0 me-3">
                                            <i class="bi bi-chat text-muted fs-5"></i>
                                        </button>
                                        <button class="btn btn-link p-0">
                                            <i class="bi bi-share text-muted fs-5"></i>
                                        </button>
                                    </div>
                                    <button class="btn btn-link p-0 bookmark-btn" data-post="3">
                                        <i class="bi bi-bookmark text-muted fs-5"></i>
                                    </button>
                                </div>

                                <!-- Engagement Stats -->
                                <div class="d-flex justify-content-between align-items-center mb-3">
                                    <span class="text-muted fw-semibold">67 likes</span>
                                    <span class="text-primary" style="cursor: pointer;" data-bs-toggle="modal" data-bs-target="#commentsModal">View all 8 comments</span>
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

<style>
/* Videos Page Styling */
.videos-page {
    min-height: 100vh;
    background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
    padding: 0;
    margin: 0;
}

/* Sidebar Styling */
.videos-sidebar {
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
    width: 100%;
}

.search-icon {
    position: absolute;
    left: 15px;
    top: 50%;
    transform: translateY(-50%);
    color: #6c757d;
    font-size: 16px;
}

.search-input {
    width: 100%;
    padding: 12px 15px 12px 45px;
    border: 1px solid #e9ecef;
    border-radius: 12px;
    background: white;
    font-size: 14px;
    transition: all 0.3s ease;
}

.search-input:focus {
    outline: none;
    border-color: #00A8D1;
    box-shadow: 0 0 0 3px rgba(0, 168, 209, 0.1);
}


/* Main Content */
.videos-main-content {
    padding: 20px;
    height: 100vh;
    overflow-y: auto;
    padding-bottom: 40px; /* Extra padding for last post */
}

/* Hide scrollbars but keep functionality */
.videos-main-content {
    scrollbar-width: none; /* Firefox */
    -ms-overflow-style: none; /* Internet Explorer 10+ */
}

.videos-main-content::-webkit-scrollbar {
    display: none; /* WebKit */
}

.videos-content-wrapper {
    width: 100%;
    max-width: 1000px;
    margin: 0 auto;
}

/* Back Button */
.back-section {
    margin-bottom: 20px;
}

.back-btn {
    display: flex;
    align-items: center;
    padding: 8px 12px;
    background: transparent;
    border: 1px solid #e9ecef;
    border-radius: 8px;
    color: #6c757d;
    text-decoration: none;
    font-size: 14px;
    font-weight: 500;
    transition: all 0.3s ease;
}

.back-btn:hover {
    background: #f8f9fa;
    color: #00A8D1;
    border-color: #00A8D1;
    text-decoration: none;
}

.back-btn i {
    font-size: 16px;
}

/* Video Posts Styling */
.video-posts {
    max-width: 700px;
    margin: 0 auto;
    padding-bottom: 20px; /* Extra padding for last post */
}

/* Hide legacy video post cards to avoid duplicate designs */
/* Professional and clean styling from display-posts */
.display-posts-section {
    max-width: 100%;
}

.post-card {
    transition: box-shadow 0.2s ease-in-out;
}

/* Interactive elements */
.like-btn:hover i,
.bookmark-btn:hover i {
    transform: scale(1.1);
    transition: transform 0.2s ease-in-out;
}

.like-btn.liked i {
    color: #dc3545 !important;
}

.bookmark-btn.bookmarked i {
    color: #00A8D1 !important;
}

/* Description functionality */
.description-content {
    position: relative;
}

.description-text-truncated {
    display: -webkit-box;
    -webkit-line-clamp: 3;
    -webkit-box-orient: vertical;
    overflow: hidden;
}

.description-text-full {
    display: block;
}

.read-more {
    transition: color 0.2s ease-in-out;
    cursor: pointer;
}

.read-more:hover {
    color: #00A8D1 !important;
}

/* Post Options Dropdown */
.post-options-dropdown {
    position: relative;
}

.post-options-menu {
    min-width: 200px;
    border: 1px solid #e9ecef;
    border-radius: 12px;
    box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
    padding: 8px 0;
    margin-top: 8px;
    display: none;
    position: absolute;
    top: 100%;
    right: 0;
    z-index: 1000;
    background: white;
}

.post-options-menu.show {
    display: block !important;
}

.post-options-menu .dropdown-item {
    padding: 10px 16px;
    font-size: 14px;
    font-weight: 500;
    color: #495057;
    transition: all 0.2s ease;
    display: flex;
    align-items: center;
}

.post-options-menu .dropdown-item:hover {
    background: #f8f9fa;
    color: #00A8D1;
    transform: translateX(2px);
}

.post-options-menu .dropdown-item i {
    width: 16px;
    height: 16px;
    font-size: 16px;
}

.post-options-menu .dropdown-divider {
    margin: 6px 0;
    border-color: #e9ecef;
}

.post-options-menu .dropdown-item.text-warning {
    color: #f39c12 !important;
}

.post-options-menu .dropdown-item.text-warning:hover {
    background: rgba(243, 156, 18, 0.1);
    color: #e67e22 !important;
}

.post-options-menu .dropdown-item.text-danger {
    color: #e74c3c !important;
}

.post-options-menu .dropdown-item.text-danger:hover {
    background: rgba(231, 76, 60, 0.1);
    color: #c0392b !important;
}

/* Comments Modal Styling */
.comments-modal,
.image-modal {
    border: none;
    border-radius: 20px;
    box-shadow: 0 25px 50px rgba(0, 0, 0, 0.15);
    overflow: hidden;
}

.comments-modal-header,
.image-modal-header {
    background: linear-gradient(135deg, #00A8D1 0%, #764ba2 100%);
    border: none;
    padding: 20px 30px;
    color: white;
}

.comments-modal-header .modal-title,
.comments-modal-header small,
.image-modal-header .modal-title,
.image-modal-header small {
    color: white !important;
}

.comments-icon {
    width: 50px;
    height: 50px;
    background: rgba(255, 255, 255, 0.2);
    border-radius: 15px;
    display: flex;
    align-items: center;
    justify-content: center;
    backdrop-filter: blur(10px);
}

.comments-icon i {
    font-size: 24px;
    color: white;
}

.comments-modal-body {
    padding: 30px;
    background: #f8f9fa;
    max-height: 60vh;
    overflow-y: auto;
}

.comments-modal-footer {
    background: white;
    border: none;
    padding: 20px 30px;
    border-top: 1px solid #e9ecef;
}

/* Comment Items */
.comment-item {
    background: white;
    border-radius: 15px;
    padding: 20px;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
    border: 1px solid #f0f0f0;
    transition: all 0.3s ease;
}

.comment-item:hover {
    box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
    transform: translateY(-2px);
}

.comment-avatar {
    position: relative;
    margin-right: 15px;
}

.comment-avatar img {
    width: 50px;
    height: 50px;
    object-fit: cover;
    border: 3px solid #fff;
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
}

.online-indicator {
    position: absolute;
    bottom: 2px;
    right: 2px;
    width: 12px;
    height: 12px;
    background: #28a745;
    border: 2px solid white;
    border-radius: 50%;
}

.comment-content {
    flex: 1;
}

.comment-header {
    margin-bottom: 10px;
}

.comment-author {
    font-weight: 600;
    color: #2c3e50;
    font-size: 16px;
}

.verified-badge {
    color: #1da1f2;
    font-size: 16px;
}

.comment-meta {
    display: flex;
    align-items: center;
    gap: 15px;
    margin-top: 5px;
}

.comment-time {
    color: #6c757d;
    font-size: 13px;
}

.comment-likes {
    color: #e74c3c;
    font-size: 13px;
    font-weight: 500;
}

.comment-text {
    margin-bottom: 15px;
}

.comment-text p {
    color: #495057;
    line-height: 1.6;
    font-size: 15px;
}

.comment-actions {
    display: flex;
    gap: 20px;
    padding-top: 10px;
    border-top: 1px solid #f0f0f0;
}

.action-btn {
    background: none;
    border: none;
    color: #6c757d;
    font-size: 14px;
    font-weight: 500;
    padding: 8px 12px;
    border-radius: 8px;
    transition: all 0.3s ease;
    display: flex;
    align-items: center;
    gap: 6px;
}

.action-btn:hover {
    background: #f8f9fa;
    color: #495057;
    transform: translateY(-1px);
}

.action-btn.small {
    font-size: 12px;
    padding: 6px 10px;
}

.like-btn:hover {
    color: #e74c3c !important;
    background: rgba(231, 76, 60, 0.1);
}

/* Reply Styling */
.replies-section {
    margin-top: 20px;
    padding-left: 20px;
    border-left: 3px solid #e9ecef;
    position: relative;
}

.replies-section::before {
    content: '';
    position: absolute;
    left: -6px;
    top: 0;
    width: 12px;
    height: 12px;
    background: #e9ecef;
    border-radius: 50%;
}

.reply-item {
    background: #f8f9fa;
    border-radius: 12px;
    padding: 15px;
    margin-bottom: 10px;
    border: 1px solid #e9ecef;
    transition: all 0.3s ease;
}

.reply-item:hover {
    background: #fff;
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.05);
}

.reply-avatar img {
    width: 35px;
    height: 35px;
    object-fit: cover;
    border: 2px solid #fff;
    box-shadow: 0 1px 4px rgba(0, 0, 0, 0.1);
}

.reply-author {
    font-weight: 600;
    color: #2c3e50;
    font-size: 14px;
}

.reply-meta {
    display: flex;
    align-items: center;
    gap: 10px;
    margin-top: 3px;
}

.reply-time {
    color: #6c757d;
    font-size: 12px;
}

.reply-likes {
    color: #e74c3c;
    font-size: 12px;
    font-weight: 500;
}

.reply-text p {
    color: #495057;
    line-height: 1.5;
    font-size: 14px;
    margin-top: 8px;
}

.reply-actions {
    display: flex;
    gap: 15px;
    margin-top: 10px;
    padding-top: 8px;
    border-top: 1px solid #e9ecef;
}

/* Comment Input Styling */
.input-wrapper {
    background: #f8f9fa;
    border-radius: 15px;
    padding: 15px;
    border: 2px solid #e9ecef;
    transition: all 0.3s ease;
}

.input-wrapper:focus-within {
    border-color: #00A8D1;
    box-shadow: 0 0 0 3px rgba(102, 126, 234, 0.1);
}

.comment-textarea {
    border: none;
    background: transparent;
    resize: none;
    font-size: 15px;
    line-height: 1.5;
    padding: 0;
    margin-bottom: 15px;
}

.comment-textarea:focus {
    box-shadow: none;
    outline: none;
}

.input-actions {
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.attachment-buttons {
    display: flex;
    gap: 10px;
}

.attachment-btn {
    width: 40px;
    height: 40px;
    border: none;
    background: #e9ecef;
    border-radius: 10px;
    color: #6c757d;
    font-size: 16px;
    transition: all 0.3s ease;
    display: flex;
    align-items: center;
    justify-content: center;
}

.attachment-btn:hover {
    background: #00A8D1;
    color: white;
    transform: translateY(-2px);
}

.post-btn {
    background: linear-gradient(135deg, #00A8D1 0%, #764ba2 100%);
    border: none;
    border-radius: 10px;
    padding: 10px 20px;
    font-weight: 600;
    display: flex;
    align-items: center;
    gap: 8px;
    transition: all 0.3s ease;
}

.post-btn:hover {
    transform: translateY(-2px);
    box-shadow: 0 5px 15px rgba(102, 126, 234, 0.4);
}

/* Media Preview */
.media-preview {
    margin-top: 15px;
}

.preview-container {
    background: #f8f9fa;
    border-radius: 12px;
    padding: 15px;
    border: 1px solid #e9ecef;
    display: flex;
    align-items: center;
    gap: 15px;
}

.preview-media img,
.preview-media video {
    width: 60px;
    height: 60px;
    object-fit: cover;
    border-radius: 8px;
}

.preview-info {
    flex: 1;
}

.preview-text {
    color: #6c757d;
    font-size: 13px;
}

.remove-media-btn {
    background: #dc3545;
    border: none;
    color: white;
    width: 30px;
    height: 30px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    transition: all 0.3s ease;
}

.remove-media-btn:hover {
    background: #c82333;
    transform: scale(1.1);
}

.video-post-card {
    transition: all 0.3s ease;
    border: 1px solid #e9ecef !important;
}

.video-post-card:hover {
    transform: translateY(-2px);
    box-shadow: 0 8px 25px rgba(0, 0, 0, 0.1) !important;
}

.post-header {
    background: white;
}

.post-header h6 {
    color: #2c3e50;
    font-weight: 600;
}

.video-content {
    position: relative;
    overflow: hidden;
}

.video-content video {
    transition: transform 0.3s ease;
}

.video-post-card:hover .video-content video {
    transform: scale(1.02);
}

.play-button {
    opacity: 0.9;
    transition: all 0.3s ease;
    cursor: pointer;
}

.video-post-card:hover .play-button {
    opacity: 1;
    transform: scale(1.1);
}

.post-actions {
    background: white;
}

.post-actions .btn-link {
    color: #6c757d;
    font-weight: 500;
    transition: all 0.3s ease;
}

.post-actions .btn-link:hover {
    color: #00A8D1;
    transform: translateY(-1px);
}

.like-btn.liked {
    color: #dc3545 !important;
}

.like-btn.liked i {
    color: #dc3545 !important;
}

.bookmark-btn.bookmarked {
    color: #00A8D1 !important;
}

.bookmark-btn.bookmarked i {
    color: #00A8D1 !important;
}

.post-caption {
    background: white;
}

.post-caption p {
    color: #495057;
    line-height: 1.5;
}

.post-caption strong {
    color: #2c3e50;
}

/* Post Options Dropdown */
.post-options-dropdown {
    position: relative;
}

.post-options-btn {
    border: none !important;
    background: none !important;
    padding: 4px 8px !important;
    border-radius: 6px !important;
    transition: all 0.2s ease !important;
    box-shadow: none !important;
}

.post-options-btn:hover {
    background: rgba(0, 0, 0, 0.05) !important;
    color: #495057 !important;
}

.post-options-btn:focus {
    box-shadow: none !important;
    outline: none !important;
}

.post-options-btn::after {
    display: none !important;
}

.post-options-menu {
    min-width: 200px;
    border: 1px solid #e9ecef;
    border-radius: 12px;
    box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
    padding: 8px 0;
    margin-top: 8px;
    display: none;
    position: absolute;
    top: 100%;
    right: 0;
    z-index: 1000;
    background: white;
}

.post-options-menu.show {
    display: block !important;
}

.post-options-menu .dropdown-item {
    padding: 10px 16px;
    font-size: 14px;
    font-weight: 500;
    color: #495057;
    transition: all 0.2s ease;
    display: flex;
    align-items: center;
}

.post-options-menu .dropdown-item:hover {
    background: #f8f9fa;
    color: #00A8D1;
    transform: translateX(2px);
}

.post-options-menu .dropdown-item i {
    width: 16px;
    height: 16px;
    font-size: 16px;
}

.post-options-menu .dropdown-divider {
    margin: 8px 0;
    border-color: #e9ecef;
}

/* Comments modal styling (aligned with display posts) */
.modal-gradient-header {
    background: linear-gradient(135deg, #00A8D1 0%, #007EA1 100%);
    color: #fff;
}
.modal-rounded {
    border-radius: 20px;
    overflow: hidden;
}
.comment-avatar {
    width: 44px;
    height: 44px;
    object-fit: cover;
}
.comment-input {
    border-radius: 12px;
}
.reply-box {
    margin-left: 52px;
}

/* Responsive Design */
@media (max-width: 768px) {
    .videos-sidebar {
        position: fixed;
        left: -100%;
        top: 0;
        width: 280px;
        z-index: 1000;
        transition: left 0.3s ease;
    }
    
    .videos-sidebar.show {
        left: 0;
    }
    
    .videos-main-content {
        padding: 15px;
        padding-bottom: 40px; /* Extra padding for last post on mobile */
    }
    
    .video-card {
        margin-bottom: 20px;
    }
    
    .nav-btn {
        padding: 10px 12px;
        font-size: 14px;
    }
    
    .search-input {
        padding: 10px 12px 10px 40px;
        font-size: 13px;
    }
}

@media (max-width: 576px) {
    .videos-main-content {
        padding: 10px;
        padding-bottom: 40px; /* Extra padding for last post on small mobile */
    }
    
    .videos-sidebar {
        width: 100%;
    }
    
    .nav-btn {
        padding: 8px 10px;
        font-size: 13px;
    }
    
    .search-input {
        padding: 8px 10px 8px 35px;
        font-size: 12px;
    }
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Handle video play/pause
    document.querySelectorAll('.video-content').forEach(content => {
        const video = content.querySelector('video');
        const playButton = content.querySelector('.play-button');
        
        if (video && playButton) {
            // Click on video content to play/pause
            content.addEventListener('click', function(e) {
                e.preventDefault();
                if (video.paused) {
                    video.play();
                    playButton.style.display = 'none';
                } else {
                    video.pause();
                    playButton.style.display = 'block';
                }
            });
            
            // Handle video ended event
            video.addEventListener('ended', function() {
                playButton.style.display = 'block';
            });
        }
    });
    
    // Handle like buttons
    document.querySelectorAll('.like-btn').forEach(btn => {
        btn.addEventListener('click', function(e) {
            e.preventDefault();
            this.classList.toggle('liked');
            
            const span = this.querySelector('span');
            if (span) {
                let count = parseInt(span.textContent);
                if (this.classList.contains('liked')) {
                    span.textContent = count + 1;
                } else {
                    span.textContent = count - 1;
                }
            }
        });
    });
    
    // Handle bookmark buttons
    document.querySelectorAll('.bookmark-btn').forEach(btn => {
        btn.addEventListener('click', function(e) {
            e.preventDefault();
            this.classList.toggle('bookmarked');
        });
    });
    
    // Handle comment buttons (modal is triggered via data attributes)
    document.querySelectorAll('.comment-btn').forEach(btn => {
        btn.addEventListener('click', function(e) {
            console.log('Comments clicked');
        });
    });
    
    // Handle share buttons
    document.querySelectorAll('.share-btn').forEach(btn => {
        btn.addEventListener('click', function(e) {
            e.preventDefault();
            console.log('Share clicked');
            // Here you would implement the share functionality
        });
    });
    
    // Handle search input
    const searchInput = document.querySelector('.search-input');
    if (searchInput) {
        searchInput.addEventListener('input', function() {
            const searchTerm = this.value.toLowerCase();
            console.log('Searching for:', searchTerm);
            
            // Here you would implement the actual search logic
            // For now, we'll just log the search term
        });
    }
    
    // Handle nav buttons
    document.querySelectorAll('.nav-buttons .nav-btn').forEach(btn => {
        btn.addEventListener('click', function(e) {
            // Anchor (Home) should navigate, others prevent default
            if (this.tagName !== 'A') {
                e.preventDefault();
            }

            const label = this.textContent.trim();
            if (label.includes('Saved Videos')) {
                console.log('Saved videos clicked');
                // Implement saved videos filtering/navigation here
            } else if (label.includes('For You')) {
                console.log('For You clicked');
                // Implement "For You" feed logic here
            }
        });
    });
    
    // Like button functionality
    document.querySelectorAll('.like-btn').forEach(button => {
        button.addEventListener('click', function() {
            const icon = this.querySelector('i');
            const postId = this.getAttribute('data-post');
            
            if (this.classList.contains('liked')) {
                // Unlike
                this.classList.remove('liked');
                icon.classList.remove('bi-heart-fill');
                icon.classList.add('bi-heart');
                icon.style.color = '#6c757d';
            } else {
                // Like
                this.classList.add('liked');
                icon.classList.remove('bi-heart');
                icon.classList.add('bi-heart-fill');
                icon.style.color = '#dc3545';
            }
        });
    });

    // Bookmark button functionality
    document.querySelectorAll('.bookmark-btn').forEach(button => {
        button.addEventListener('click', function() {
            const icon = this.querySelector('i');
            const postId = this.getAttribute('data-post');
            
            if (this.classList.contains('bookmarked')) {
                // Remove bookmark
                this.classList.remove('bookmarked');
                icon.classList.remove('bi-bookmark-fill');
                icon.classList.add('bi-bookmark');
                icon.style.color = '#6c757d';
            } else {
                // Add bookmark
                this.classList.add('bookmarked');
                icon.classList.remove('bi-bookmark');
                icon.classList.add('bi-bookmark-fill');
                icon.style.color = '#00A8D1';
            }
        });
    });

    // Handle post options dropdown
    document.querySelectorAll('.post-options-btn').forEach(btn => {
        btn.addEventListener('click', function(e) {
            e.preventDefault();
            e.stopPropagation();
            console.log('Post options button clicked');

            const dropdown = this.nextElementSibling;
            if (dropdown) {
                dropdown.classList.toggle('show');
                console.log('Dropdown toggled');
            }
        });
    });

    // Handle dropdown items
    document.querySelectorAll('.post-options-dropdown .dropdown-item').forEach(item => {
        item.addEventListener('click', function(e) {
            e.preventDefault();
            const action = this.textContent.trim();

            switch(action) {
                case 'Save': console.log('Post saved'); break;
                case 'Hide': console.log('Post hidden'); break;
                case 'Copy Link': console.log('Link copied'); break;
                case 'Interested': console.log('Marked as interested'); break;
                case 'Not Interested': console.log('Marked as not interested'); break;
                case 'Snooze User for 30 Days': console.log('User snoozed for 30 days'); break;
                case 'Unfollow User': console.log('User unfollowed'); break;
                case 'Report': console.log('Post reported'); break;
                case 'Block': console.log('User blocked'); break;
            }

            // Close dropdown after action
            const dropdown = document.querySelector('.post-options-menu');
            if (dropdown) {
                dropdown.classList.remove('show');
            }
        });
    });

    // Close dropdown when clicking outside
    document.addEventListener('click', function(e) {
        const postOptionsDropdowns = document.querySelectorAll('.post-options-dropdown');
        const dropdowns = document.querySelectorAll('.post-options-menu');

        postOptionsDropdowns.forEach((dropdown, index) => {
            if (!dropdown.contains(e.target)) {
                dropdowns[index].classList.remove('show');
            }
        });
    });
});

// Read more functionality
function toggleDescription(id = 'description-text') {
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

// Comment media upload functions
function handleCommentImageUpload(input) {
    if (input.files && input.files[0]) {
        const file = input.files[0];
        const reader = new FileReader();
        
        reader.onload = function(e) {
            const preview = document.getElementById('commentMediaPreview');
            const previewImage = document.getElementById('commentPreviewImage');
            const previewText = document.getElementById('commentPreviewText');
            
            previewImage.src = e.target.result;
            previewImage.style.display = 'block';
            previewText.textContent = file.name;
            preview.style.display = 'block';
        };
        
        reader.readAsDataURL(file);
    }
}

function handleCommentVideoUpload(input) {
    if (input.files && input.files[0]) {
        const file = input.files[0];
        const url = URL.createObjectURL(file);
        
        const preview = document.getElementById('commentMediaPreview');
        const previewVideo = document.getElementById('commentPreviewVideo');
        const previewText = document.getElementById('commentPreviewText');
        
        previewVideo.src = url;
        previewVideo.style.display = 'block';
        previewText.textContent = file.name;
        preview.style.display = 'block';
    }
}

function removeCommentMedia() {
    const preview = document.getElementById('commentMediaPreview');
    const previewImage = document.getElementById('commentPreviewImage');
    const previewVideo = document.getElementById('commentPreviewVideo');
    const imageInput = document.getElementById('commentImageInput');
    const videoInput = document.getElementById('commentVideoInput');
    
    preview.style.display = 'none';
    previewImage.style.display = 'none';
    previewVideo.style.display = 'none';
    previewImage.src = '';
    previewVideo.src = '';
    imageInput.value = '';
    videoInput.value = '';
}
</script>

<!-- Comments Modal -->
<div class="modal fade" id="commentsModal" tabindex="-1" aria-labelledby="commentsModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-scrollable">
        <div class="modal-content comments-modal">
            <div class="modal-header comments-modal-header">
                <div class="d-flex align-items-center">
                    <div class="comments-icon me-3">
                        <i class="bi bi-chat-dots-fill"></i>
                    </div>
                    <div>
                        <h5 class="modal-title mb-0" id="commentsModalLabel">Comments</h5>
                        <small class="text-muted">19 comments • 2.3k views</small>
                    </div>
                </div>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body comments-modal-body">
                <!-- Comments List -->
                <div class="comments-list">
                    <!-- Comment 1 -->
                    <div class="comment-item mb-4" data-comment-id="1">
                        <div class="d-flex">
                            <div class="comment-avatar">
                                <img src="{{ asset('dogs/eli.jpeg') }}" alt="User" class="rounded-circle">
                                <div class="online-indicator"></div>
                            </div>
                            <div class="flex-grow-1">
                                <div class="comment-content">
                                    <div class="comment-header">
                                        <div class="d-flex align-items-center">
                                            <h6 class="comment-author mb-0">Sarah Johnson</h6>
                                            <span class="verified-badge ms-2">
                                                <i class="bi bi-patch-check-fill"></i>
                                            </span>
                                        </div>
                                        <div class="comment-meta">
                                            <span class="comment-time">2 hours ago</span>
                                            <span class="comment-likes">
                                                <i class="bi bi-heart-fill"></i> 12
                                            </span>
                                        </div>
                                    </div>
                                    <div class="comment-text">
                                        <p class="mb-0">Amazing video! What's the training technique? I'm looking to train my dog the same way! 🐕</p>
                                    </div>
                                </div>
                                <div class="comment-actions">
                                    <button class="action-btn like-btn">
                                        <i class="bi bi-heart"></i>
                                        <span>Like</span>
                                    </button>
                                    <button class="action-btn reply-btn" data-comment-id="1">
                                        <i class="bi bi-reply"></i>
                                        <span>Reply</span>
                                    </button>
                                </div>
                                
                                <!-- Replies Section -->
                                <div class="replies-section">
                                    <!-- Reply 1 -->
                                    <div class="reply-item">
                                        <div class="d-flex">
                                            <div class="reply-avatar">
                                                <img src="{{ asset('dogs/davidbates.jpg') }}" alt="User" class="rounded-circle">
                                            </div>
                                            <div class="flex-grow-1">
                                                <div class="reply-content">
                                                    <div class="reply-header">
                                                        <div class="d-flex align-items-center">
                                                            <h6 class="reply-author mb-0">Ali Hassan</h6>
                                                            <span class="verified-badge ms-2">
                                                                <i class="bi bi-patch-check-fill"></i>
                                                            </span>
                                                        </div>
                                                        <div class="reply-meta">
                                                            <span class="reply-time">1 hour ago</span>
                                                            <span class="reply-likes">
                                                                <i class="bi bi-heart-fill"></i> 5
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="reply-text">
                                                        <p class="mb-0">It's positive reinforcement! Very effective method! 👨‍👩‍👧‍👦</p>
                                                    </div>
                                                </div>
                                                <div class="reply-actions">
                                                    <button class="action-btn small">
                                                        <i class="bi bi-heart"></i>
                                                        <span>Like</span>
                                                    </button>
                                                    <button class="action-btn small reply-btn" data-comment-id="1">
                                                        <i class="bi bi-reply"></i>
                                                        <span>Reply</span>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Comment 2 -->
                    <div class="comment-item mb-3" data-comment-id="2">
                        <div class="d-flex">
                            <img src="{{ asset('dogs/methodman.jpeg') }}" alt="User" class="rounded-circle me-3" style="width: 40px; height: 40px; object-fit: cover;">
                            <div class="flex-grow-1">
                                <div class="comment-content bg-light rounded-3 p-3">
                                    <div class="d-flex justify-content-between align-items-start mb-2">
                                        <h6 class="mb-0 fw-semibold">Mike Chen</h6>
                                        <small class="text-muted">3 hours ago</small>
                                    </div>
                                    <p class="mb-2">This is hilarious! Dogs are the best comedians! 😂</p>
                                </div>
                                <div class="comment-actions mt-2">
                                    <button class="btn btn-link p-0 me-3 text-muted">
                                        <i class="bi bi-heart me-1"></i>Like
                                    </button>
                                    <button class="btn btn-link p-0 text-muted reply-btn" data-comment-id="2">
                                        <i class="bi bi-reply me-1"></i>Reply
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer comments-modal-footer">
                <!-- Add Comment Section -->
                <div class="w-100">
                    <div class="d-flex align-items-start">
                        <div class="comment-avatar">
                            <img src="{{ asset('dogs/davidbates.jpg') }}" alt="You" class="rounded-circle">
                        </div>
                        <div class="flex-grow-1">
                            <div class="comment-input-container">
                                <div class="input-wrapper">
                                    <textarea class="form-control comment-textarea" placeholder="Write a comment..." rows="2"></textarea>
                                    <div class="input-actions">
                                        <div class="attachment-buttons">
                                            <button class="attachment-btn" onclick="document.getElementById('commentImageInput').click()" title="Add Photo">
                                                <i class="bi bi-image"></i>
                                            </button>
                                            <button class="attachment-btn" onclick="document.getElementById('commentVideoInput').click()" title="Add Video">
                                                <i class="bi bi-camera-video"></i>
                                            </button>
                                            <input type="file" id="commentImageInput" accept="image/*" style="display: none;" onchange="handleCommentImageUpload(this)">
                                            <input type="file" id="commentVideoInput" accept="video/*" style="display: none;" onchange="handleCommentVideoUpload(this)">
                                        </div>
                                        <button class="btn btn-primary post-btn">
                                            <i class="bi bi-send"></i>
                                            <span>Post</span>
                                        </button>
                                    </div>
                                </div>
                                <!-- Media Preview -->
                                <div id="commentMediaPreview" class="media-preview" style="display: none;">
                                    <div class="preview-container">
                                        <div class="preview-media">
                                            <img id="commentPreviewImage" src="" alt="Preview" style="display: none;">
                                            <video id="commentPreviewVideo" style="display: none;" controls></video>
                                        </div>
                                        <div class="preview-info">
                                            <small class="preview-text" id="commentPreviewText"></small>
                                        </div>
                                        <button class="remove-media-btn" onclick="removeCommentMedia()">
                                            <i class="bi bi-x-circle"></i>
                                        </button>
                                    </div>
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
