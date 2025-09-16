<div class="container-fluid p-0 mt-3">
    <div class="display-posts-section">
        <!-- Professional Post Design -->
        <div class="post-card bg-white rounded-3 p-4 mb-0">
            <!-- Post Header -->
            <div class="d-flex justify-content-between align-items-start mb-2">
                <div class="d-flex align-items-center">
                    <img src="{{ asset('dogs/davidbates.jpg') }}" alt="Ali Hassan" class="rounded-circle me-3" style="width: 50px; height: 50px; object-fit: cover;">
                    <div class="d-flex flex-column">
                        <a class="mb-0 fw-semibold text-dark text-decoration-none" href="">Ali Hassan</a>
                        <small class="text-muted">2 hours ago</small>
                    </div>
                </div>
                <div class="d-flex align-items-center">
                    <span class="badge text-danger me-2 fs-6 fw-normal">Sold</span>
                    <span class="badge text-Success me-2 fs-6 fw-normal">Available</span>
                    
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

            <!-- Dog Information Grid -->
            <div class="dog-info-grid mb-4">
                <div class="row g-3">
                    <div class="col-md-4 col-6">
                        <div class="info-item">
                            <div class="d-flex align-items-center mb-1">
                                <i class="bi bi-heart me-2 text-muted"></i>
                                <small class="text-muted">Dog Name</small>
                            </div>
                            <div class="fw-medium text-dark">Maximus</div>
                        </div>
                    </div>
                    <div class="col-md-4 col-6">
                        <div class="info-item">
                            <div class="d-flex align-items-center mb-1">
                                <i class="bi bi-tag me-2 text-muted"></i>
                                <small class="text-muted">Breed Name</small>
                            </div>
                            <div class="fw-medium text-dark">German Shepherd</div>
                        </div>
                    </div>
                    <div class="col-md-4 col-6">
                        <div class="info-item">
                            <div class="d-flex align-items-center mb-1">
                                <i class="bi bi-link-45deg me-2 text-muted"></i>
                                <small class="text-muted">Bloodline</small>
                            </div>
                            <div class="fw-medium text-dark">Royal Bloodline</div>
                        </div>
                    </div>
                    <div class="col-md-4 col-6">
                        <div class="info-item">
                            <div class="d-flex align-items-center mb-1">
                                <i class="bi bi-calendar me-2 text-muted"></i>
                                <small class="text-muted">Age</small>
                            </div>
                            <div class="fw-medium text-dark">2 Years</div>
                        </div>
                    </div>
                    <div class="col-md-4 col-6">
                        <div class="info-item">
                            <div class="d-flex align-items-center mb-1">
                                <i class="bi bi-currency-dollar me-2 text-muted"></i>
                                <small class="text-muted">Price</small>
                            </div>
                            <div class="fw-medium text-dark">$2,500</div>
                        </div>
                    </div>
                    <div class="col-md-4 col-6">
                        <div class="info-item">
                            <div class="d-flex align-items-center mb-1">
                                <i class="bi bi-gender-male me-2 text-muted"></i>
                                <small class="text-muted">Gender</small>
                            </div>
                            <div class="fw-medium text-dark">Male</div>
                        </div>
                    </div>
                    <div class="col-md-4 col-6">
                        <div class="info-item">
                            <div class="d-flex align-items-center mb-1">
                                <i class="bi bi-check-circle me-2 text-muted"></i>
                                <small class="text-muted">Status</small>
                            </div>
                            <div class="fw-medium text-dark">Available</div>
                        </div>
                    </div>
                    <div class="col-md-4 col-6">
                        <div class="info-item">
                            <div class="d-flex align-items-center mb-1">
                                <i class="bi bi-award me-2 text-muted"></i>
                                <small class="text-muted">Registration</small>
                            </div>
                            <div class="fw-medium text-dark">AKC-123456</div>
                        </div>
                    </div>
                    <div class="col-md-4 col-6">
                        <div class="info-item">
                            <div class="d-flex align-items-center mb-1">
                                <i class="bi bi-geo-alt me-2 text-muted"></i>
                                <small class="text-muted">City</small>
                            </div>
                            <div class="fw-medium text-dark">New York</div>
                        </div>
                    </div>
                    <div class="col-md-4 col-6">
                        <div class="info-item">
                            <div class="d-flex align-items-center mb-1">
                                <i class="bi bi-map me-2 text-muted"></i>
                                <small class="text-muted">State</small>
                            </div>
                            <div class="fw-medium text-dark">New York</div>
                        </div>
                    </div>
                    <div class="col-md-4 col-6">
                        <div class="info-item">
                            <div class="d-flex align-items-center mb-1">
                                <i class="bi bi-globe me-2 text-muted"></i>
                                <small class="text-muted">Country</small>
                            </div>
                            <div class="fw-medium text-dark">United States</div>
                        </div>
                    </div>
                    <div class="col-md-4 col-6">
                        <div class="info-item">
                            <div class="d-flex align-items-center mb-1">
                                <i class="bi bi-cash-stack me-2 text-muted"></i>
                                <small class="text-muted">Price Per Breeding Cycle</small>
                            </div>
                            <div class="fw-medium text-dark">$800</div>
                        </div>
                    </div>
                    <div class="col-md-4 col-6">
                        <div class="info-item">
                            <div class="d-flex align-items-center mb-1">
                                <i class="bi bi-droplet me-2 text-muted"></i>
                                <small class="text-muted">Sticks Per Breeding Cycle</small>
                            </div>
                            <div class="fw-medium text-dark">2 Sticks</div>
                        </div>
                    </div>
                    <div class="col-md-4 col-6">
                        <div class="info-item">
                            <div class="d-flex align-items-center mb-1">
                            <i class="bi bi-currency-dollar me-2 text-muted"></i>
                            <small class="text-muted">Price Per 5CC</small>
                            </div>
                            <div class="fw-medium text-dark">$150</div>
                        </div>
                    </div>
                    <div class="col-md-4 col-6">
                        <div class="info-item">
                            <div class="d-flex align-items-center mb-1">
                                <i class="bi bi-clock me-2 text-muted"></i>
                                <small class="text-muted">Stored Since</small>
                            </div>
                            <div class="fw-medium text-dark">January 2024</div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Image Carousel -->
            <div class="image-carousel mb-4">
                <div id="postCarousel" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner rounded-3">
                        <div class="carousel-item active">
                            <img src="{{ asset('dogs/christiangray.jpg') }}" class="d-block w-100 carousel-image" alt="German Shepherd" style="height: 400px; object-fit: cover; cursor: pointer;" data-bs-toggle="modal" data-bs-target="#imageModal" data-slide="0">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('dogs/eli.jpeg') }}" class="d-block w-100 carousel-image" alt="German Shepherd 2" style="height: 400px; object-fit: cover; cursor: pointer;" data-bs-toggle="modal" data-bs-target="#imageModal" data-slide="1">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('dogs/methodman.jpeg') }}" class="d-block w-100 carousel-image" alt="German Shepherd 3" style="height: 400px; object-fit: cover; cursor: pointer;" data-bs-toggle="modal" data-bs-target="#imageModal" data-slide="2">
                        </div>
                    </div>
                    
                    <!-- Carousel Controls -->
                    <button class="carousel-control-prev" type="button" data-bs-target="#postCarousel" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#postCarousel" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                    
                    <!-- Carousel Indicators -->
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#postCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#postCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#postCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                </div>
            </div>

            <!-- Pedigree Link -->
            <div class="pedigree-link mb-4">
                <div class="d-flex align-items-center">
                    <i class="bi bi-box-arrow-up-right me-2 text-muted"></i>
                    <small class="text-muted me-2">Pedigree Link:</small>
                    <a href="#" class="text-primary text-decoration-none">View Full Pedigree</a>
                </div>
            </div>

            <!-- Description -->
            <div class="post-description mb-4">
                <div class="d-flex align-items-center mb-2">
                    <i class="bi bi-text-left me-2 text-muted"></i>
                    <small class="text-muted">Description</small>
                </div>
                <div class="description-content">
                    <p class="text-muted mb-0 description-text-truncated" id="description-text">
                        This beautiful German Shepherd is well-trained and comes from an excellent bloodline. Perfect for families looking for a loyal companion. All vaccinations up to date and health certificates provided. Maximus has been professionally trained and socialized, making him an ideal family pet. He responds well to commands and has a gentle temperament with children.
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
                    <span class="text-muted fw-semibold">1,024 likes</span>
                    <span class="text-primary" style="cursor: pointer;" data-bs-toggle="modal" data-bs-target="#commentsModal">View all 19 comments</span>
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

<!-- Image Modal -->
<div class="modal fade" id="imageModal" tabindex="-1" aria-labelledby="imageModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content image-modal">
            <div class="modal-header image-modal-header">
                <div class="d-flex align-items-center">
                    <div class="image-icon me-3">
                        <i class="bi bi-images"></i>
                    </div>
                    <div>
                        <h5 class="modal-title mb-0" id="imageModalLabel">Dog Images</h5>
                        <small class="text-muted">3 photos • Click to view full size</small>
                    </div>
                </div>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body image-modal-body">
                <div id="modalCarousel" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="{{ asset('dogs/christiangray.jpg') }}" class="d-block w-100" alt="German Shepherd" style="max-height: 80vh; object-fit: contain;">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('dogs/eli.jpeg') }}" class="d-block w-100" alt="German Shepherd 2" style="max-height: 80vh; object-fit: contain;">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('dogs/methodman.jpeg') }}" class="d-block w-100" alt="German Shepherd 3" style="max-height: 80vh; object-fit: contain;">
                        </div>
                    </div>
                    
                    <!-- Modal Carousel Controls -->
                    <button class="carousel-control-prev" type="button" data-bs-target="#modalCarousel" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#modalCarousel" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                    
                    <!-- Modal Carousel Indicators -->
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#modalCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#modalCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#modalCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

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
                                        <p class="mb-0">Beautiful dog! What's his temperament like? I'm looking for a family pet and he seems perfect! 🐕</p>
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
                                                        <p class="mb-0">He's very gentle and great with kids! Perfect family dog! 👨‍👩‍👧‍👦</p>
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
                                    
                                    <!-- Reply 2 -->
                                    <div class="reply-item">
                                        <div class="d-flex">
                                            <div class="reply-avatar">
                                                <img src="{{ asset('dogs/methodman.jpeg') }}" alt="User" class="rounded-circle">
                                            </div>
                                            <div class="flex-grow-1">
                                                <div class="reply-content">
                                                    <div class="reply-header">
                                                        <div class="d-flex align-items-center">
                                                            <h6 class="reply-author mb-0">Mike Chen</h6>
                                                        </div>
                                                        <div class="reply-meta">
                                                            <span class="reply-time">30 minutes ago</span>
                                                            <span class="reply-likes">
                                                                <i class="bi bi-heart-fill"></i> 3
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="reply-text">
                                                        <p class="mb-0">Perfect for families! Very well trained and socialized. 🎾</p>
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
                                
                                <!-- Reply Input (Hidden by default) -->
                                <div class="reply-input-container mt-3 ms-3" id="reply-input-1" style="display: none;">
                                    <div class="d-flex align-items-start">
                                        <img src="{{ asset('dogs/davidbates.jpg') }}" alt="You" class="rounded-circle me-2" style="width: 32px; height: 32px; object-fit: cover;">
                                        <div class="flex-grow-1">
                                            <div class="reply-input-wrapper">
                                                <textarea class="form-control form-control-sm mb-2" placeholder="Write a reply..." rows="2" style="resize: none; border-radius: 12px; font-size: 0.875rem;"></textarea>
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <div class="reply-attachments">
                                                        <button class="btn btn-link p-0 me-2" onclick="document.getElementById('replyImageInput1').click()">
                                                            <i class="bi bi-image text-muted small"></i>
                                                        </button>
                                                        <button class="btn btn-link p-0 me-2" onclick="document.getElementById('replyVideoInput1').click()">
                                                            <i class="bi bi-camera-video text-muted small"></i>
                                                        </button>
                                                        <input type="file" id="replyImageInput1" accept="image/*" style="display: none;" onchange="handleReplyImageUpload(this, 1)">
                                                        <input type="file" id="replyVideoInput1" accept="video/*" style="display: none;" onchange="handleReplyVideoUpload(this, 1)">
                                                    </div>
                                                    <div>
                                                        <button class="btn btn-link p-0 me-2 text-muted small cancel-reply-btn" data-comment-id="1">Cancel</button>
                                                        <button class="btn btn-primary btn-sm rounded-3 px-3">Reply</button>
                                                    </div>
                                                </div>
                                                <!-- Reply Media Preview -->
                                                <div id="replyMediaPreview1" class="mt-2" style="display: none;">
                                                    <div class="d-flex align-items-center bg-light rounded-3 p-2">
                                                        <img id="replyPreviewImage1" src="" alt="Preview" style="width: 40px; height: 40px; object-fit: cover; border-radius: 8px; display: none;">
                                                        <video id="replyPreviewVideo1" style="width: 40px; height: 40px; object-fit: cover; border-radius: 8px; display: none;" controls></video>
                                                        <div class="ms-2 flex-grow-1">
                                                            <small class="text-muted" id="replyPreviewText1"></small>
                                                        </div>
                                                        <button class="btn btn-link p-0 text-danger" onclick="removeReplyMedia(1)">
                                                            <i class="bi bi-x-circle small"></i>
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

                    <!-- Comment 2 with Image -->
                    <div class="comment-item mb-3" data-comment-id="2">
                        <div class="d-flex">
                            <img src="{{ asset('dogs/methodman.jpeg') }}" alt="User" class="rounded-circle me-3" style="width: 40px; height: 40px; object-fit: cover;">
                            <div class="flex-grow-1">
                                <div class="comment-content bg-light rounded-3 p-3">
                                    <div class="d-flex justify-content-between align-items-start mb-2">
                                        <h6 class="mb-0 fw-semibold">Mike Chen</h6>
                                        <small class="text-muted">3 hours ago</small>
                                    </div>
                                    <p class="mb-2">Here's my dog for comparison! They look similar.</p>
                                    <div class="comment-media mt-2">
                                        <img src="{{ asset('dogs/jeep.jpg') }}" alt="User's dog" class="rounded-3" style="max-width: 200px; max-height: 200px; object-fit: cover; cursor: pointer;" data-bs-toggle="modal" data-bs-target="#commentImageModal">
                                    </div>
                                </div>
                                <div class="comment-actions mt-2">
                                    <button class="btn btn-link p-0 me-3 text-muted">
                                        <i class="bi bi-heart me-1"></i>Like
                                    </button>
                                    <button class="btn btn-link p-0 text-muted reply-btn" data-comment-id="2">
                                        <i class="bi bi-reply me-1"></i>Reply
                                    </button>
                                </div>
                                
                                <!-- Reply Input (Hidden by default) -->
                                <div class="reply-input-container mt-3 ms-3" id="reply-input-2" style="display: none;">
                                    <div class="d-flex align-items-start">
                                        <img src="{{ asset('dogs/davidbates.jpg') }}" alt="You" class="rounded-circle me-2" style="width: 32px; height: 32px; object-fit: cover;">
                                        <div class="flex-grow-1">
                                            <div class="reply-input-wrapper">
                                                <textarea class="form-control form-control-sm mb-2" placeholder="Write a reply..." rows="2" style="resize: none; border-radius: 12px; font-size: 0.875rem;"></textarea>
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <div class="reply-attachments">
                                                        <button class="btn btn-link p-0 me-2" onclick="document.getElementById('replyImageInput2').click()">
                                                            <i class="bi bi-image text-muted small"></i>
                                                        </button>
                                                        <button class="btn btn-link p-0 me-2" onclick="document.getElementById('replyVideoInput2').click()">
                                                            <i class="bi bi-camera-video text-muted small"></i>
                                                        </button>
                                                        <input type="file" id="replyImageInput2" accept="image/*" style="display: none;" onchange="handleReplyImageUpload(this, 2)">
                                                        <input type="file" id="replyVideoInput2" accept="video/*" style="display: none;" onchange="handleReplyVideoUpload(this, 2)">
                                                    </div>
                                                    <div>
                                                        <button class="btn btn-link p-0 me-2 text-muted small cancel-reply-btn" data-comment-id="2">Cancel</button>
                                                        <button class="btn btn-primary btn-sm rounded-3 px-3">Reply</button>
                                                    </div>
                                                </div>
                                                <!-- Reply Media Preview -->
                                                <div id="replyMediaPreview2" class="mt-2" style="display: none;">
                                                    <div class="d-flex align-items-center bg-light rounded-3 p-2">
                                                        <img id="replyPreviewImage2" src="" alt="Preview" style="width: 40px; height: 40px; object-fit: cover; border-radius: 8px; display: none;">
                                                        <video id="replyPreviewVideo2" style="width: 40px; height: 40px; object-fit: cover; border-radius: 8px; display: none;" controls></video>
                                                        <div class="ms-2 flex-grow-1">
                                                            <small class="text-muted" id="replyPreviewText2"></small>
                                                        </div>
                                                        <button class="btn btn-link p-0 text-danger" onclick="removeReplyMedia(2)">
                                                            <i class="bi bi-x-circle small"></i>
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

                    <!-- Comment 3 with Video -->
                    <div class="comment-item mb-3">
                        <div class="d-flex">
                            <img src="{{ asset('dogs/redboy.jpeg') }}" alt="User" class="rounded-circle me-3" style="width: 40px; height: 40px; object-fit: cover;">
                            <div class="flex-grow-1">
                                <div class="comment-content bg-light rounded-3 p-3">
                                    <div class="d-flex justify-content-between align-items-start mb-2">
                                        <h6 class="mb-0 fw-semibold">Emma Wilson</h6>
                                        <small class="text-muted">4 hours ago</small>
                                    </div>
                                    <p class="mb-2">Check out this training video I made!</p>
                                    <div class="comment-media mt-2">
                                        <video controls class="rounded-3" style="max-width: 200px; max-height: 200px;">
                                            <source src="{{ asset('dogs/WhatsApp Video 2024-04-06 at 20.02.18_6c944d1b.mp4') }}" type="video/mp4">
                                            Your browser does not support the video tag.
                                        </video>
                                    </div>
                                </div>
                                <div class="comment-actions mt-2">
                                    <button class="btn btn-link p-0 me-3 text-muted">
                                        <i class="bi bi-heart me-1"></i>Like
                                    </button>
                                    <button class="btn btn-link p-0 text-muted">
                                        <i class="bi bi-reply me-1"></i>Reply
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Comment 4 -->
                    <div class="comment-item mb-3">
                        <div class="d-flex">
                            <img src="{{ asset('dogs/christiangray.jpg') }}" alt="User" class="rounded-circle me-3" style="width: 40px; height: 40px; object-fit: cover;">
                            <div class="flex-grow-1">
                                <div class="comment-content bg-light rounded-3 p-3">
                                    <div class="d-flex justify-content-between align-items-start mb-2">
                                        <h6 class="mb-0 fw-semibold">David Brown</h6>
                                        <small class="text-muted">5 hours ago</small>
                                    </div>
                                    <p class="mb-2">Is he good with children? Looking for a family dog.</p>
                                </div>
                                <div class="comment-actions mt-2">
                                    <button class="btn btn-link p-0 me-3 text-muted">
                                        <i class="bi bi-heart me-1"></i>Like
                                    </button>
                                    <button class="btn btn-link p-0 text-muted">
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

<!-- Comment Image Modal -->
<div class="modal fade" id="commentImageModal" tabindex="-1" aria-labelledby="commentImageModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content image-modal">
            <div class="modal-header image-modal-header">
                <div class="d-flex align-items-center">
                    <div class="image-icon me-3">
                        <i class="bi bi-image"></i>
                    </div>
                    <div>
                        <h5 class="modal-title mb-0" id="commentImageModalLabel">Comment Image</h5>
                        <small class="text-muted">Click to view full size</small>
                    </div>
                </div>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body image-modal-body text-center">
                <img id="commentModalImage" src="" alt="Comment Image" class="img-fluid rounded-3" style="max-height: 70vh; object-fit: contain;">
            </div>
        </div>
    </div>
</div>

<style>
/* Professional and clean styling */
.display-posts-section {
    max-width: 100%;
}

.post-card {
    transition: box-shadow 0.2s ease-in-out;
}

.dog-info-grid {
    padding: 20px;
}

.info-item {
    padding: 8px 0;
}

.info-item i {
    width: 16px;
    text-align: center;
}

/* Carousel customization */
.carousel-control-prev,
.carousel-control-next {
    width: 40px;
    height: 40px;
    background-color: rgba(0, 0, 0, 0.2);
    border-radius: 50%;
    top: 50%;
    transform: translateY(-50%);
}

.carousel-control-prev {
    left: 15px;
}

.carousel-control-next {
    right: 15px;
}

.carousel-indicators {
    margin-bottom: 10px;
}

.carousel-indicators button {
    width: 8px;
    height: 8px;
    border-radius: 50%;
    margin: 0 4px;
    background-color: rgba(255, 255, 255, 0.5);
    border: none;
}

.carousel-indicators button.active {
    background-color: #fff;
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

.text-danger {
    color:#F61F1F !important;
}

/* Image modal styling */
.carousel-image {
    transition: transform 0.2s ease-in-out;
}

.carousel-image:hover {
    transform: scale(1.02);
}

.modal-xl {
    max-width: 95vw;
}

.modal-content.bg-dark {
    background-color: rgba(0, 0, 0, 0.95) !important;
}

.modal-body img {
    border-radius: 8px;
}

/* Modal carousel controls */
.modal .carousel-control-prev,
.modal .carousel-control-next {
    width: 50px;
    height: 50px;
    background-color: rgba(0, 0, 0, 0.5);
    border-radius: 50%;
    top: 50%;
    transform: translateY(-50%);
}

.modal .carousel-control-prev {
    left: 20px;
}

.modal .carousel-control-next {
    right: 20px;
}

.modal .carousel-indicators {
    margin-bottom: 20px;
}

.modal .carousel-indicators button {
    width: 12px;
    height: 12px;
    border-radius: 50%;
    margin: 0 6px;
    background-color: rgba(255, 255, 255, 0.5);
    border: none;
}

.modal .carousel-indicators button.active {
    background-color: #fff;
}

/* Comments modal styling */
.comment-item {
    border-bottom: 1px solid #f0f0f0;
    padding-bottom: 15px;
}

.comment-item:last-child {
    border-bottom: none;
}

.comment-content {
    border: 1px solid #e9ecef;
}

.comment-actions button {
    font-size: 0.875rem;
    transition: color 0.2s ease-in-out;
}

.comment-actions button:hover {
    color: #00A8D1 !important;
}

.comment-media img,
.comment-media video {
    transition: transform 0.2s ease-in-out;
}

.comment-media img:hover,
.comment-media video:hover {
    transform: scale(1.05);
}

.comment-attachments button {
    font-size: 1.2rem;
    transition: color 0.2s ease-in-out;
}

.comment-attachments button:hover {
    color: #00A8D1 !important;
}

#commentMediaPreview {
    border: 1px solid #e9ecef;
    border-radius: 12px;
}

.comment-input-container textarea {
    border: 1px solid #e9ecef;
    transition: border-color 0.2s ease-in-out;
}

.comment-input-container textarea:focus {
    border-color: #00A8D1;
    box-shadow: 0 0 0 0.2rem rgba(13, 110, 253, 0.25);
}

/* Professional Modal Styling */
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

.image-icon {
    width: 50px;
    height: 50px;
    background: rgba(255, 255, 255, 0.2);
    border-radius: 15px;
    display: flex;
    align-items: center;
    justify-content: center;
    backdrop-filter: blur(10px);
}

.image-icon i {
    font-size: 24px;
    color: white;
}

.image-modal-body {
    background: #f8f9fa;
    padding: 30px;
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

/* Reply Input Styling */
.reply-input-container {
    margin-top: 15px;
    padding-left: 20px;
    border-left: 3px solid #e9ecef;
}

.reply-input-wrapper {
    background: #f8f9fa;
    border-radius: 12px;
    padding: 12px;
    border: 1px solid #e9ecef;
}

.reply-input-wrapper textarea {
    border: none;
    background: transparent;
    resize: none;
    font-size: 14px;
    padding: 0;
    margin-bottom: 10px;
}

.reply-input-wrapper textarea:focus {
    box-shadow: none;
    outline: none;
}

.reply-attachments {
    display: flex;
    gap: 8px;
}

.reply-attachments button {
    width: 32px;
    height: 32px;
    border: none;
    background: #e9ecef;
    border-radius: 8px;
    color: #6c757d;
    font-size: 14px;
    transition: all 0.3s ease;
}

.reply-attachments button:hover {
    background: #00A8D1;
    color: white;
}

/* Responsive Design */
@media (max-width: 768px) {
    .comments-modal-header {
        padding: 15px 20px;
    }
    
    .comments-modal-body {
        padding: 20px;
    }
    
    .comments-modal-footer {
        padding: 15px 20px;
    }
    
    .comment-item {
        padding: 15px;
    }
    
    .comment-avatar img {
        width: 40px;
        height: 40px;
    }
    
    .reply-avatar img {
        width: 30px;
        height: 30px;
    }
}

/* Fix modal backdrop issues */
.modal-backdrop {
    z-index: 1040;
}

.modal {
    z-index: 1050;
}

/* Ensure proper modal cleanup */
body.modal-open {
    overflow: hidden;
}

/* Force remove backdrop when modal is closed */
.modal-backdrop.show {
    opacity: 0.5;
}

.modal-backdrop.fade {
    opacity: 0;
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

/* Responsive design */
@media (max-width: 768px) {
    .post-card {
        margin: 0 10px 20px 10px;
    }
    
    .dog-info-grid .col-6 {
        margin-bottom: 15px;
    }
    
    .carousel-control-prev,
    .carousel-control-next {
        width: 30px;
        height: 30px;
    }
    
    .carousel-control-prev {
        left: 10px;
    }
    
    .carousel-control-next {
        right: 10px;
    }
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
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
});

// Read more functionality
function toggleDescription() {
    const descriptionText = document.getElementById('description-text');
    const readMoreBtn = document.querySelector('.read-more');
    
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

// Image modal functionality
document.addEventListener('DOMContentLoaded', function() {
    // Handle carousel image clicks
    document.querySelectorAll('.carousel-image').forEach(img => {
        img.addEventListener('click', function() {
            const slideIndex = parseInt(this.getAttribute('data-slide'));
            
            // Set the modal carousel to the same slide
            const modalCarousel = document.getElementById('modalCarousel');
            const modalCarouselInstance = new bootstrap.Carousel(modalCarousel);
            modalCarouselInstance.to(slideIndex);
        });
    });
    
    // Handle modal show event to sync carousels
    const imageModal = document.getElementById('imageModal');
    imageModal.addEventListener('show.bs.modal', function (event) {
        const clickedImage = event.relatedTarget;
        if (clickedImage && clickedImage.classList.contains('carousel-image')) {
            const slideIndex = parseInt(clickedImage.getAttribute('data-slide'));
            const modalCarousel = document.getElementById('modalCarousel');
            const modalCarouselInstance = new bootstrap.Carousel(modalCarousel);
            modalCarouselInstance.to(slideIndex);
        }
    });
});

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

// Reply media upload functions
function handleReplyImageUpload(input, commentId) {
    if (input.files && input.files[0]) {
        const file = input.files[0];
        const reader = new FileReader();
        
        reader.onload = function(e) {
            const preview = document.getElementById(`replyMediaPreview${commentId}`);
            const previewImage = document.getElementById(`replyPreviewImage${commentId}`);
            const previewText = document.getElementById(`replyPreviewText${commentId}`);
            
            previewImage.src = e.target.result;
            previewImage.style.display = 'block';
            previewText.textContent = file.name;
            preview.style.display = 'block';
        };
        
        reader.readAsDataURL(file);
    }
}

function handleReplyVideoUpload(input, commentId) {
    if (input.files && input.files[0]) {
        const file = input.files[0];
        const url = URL.createObjectURL(file);
        
        const preview = document.getElementById(`replyMediaPreview${commentId}`);
        const previewVideo = document.getElementById(`replyPreviewVideo${commentId}`);
        const previewText = document.getElementById(`replyPreviewText${commentId}`);
        
        previewVideo.src = url;
        previewVideo.style.display = 'block';
        previewText.textContent = file.name;
        preview.style.display = 'block';
    }
}

function removeReplyMedia(commentId) {
    const preview = document.getElementById(`replyMediaPreview${commentId}`);
    const previewImage = document.getElementById(`replyPreviewImage${commentId}`);
    const previewVideo = document.getElementById(`replyPreviewVideo${commentId}`);
    const imageInput = document.getElementById(`replyImageInput${commentId}`);
    const videoInput = document.getElementById(`replyVideoInput${commentId}`);
    
    preview.style.display = 'none';
    previewImage.style.display = 'none';
    previewVideo.style.display = 'none';
    previewImage.src = '';
    previewVideo.src = '';
    imageInput.value = '';
    videoInput.value = '';
}

// Handle comment image clicks to open in modal
document.addEventListener('DOMContentLoaded', function() {
    document.querySelectorAll('[data-bs-target="#commentImageModal"]').forEach(img => {
        img.addEventListener('click', function() {
            const modalImage = document.getElementById('commentModalImage');
            modalImage.src = this.src;
        });
    });
    
    // Fix modal backdrop issue
    const commentImageModal = document.getElementById('commentImageModal');
    if (commentImageModal) {
        commentImageModal.addEventListener('hidden.bs.modal', function () {
            // Remove any remaining backdrop
            const backdrops = document.querySelectorAll('.modal-backdrop');
            backdrops.forEach(backdrop => backdrop.remove());
            
            // Remove modal-open class from body
            document.body.classList.remove('modal-open');
            document.body.style.overflow = '';
            document.body.style.paddingRight = '';
        });
        
        commentImageModal.addEventListener('show.bs.modal', function () {
            // Ensure previous modals are properly closed
            const existingBackdrops = document.querySelectorAll('.modal-backdrop');
            existingBackdrops.forEach(backdrop => backdrop.remove());
        });
    }
    
    // Also fix for main comments modal
    const commentsModal = document.getElementById('commentsModal');
    if (commentsModal) {
        commentsModal.addEventListener('hidden.bs.modal', function () {
            const backdrops = document.querySelectorAll('.modal-backdrop');
            backdrops.forEach(backdrop => backdrop.remove());
            document.body.classList.remove('modal-open');
            document.body.style.overflow = '';
            document.body.style.paddingRight = '';
        });
    }
    
    // Handle reply button clicks
    document.querySelectorAll('.reply-btn').forEach(button => {
        button.addEventListener('click', function() {
            const commentId = this.getAttribute('data-comment-id');
            const replyInput = document.getElementById(`reply-input-${commentId}`);
            
            // Hide all other reply inputs
            document.querySelectorAll('.reply-input-container').forEach(input => {
                if (input.id !== `reply-input-${commentId}`) {
                    input.style.display = 'none';
                }
            });
            
            // Toggle current reply input
            if (replyInput.style.display === 'none' || replyInput.style.display === '') {
                replyInput.style.display = 'block';
                replyInput.querySelector('textarea').focus();
            } else {
                replyInput.style.display = 'none';
            }
        });
    });
    
    // Handle cancel reply button clicks
    document.querySelectorAll('.cancel-reply-btn').forEach(button => {
        button.addEventListener('click', function() {
            const commentId = this.getAttribute('data-comment-id');
            const replyInput = document.getElementById(`reply-input-${commentId}`);
            
            // Hide reply input
            replyInput.style.display = 'none';
            
            // Clear the textarea
            const textarea = replyInput.querySelector('textarea');
            textarea.value = '';
            
            // Remove any media preview
            removeReplyMedia(commentId);
        });
    });
    
    // Handle post options dropdown
    const postOptionsBtn = document.querySelector('.post-options-btn');
    if (postOptionsBtn) {
        postOptionsBtn.addEventListener('click', function(e) {
            e.preventDefault();
            e.stopPropagation();
            console.log('Post options button clicked');
            
            const dropdown = this.nextElementSibling;
            if (dropdown) {
                dropdown.classList.toggle('show');
                console.log('Dropdown toggled');
            }
        });
    }
    
    // Handle dropdown items
    document.querySelectorAll('.post-options-dropdown .dropdown-item').forEach(item => {
        item.addEventListener('click', function(e) {
            e.preventDefault();
            const action = this.textContent.trim();
            
            switch(action) {
                case 'Save':
                    console.log('Post saved');
                    // Add save functionality here
                    break;
                case 'Hide':
                    console.log('Post hidden');
                    // Add hide functionality here
                    break;
                case 'Copy Link':
                    console.log('Link copied');
                    // Add copy link functionality here
                    break;
                case 'Interested':
                    console.log('Marked as interested');
                    // Add interested functionality here
                    break;
                case 'Not Interested':
                    console.log('Marked as not interested');
                    // Add not interested functionality here
                    break;
                case 'Snooze User for 30 Days':
                    console.log('User snoozed for 30 days');
                    // Add snooze functionality here
                    break;
                case 'Unfollow User':
                    console.log('User unfollowed');
                    // Add unfollow functionality here
                    break;
                case 'Report':
                    console.log('Post reported');
                    // Add report functionality here
                    break;
                case 'Block':
                    console.log('User blocked');
                    // Add block functionality here
                    break;
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
        const postOptionsDropdown = document.querySelector('.post-options-dropdown');
        const dropdown = document.querySelector('.post-options-menu');
        
        if (postOptionsDropdown && dropdown && !postOptionsDropdown.contains(e.target)) {
            dropdown.classList.remove('show');
        }
    });
});
</script>
