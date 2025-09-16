<!-- Advertisement Post -->
<div class="advertisement-post mb-4">
    <div class="post-card bg-white rounded-4 shadow-sm border-0 overflow-hidden">
        <!-- Header Section -->
        <div class="post-header d-flex align-items-center justify-content-between p-3 mb-0">
            <div class="d-flex align-items-center">
                <div class="profile-picture me-3">
                    <div class="profile-avatar">
                        <img src="{{ asset('dogs/eli.jpeg') }}" alt="Profile" class="rounded-circle">
                    </div>
                </div>
                <div>
                    <h6 class="mb-0 fw-medium text-dark">Lorem Ipsum</h6>
                    <small class="text-muted">Sponsored</small>
                </div>
            </div>
            <!-- Advertisement Options Dropdown -->
            <div class="dropdown ad-options-dropdown">
                <button class="btn text-muted ad-options-btn" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="bi bi-three-dots-vertical"></i>
                </button>
                <ul class="dropdown-menu dropdown-menu-end ad-options-menu">
                    <li><a href="#" class="dropdown-item">
                        <i class="bi bi-eye-slash me-2"></i>Hide Ad
                    </a></li>
                    <li><a href="#" class="dropdown-item">
                        <i class="bi bi-flag me-2"></i>Report Ad
                    </a></li>
                    <li><a href="#" class="dropdown-item">
                        <i class="bi bi-link-45deg me-2"></i>Save Link
                    </a></li>
                </ul>
            </div>
        </div>

        <!-- Caption Section -->
        <div class="post-caption p-3 pt-0 pb-2">
            <p class="mb-0 text-dark">Lorem ipsum dolor sit amet, hh</p>
        </div>

        <!-- Main Advertisement Section -->
        <div class="advertisement-content p-3">
            <div class="ad-card rounded-4 overflow-hidden position-relative">
                <!-- Main Advertisement Image -->
                <div class="ad-image-container">
                    <img src="{{ asset('dogs/cover.jpeg') }}" alt="Advertisement" class="ad-main-image w-100 h-100">
                    
                    <!-- Overlay Content -->
                    <div class="ad-overlay position-absolute top-0 start-0 w-100 h-100 d-flex flex-column justify-content-between p-4">
                        <!-- Top Section -->
                        <div class="ad-top-section">
                            <!-- Logo Section -->
                            <div class="logo-section text-center mb-3">
                                <div class="logo-tag bg-primary text-white rounded-3 px-3 py-1 d-inline-block">
                                    <small class="fw-semibold">YOUR LOGO</small>
                                </div>
                            </div>

                            <!-- Main Text -->
                            <div class="main-text text-center">
                                <h2 class="display-6 fw-bold text-white mb-0" style="text-shadow: 2px 2px 4px rgba(0,0,0,0.5);">LOREM IPSUM</h2>
                            </div>
                        </div>

                    
                    </div>
                </div>
            </div>
        </div>

        <!-- Footer Section -->
        <div class="post-footer d-flex align-items-center justify-content-between p-3 pt-2">
            <div class="website-source">
                <a href="https://www.loremipsum.com" target="_blank" class="text-decoration-none fw-medium text-primary">
                  Lorem Ipsum.com
                </a>
            </div>
            <div class="info-icon">
                <button class="btn btn-sm btn-primary rounded-circle p-1" style="width: 24px; height: 24px;">
                    <i class="bi bi-info text-white" style="font-size: 12px;"></i>
                </button>
            </div>
        </div>
    </div>
</div>

<style>
/* Advertisement Post Styling */
.advertisement-post {
    max-width: 100%;
}

.post-card {
    transition: all 0.3s ease;
}

.post-card:hover {
    transform: translateY(-2px);
    box-shadow: 0 8px 25px rgba(0, 0, 0, 0.1) !important;
}

/* Profile Picture */
.profile-avatar {
    width: 50px;
    height: 50px;
    position: relative;
}

.profile-avatar img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    border: 3px solid #e9ecef;
}

/* Advertisement Card */
.ad-card {
    min-height: 300px;
    position: relative;
    overflow: hidden;
}

/* Main Advertisement Image */
.ad-image-container {
    position: relative;
    width: 100%;
    height: 300px;
    overflow: hidden;
}

.ad-main-image {
    object-fit: cover;
    transition: transform 0.3s ease;
}

.ad-card:hover .ad-main-image {
    transform: scale(1.05);
}

/* Overlay Content */
.ad-overlay {
    background: linear-gradient(
        to bottom,
        rgba(0, 0, 0, 0.1) 0%,
        rgba(0, 0, 0, 0.2) 50%,
        rgba(0, 0, 0, 0.3) 100%
    );
    z-index: 2;
}

/* Logo Tag */
.logo-tag {
    background: linear-gradient(135deg, #00A8D1 0%, #0077be 100%) !important;
    box-shadow: 0 2px 8px rgba(0, 168, 209, 0.3);
}

/* Main Text Styling */
.main-text h2 {
    color: white !important;
    text-shadow: 2px 2px 4px rgba(0,0,0,0.5);
    letter-spacing: 2px;
}

/* Contact Information */
.contact-info {
    text-align: left;
}

.website-link h6 {
    color: white !important;
    font-size: 1.1rem;
    text-shadow: 1px 1px 2px rgba(0,0,0,0.5);
}

.contact-item {
    justify-content: flex-end;
}

.contact-item i {
    font-size: 14px;
    color: white;
}

.contact-item small {
    font-size: 0.85rem;
    font-weight: 500;
    color: white;
    text-shadow: 1px 1px 2px rgba(0,0,0,0.5);
}

/* Footer Styling */
.post-footer {
    background: #f8f9fa;
}

.info-icon .btn {
    border: none;
}

.info-icon .btn:hover {
    transform: scale(1.1);
}

/* Advertisement Options Dropdown */
.ad-options-dropdown {
    position: relative;
}

.ad-options-menu {
    min-width: 160px;
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

.ad-options-menu.show {
    display: block !important;
}

.ad-options-menu .dropdown-item {
    padding: 10px 16px;
    font-size: 14px;
    font-weight: 500;
    color: #495057;
    transition: all 0.2s ease;
    display: flex;
    align-items: center;
}

.ad-options-menu .dropdown-item:hover {
    background: #f8f9fa;
    color: #00A8D1;
    transform: translateX(2px);
}

.ad-options-menu .dropdown-item i {
    width: 16px;
    height: 16px;
    font-size: 16px;
}


/* Responsive Design */
@media (max-width: 768px) {
    .ad-image-container {
        height: 250px;
    }
    
    .main-text h2 {
        font-size: 2rem !important;
    }
    
    .website-link h6 {
        font-size: 1rem;
    }
    
    .contact-item small {
        font-size: 0.8rem;
    }
    
    .ad-overlay {
        padding: 20px !important;
    }
}

@media (max-width: 576px) {
    .ad-image-container {
        height: 200px;
    }
    
    .main-text h2 {
        font-size: 1.5rem !important;
        letter-spacing: 1px;
    }
    
    .contact-item {
        margin-bottom: 8px !important;
    }
    
    .ad-overlay {
        padding: 15px !important;
    }
    
    .logo-tag {
        padding: 6px 12px !important;
    }
    
    .logo-tag small {
        font-size: 0.7rem;
    }
    
    .ad-options-menu {
        min-width: 140px;
    }
    
    .ad-options-menu .dropdown-item {
        padding: 8px 12px;
        font-size: 13px;
    }
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Handle advertisement options dropdown
    const adOptionsBtn = document.querySelector('.ad-options-btn');
    if (adOptionsBtn) {
        adOptionsBtn.addEventListener('click', function(e) {
            e.preventDefault();
            e.stopPropagation();
            console.log('Ad options button clicked');
            
            const dropdown = this.nextElementSibling;
            if (dropdown) {
                dropdown.classList.toggle('show');
                console.log('Ad dropdown toggled');
            }
        });
    }
    
    // Handle dropdown items
    document.querySelectorAll('.ad-options-dropdown .dropdown-item').forEach(item => {
        item.addEventListener('click', function(e) {
            e.preventDefault();
            const action = this.textContent.trim();
            
            switch(action) {
                case 'Hide Ad':
                    console.log('Advertisement hidden');
                    // Add hide ad functionality here
                    break;
                case 'Report Ad':
                    console.log('Advertisement reported');
                    // Add report ad functionality here
                    break;
                case 'Save Link':
                    console.log('Advertisement link saved');
                    // Add save link functionality here
                    break;
            }
            
            // Close dropdown after action
            const dropdown = document.querySelector('.ad-options-menu');
            if (dropdown) {
                dropdown.classList.remove('show');
            }
        });
    });
    
    // Close dropdown when clicking outside
    document.addEventListener('click', function(e) {
        const adOptionsDropdown = document.querySelector('.ad-options-dropdown');
        const dropdown = document.querySelector('.ad-options-menu');
        
        if (adOptionsDropdown && dropdown && !adOptionsDropdown.contains(e.target)) {
            dropdown.classList.remove('show');
        }
    });
});
</script>
