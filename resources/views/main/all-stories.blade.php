@extends('main.layout')

@section('title', 'All Stories - Dogsdale')

@section('content')
<div class="stories-page">
    <div class="container-fluid h-100">
        <div class="row h-100">
            <!-- Left Sidebar -->
            <div class="col-lg-3 col-md-4 stories-sidebar">
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
                        <h5 class="fw-medium mb-3">Stories</h5>
                        <!-- Search Box -->
                        <div class="search-section mb-3">
                            <div class="search-box">
                                <i class="bi bi-search search-icon"></i>
                                <input type="text" class="search-input" placeholder="Search stories...">
                            </div>
                        </div>
                        
                        <!-- Navigation Buttons (Top) -->
                        <div class="nav-buttons">
                            <button class="nav-btn active">
                                <i class="bi bi-collection me-2"></i>
                                All Stories
                            </button>
                            <button class="nav-btn">
                                <i class="bi bi-heart me-2"></i>
                                Favorites
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Main Content -->
            <div class="col-lg-9 col-md-8 stories-main-content">
                <div class="stories-content-wrapper">
                    <!-- Stories Grid -->
                    <div class="stories-grid">
                        <!-- Story Card 1 -->
                        <div class="story-card">
                            <div class="story-image">
                                <img src="{{ asset('dogs/eli.jpeg') }}" alt="Training Journey" class="img-fluid">
                                <div class="story-overlay">
                                    <div class="story-actions">
                                        <button class="action-btn like-btn" data-story="1">
                                            <i class="bi bi-heart"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="story-content">
                                <h6 class="story-title">
                                    <a href="{{ route('story.detail', 1) }}" class="story-link">Training Journey</a>
                                </h6>
                                <p class="story-description">
                                    Follow this incredible journey training a Golden Retriever. From basic commands to advanced tricks, see how dedication and positive reinforcement create amazing results.
                                </p>
                                <div class="story-meta">
                                    <span class="story-likes">
                                        <i class="bi bi-heart me-1"></i>
                                        <span class="like-count">24</span>
                                    </span>
                                    <span class="story-date">
                                        <i class="bi bi-calendar3 me-1"></i>
                                        2 days ago
                                    </span>
                                </div>
                            </div>
                        </div>

                        <!-- Story Card 2 -->
                        <div class="story-card">
                            <div class="story-image">
                                <img src="{{ asset('dogs/methodman.jpeg') }}" alt="Rescue Success" class="img-fluid">
                                <div class="story-overlay">
                                    <div class="story-actions">
                                        <button class="action-btn like-btn" data-story="2">
                                            <i class="bi bi-heart"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="story-content">
                                <h6 class="story-title">
                                    <a href="{{ route('story.detail', 2) }}" class="story-link">Rescue Dog Success Story</a>
                                </h6>
                                <p class="story-description">
                                    Discover the heartwarming story of adopting a rescue Labrador. See how love, patience, and proper care transformed a shy dog into a confident companion.
                                </p>
                                <div class="story-meta">
                                    <span class="story-likes">
                                        <i class="bi bi-heart me-1"></i>
                                        <span class="like-count">18</span>
                                    </span>
                                    <span class="story-date">
                                        <i class="bi bi-calendar3 me-1"></i>
                                        5 days ago
                                    </span>
                                </div>
                            </div>
                        </div>

                        <!-- Story Card 3 -->
                        <div class="story-card">
                            <div class="story-image">
                                <img src="{{ asset('dogs/redboy.jpeg') }}" alt="Agility Victory" class="img-fluid">
                                <div class="story-overlay">
                                    <div class="story-actions">
                                        <button class="action-btn like-btn" data-story="3">
                                            <i class="bi bi-heart"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="story-content">
                                <h6 class="story-title">
                                    <a href="{{ route('story.detail', 3) }}" class="story-link">Agility Competition Victory</a>
                                </h6>
                                <p class="story-description">
                                    Discover how a Border Collie achieved their first agility competition win! Learn about the training routine, challenges faced, and the bond that made it all possible.
                                </p>
                                <div class="story-meta">
                                    <span class="story-likes">
                                        <i class="bi bi-heart me-1"></i>
                                        <span class="like-count">32</span>
                                    </span>
                                    <span class="story-date">
                                        <i class="bi bi-calendar3 me-1"></i>
                                        1 week ago
                                    </span>
                                </div>
                            </div>
                        </div>

                        <!-- Story Card 4 -->
                        <div class="story-card">
                            <div class="story-image">
                                <img src="{{ asset('dogs/davidbates.jpg') }}" alt="Breeding Excellence" class="img-fluid">
                                <div class="story-overlay">
                                    <div class="story-actions">
                                        <button class="action-btn like-btn" data-story="4">
                                            <i class="bi bi-heart"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="story-content">
                                <h6 class="story-title">
                                    <a href="{{ route('story.detail', 4) }}" class="story-link">Breeding Excellence</a>
                                </h6>
                                <p class="story-description">
                                    Learn about responsible dog breeding, focusing on health, temperament, and breed standards. A comprehensive guide for aspiring breeders and dog enthusiasts.
                                </p>
                                <div class="story-meta">
                                    <span class="story-likes">
                                        <i class="bi bi-heart me-1"></i>
                                        <span class="like-count">15</span>
                                    </span>
                                    <span class="story-date">
                                        <i class="bi bi-calendar3 me-1"></i>
                                        2 weeks ago
                                    </span>
                                </div>
                            </div>
                        </div>

                        <!-- Story Card 5 -->
                        <div class="story-card">
                            <div class="story-image">
                                <img src="{{ asset('dogs/jeep.jpg') }}" alt="Senior Care" class="img-fluid">
                                <div class="story-overlay">
                                    <div class="story-actions">
                                        <button class="action-btn like-btn" data-story="5">
                                            <i class="bi bi-heart"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="story-content">
                                <h6 class="story-title">
                                    <a href="{{ route('story.detail', 5) }}" class="story-link">Senior Dog Care</a>
                                </h6>
                                <p class="story-description">
                                    Valuable insights on caring for senior dogs, including nutrition, exercise, health monitoring, and making their golden years comfortable and happy.
                                </p>
                                <div class="story-meta">
                                    <span class="story-likes">
                                        <i class="bi bi-heart me-1"></i>
                                        <span class="like-count">28</span>
                                    </span>
                                    <span class="story-date">
                                        <i class="bi bi-calendar3 me-1"></i>
                                        3 weeks ago
                                    </span>
                                </div>
                            </div>
                        </div>

                        <!-- Story Card 6 -->
                        <div class="story-card">
                            <div class="story-image">
                                <img src="{{ asset('dogs/wendell.jpg') }}" alt="Service Training" class="img-fluid">
                                <div class="story-overlay">
                                    <div class="story-actions">
                                        <button class="action-btn like-btn" data-story="6">
                                            <i class="bi bi-heart"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="story-content">
                                <h6 class="story-title">
                                    <a href="{{ route('story.detail', 6) }}" class="story-link">Service Dog Training</a>
                                </h6>
                                <p class="story-description">
                                    Follow the journey of training a service dog for individuals with disabilities. Learn about the rigorous training process and the incredible impact these dogs have.
                                </p>
                                <div class="story-meta">
                                    <span class="story-likes">
                                        <i class="bi bi-heart me-1"></i>
                                        <span class="like-count">41</span>
                                    </span>
                                    <span class="story-date">
                                        <i class="bi bi-calendar3 me-1"></i>
                                        1 month ago
                                    </span>
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
/* Stories Page Styling */
.stories-page {
    min-height: 100vh;
    background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
    padding: 0;
    margin: 0;
}

/* Sidebar Styling */
.stories-sidebar {
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
.stories-main-content {
    padding: 20px;
    height: 100vh;
    overflow-y: auto;
    padding-bottom: 40px;
}

.stories-main-content {
    scrollbar-width: none;
    -ms-overflow-style: none;
}

.stories-main-content::-webkit-scrollbar {
    display: none;
}

.stories-content-wrapper {
    width: 100%;
    max-width: 1200px;
    margin: 0 auto;
}

/* Stories Grid */
.stories-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
    gap: 24px;
    padding-bottom: 20px;
}

/* Story Card */
.story-card {
    background: white;
    border-radius: 20px;
    overflow: hidden;
    box-shadow: 0 2px 12px rgba(0, 0, 0, 0.06);
    transition: all 0.3s ease;
    border: 1px solid #f0f0f0;
    position: relative;
}

.story-card:hover {
    transform: translateY(-4px);
    border-color: #00A8D1;
}

.story-image {
    position: relative;
    height: 220px;
    overflow: hidden;
    border-radius: 20px 20px 0 0;
}

.story-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.4s ease;
}

.story-card:hover .story-image img {
    transform: scale(1.08);
}

.story-overlay {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: linear-gradient(135deg, rgba(0, 168, 209, 0.1), rgba(0, 0, 0, 0.2));
    opacity: 0;
    transition: opacity 0.3s ease;
    display: flex;
    align-items: flex-end;
    justify-content: flex-end;
    padding: 20px;
}

.story-card:hover .story-overlay {
    opacity: 1;
}

.story-actions {
    display: flex;
    gap: 8px;
}

.action-btn {
    width: 40px;
    height: 40px;
    border: none;
    border-radius: 50%;
    background: rgba(255, 255, 255, 0.95);
    color: #6c757d;
    display: flex;
    align-items: center;
    justify-content: center;
    transition: all 0.3s ease;
    backdrop-filter: blur(15px);
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
}

.action-btn:hover {
    background: #00A8D1;
    color: white;
    transform: scale(1.15);
    box-shadow: 0 6px 20px rgba(0, 168, 209, 0.4);
}

.action-btn.liked {
    background: #e74c3c;
    color: white;
    box-shadow: 0 6px 20px rgba(231, 76, 60, 0.4);
}

.action-btn i {
    font-size: 16px;
}

.story-meta {
    display: flex;
    justify-content: space-between;
    align-items: center;
    font-size: 13px;
    color: #718096;
    padding-top: 16px;
    border-top: 1px solid #e2e8f0;
}

.story-likes {
    display: flex;
    align-items: center;
    gap: 6px;
    font-weight: 500;
    color: #e74c3c;
}

.story-likes i {
    font-size: 14px;
    color: #e74c3c;
}

.like-count {
    font-size: 13px;
    font-weight: 600;
    color: #e74c3c;
}

/* Story Content */
.story-content {
    padding: 24px;
    background: linear-gradient(135deg, #ffffff 0%, #fafbfc 100%);
}

.story-title {
    margin-bottom: 16px;
}

.story-link {
    color: #1a202c;
    text-decoration: none;
    font-weight: 500;
    font-size: 20px;
    transition: color 0.3s ease;
    line-height: 1.3;
}

.story-link:hover {
    color: #00A8D1;
    text-decoration: none;
}

.story-description {
    color: #4a5568;
    font-size: 15px;
    line-height: 1.7;
    margin-bottom: 20px;
    display: -webkit-box;
    -webkit-line-clamp: 3;
    -webkit-box-orient: vertical;
    overflow: hidden;
    font-weight: 400;
}


.story-date {
    display: flex;
    align-items: center;
    gap: 6px;
    font-weight: 500;
}

.story-date i {
    font-size: 14px;
    color: #00A8D1;
}

/* Responsive Design */
@media (max-width: 768px) {
    .stories-sidebar {
        padding: 15px;
    }
    
    .stories-main-content {
        padding: 15px;
        padding-bottom: 40px;
    }
    
    .stories-grid {
        grid-template-columns: 1fr;
        gap: 16px;
    }
    
    .story-content {
        padding: 20px;
    }
    
    .story-image {
        height: 200px;
    }
}

@media (max-width: 576px) {
    .stories-main-content {
        padding: 10px;
        padding-bottom: 40px;
    }
    
    .stories-sidebar {
        padding: 10px;
    }
    
    .sidebar-panel {
        padding: 12px;
    }
    
    .stories-grid {
        grid-template-columns: 1fr;
        gap: 12px;
    }
    
    .story-image {
        height: 180px;
    }
    
    .story-content {
        padding: 16px;
    }
    
    .story-link {
        font-size: 18px;
    }
    
    .story-description {
        font-size: 14px;
    }
    
    .story-image {
        height: 180px;
    }
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Like functionality
    const likeButtons = document.querySelectorAll('.like-btn');
    
    likeButtons.forEach(button => {
        button.addEventListener('click', function() {
            const icon = this.querySelector('i');
            const storyCard = this.closest('.story-card');
            const likeCount = storyCard.querySelector('.like-count');
            let currentCount = parseInt(likeCount.textContent);
            
            if (this.classList.contains('liked')) {
                this.classList.remove('liked');
                icon.classList.remove('bi-heart-fill');
                icon.classList.add('bi-heart');
                likeCount.textContent = currentCount - 1;
            } else {
                this.classList.add('liked');
                icon.classList.remove('bi-heart');
                icon.classList.add('bi-heart-fill');
                likeCount.textContent = currentCount + 1;
            }
        });
    });
    
    
    // Search functionality
    const searchInput = document.querySelector('.search-input');
    if (searchInput) {
        searchInput.addEventListener('input', function() {
            const searchTerm = this.value.toLowerCase();
            const storyCards = document.querySelectorAll('.story-card');
            
            storyCards.forEach(card => {
                const cardText = card.textContent.toLowerCase();
                if (cardText.includes(searchTerm)) {
                    card.style.display = 'block';
                } else {
                    card.style.display = 'none';
                }
            });
        });
    }
    
    // Navigation button functionality
    const navButtons = document.querySelectorAll('.nav-btn');
    
    navButtons.forEach(button => {
        button.addEventListener('click', function() {
            // Remove active class from all buttons
            navButtons.forEach(btn => btn.classList.remove('active'));
            // Add active class to clicked button
            this.classList.add('active');
            
            // Here you can add logic to filter stories based on the selected category
            const buttonText = this.textContent.trim();
            console.log('Selected category:', buttonText);
        });
    });
});
</script>
