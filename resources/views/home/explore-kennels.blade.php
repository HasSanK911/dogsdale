<div class="container-fluid p-0 mt-3">
    <div class="explore-kennels-section bg-white rounded-3 p-4 mb-4">
        <!-- Header -->
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h5 class="mb-0 fw-medium text-dark">Explore Kennels</h5>
            <a href="#" class="text-decoration-none text-primary">See all</a>
        </div>

        <!-- Desktop View - Grid -->
        <div class="d-none d-md-block">
            <div class="row g-3">
                <!-- Kennel 1: Golden Paws Kennel -->
                <div class="col-md-4">
                    <div class="kennel-card bg-light rounded-3 p-3 shadow-sm h-100">
                        <div class="d-flex align-items-center mb-3 flex-column justify-content-center">
                            <img src="{{ asset('dogs/kennel1.png') }}" alt="Golden Paws Kennel" class="rounded-circle me-3 object-fit-cover" style="width: 120px; height: 120px; object-fit: cover;">
                            <div class="flex-grow-1">
                                <h6 class="mb-1 fw-semibold d-flex justify-content-center mt-3 text-dark">Golden Paws Kennel</h6>
                                <small class="text-muted">Specializes in Golden Retrievers</small>
                            </div>
                        </div>
                        <button class="btn btn-outline-secondary btn-sm w-100 rounded-4 p-2">Unfollow</button>
                    </div>
                </div>

                <!-- Kennel 2: Elite Canine Center -->
                <div class="col-md-4">
                    <div class="kennel-card bg-light rounded-3 p-3 shadow-sm h-100">
                        <div class="d-flex align-items-center mb-3 flex-column justify-content-center">
                            <img src="{{ asset('dogs/kennel2.png') }}" alt="Elite Canine Center" class="rounded-circle me-3 object-fit-cover" style="width: 120px; height: 120px; object-fit: cover;">
                            <div class="flex-grow-1">
                                <h6 class="mb-1 fw-semibold d-flex justify-content-center mt-3 text-dark">Elite Canine Center</h6>
                                <small class="text-muted">German Shepherds & Rottweilers</small>
                            </div>
                        </div>
                        <button class="btn btn-outline-primary btn-sm w-100 rounded-4 p-2">Following</button>
                    </div>
                </div>

                <!-- Kennel 3: Royal Dog House -->
                <div class="col-md-4">
                    <div class="kennel-card bg-light rounded-3 p-3 shadow-sm h-100">
                        <div class="d-flex align-items-center mb-3 flex-column justify-content-center">
                            <img src="{{ asset('dogs/kennel3.png') }}" alt="Royal Dog House" class="rounded-circle me-3 object-fit-cover" style="width: 120px; height: 120px; object-fit: cover;">
                            <div class="flex-grow-1">
                                <h6 class="mb-1 fw-semibold d-flex justify-content-center mt-3 text-dark">Royal Dog House</h6>
                                <small class="text-muted">Premium Labrador Breeding</small>
                            </div>
                        </div>
                        <button class="btn btn-primary btn-sm w-100 rounded-4 p-2 text-white">Follow</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Mobile View - Carousel -->
        <div class="d-block d-md-none">
            <div id="exploreKennelsCarousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <!-- Kennel 1: Golden Paws Kennel -->
                    <div class="carousel-item active">
                        <div class="kennel-card bg-light rounded-3 p-3 shadow-sm h-100">
                            <div class="d-flex align-items-center mb-3 flex-column justify-content-center">
                                <img src="{{ asset('dogs/kennel1.png') }}" alt="Golden Paws Kennel" class="rounded-circle me-3 object-fit-cover" style="width: 120px; height: 120px; object-fit: cover;">
                                <div class="flex-grow-1">
                                    <h6 class="mb-1 fw-semibold d-flex justify-content-center mt-3 text-dark">Golden Paws Kennel</h6>
                                    <small class="text-muted">Specializes in Golden Retrievers</small>
                                </div>
                            </div>
                            <button class="btn btn-outline-secondary btn-sm w-100 rounded-4 p-2">Unfollow</button>
                        </div>
                    </div>

                    <!-- Kennel 2: Elite Canine Center -->
                    <div class="carousel-item">
                        <div class="kennel-card bg-light rounded-3 p-3 shadow-sm h-100">
                            <div class="d-flex align-items-center mb-3 flex-column justify-content-center">
                                <img src="{{ asset('dogs/kennel2.png') }}" alt="Elite Canine Center" class="rounded-circle me-3 object-fit-cover" style="width: 120px; height: 120px; object-fit: cover;">
                                <div class="flex-grow-1">
                                    <h6 class="mb-1 fw-semibold d-flex justify-content-center mt-3 text-dark">Elite Canine Center</h6>
                                    <small class="text-muted">German Shepherds & Rottweilers</small>
                                </div>
                            </div>
                            <button class="btn btn-outline-primary btn-sm w-100 rounded-4 p-2">Following</button>
                        </div>
                    </div>

                    <!-- Kennel 3: Royal Dog House -->
                    <div class="carousel-item">
                        <div class="kennel-card bg-light rounded-3 p-3 shadow-sm h-100">
                            <div class="d-flex align-items-center mb-3 flex-column justify-content-center">
                                <img src="{{ asset('dogs/kennel3.png') }}" alt="Royal Dog House" class="rounded-circle me-3 object-fit-cover" style="width: 120px; height: 120px; object-fit: cover;">
                                <div class="flex-grow-1">
                                    <h6 class="mb-1 fw-semibold d-flex justify-content-center mt-3 text-dark">Royal Dog House</h6>
                                    <small class="text-muted">Premium Labrador Breeding</small>
                                </div>
                            </div>
                            <button class="btn btn-primary btn-sm w-100 rounded-4 p-2 text-white">Follow</button>
                        </div>
                    </div>
                </div>

                <!-- Carousel Controls -->
                <button class="carousel-control-prev" type="button" data-bs-target="#exploreKennelsCarousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#exploreKennelsCarousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>

                <!-- Carousel Indicators -->
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#exploreKennelsCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#exploreKennelsCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#exploreKennelsCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
/* Minimal custom CSS - mostly using Bootstrap classes */
.explore-kennels-section {
    border-color: #0d6efd !important;
}

.kennel-card {
    transition: transform 0.2s ease-in-out;
}

.kennel-card:hover {
    transform: translateY(-2px);
}

/* Carousel customization for mobile */
@media (max-width: 767.98px) {
    .carousel-control-prev,
    .carousel-control-next {
        width: 30px;
        height: 30px;
        top: 50%;
        transform: translateY(-50%);
        background-color: rgba(0, 0, 0, 0.1);
        border-radius: 50%;
    }
    
    .carousel-control-prev {
        left: 10px;
    }
    
    .carousel-control-next {
        right: 10px;
    }
    
    .carousel-indicators {
        margin-bottom: 0;
    }
    
    .carousel-indicators button {
        width: 8px;
        height: 8px;
        border-radius: 50%;
        margin: 0 4px;
    }
}
</style>
