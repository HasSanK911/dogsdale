<div class="">
    <!-- Create Post Section -->
    <div class="create-post-container">
        <div class="create-post-card">
            <!-- Header Section -->
            <div class="post-header">
                <div class="user-info">
                    <img src="{{ asset('dogs/mayday.jpeg') }}" alt="Ali Hassan" class="user-avatar">
                    <a href="" class="user-name text-decoration-none text-dark">Ali Hassan</a>
                </div>
                <div class="post-type-selector">
                    <div class="dropdown">
                        <button class="dropdown-toggle" type="button" id="postTypeDropdown" aria-expanded="false">
                            <span class="dropdown-text">Advance Posts</span>
                            <!-- <svg class="dropdown-arrow" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <polyline points="6,9 12,15 18,9"/>
                            </svg> -->
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="postTypeDropdown">
                            <li><a class="dropdown-item active" href="#" data-type="random">Random Post</a></li>
                            <li><a class="dropdown-item" href="#" data-type="selling">Selling</a></li>
                            <li><a class="dropdown-item" href="#" data-type="buying">Buying</a></li>
                            <li><a class="dropdown-item" href="#" data-type="stud">Stud Dogs</a></li>
                            <li><a class="dropdown-item" href="#" data-type="frozensemens">Frozen Semens</a></li>
                        </ul>
                    </div>
                    <div class="selected-type">
                        <span class="type-indicator">Random Post</span>
                    </div>
                </div>
            </div>
            
            <!-- Content Input Section (Only for Random Post) -->
            <div class="post-content" id="randomPostContent">
                <textarea class="post-textarea form-control" placeholder="Tell something about your dog.." rows="4"></textarea>
            </div>
            
            <!-- Selling Form Section (Hidden by default) -->
            <div class="selling-form-section" id="sellingForm" style="display: none;">
                
                <div class="row g-3">
                    <!-- Row 1: Dog Name -->
                    <div class="col-12">
                        <label for="dogName" class="form-label">Dog Name</label>
                        <input type="text" id="dogName" class="form-control" placeholder="Enter dog's name">
                    </div>
                    
                    <!-- Row 2: Breed Name & Bloodline -->
                    <div class="col-md-6">
                        <label for="breedName" class="form-label">Breed Name <span class="text-danger">*</span></label>
                        <input type="text" id="breedName" class="form-control" placeholder="Enter breed name" required>
                    </div>
                    <div class="col-md-6">
                        <label for="bloodline" class="form-label">Bloodline <span class="text-danger">*</span></label>
                        <input type="text" id="bloodline" class="form-control" placeholder="Enter bloodline" required>
                    </div>
                    
                    <!-- Row 3: Age & Price -->
                    <div class="col-md-6">
                        <label for="age" class="form-label">Age <span class="text-danger">*</span></label>
                        <input type="number" id="age" class="form-control" placeholder="Enter age" required>
                    </div>
                    <div class="col-md-6">
                        <label for="price" class="form-label">Price <span class="text-danger">*</span></label>
                        <input type="number" id="price" class="form-control" placeholder="Enter price" required>
                    </div>
                    
                    <!-- Row 4: Gender & Status -->
                    <div class="col-md-6">
                        <label for="gender" class="form-label">Gender</label>
                        <select id="gender" class="form-select">
                            <option value="">Select Gender</option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label for="status" class="form-label">Status</label>
                        <select id="status" class="form-select">
                            <option value="">Select Status</option>
                            <option value="available">Available</option>
                            <option value="sold">Sold</option>
                            <option value="reserved">Reserved</option>
                        </select>
                    </div>
                    
                    <!-- Row 5: Registration Number -->
                    <div class="col-12">
                        <label for="registrationNumber" class="form-label">Registration Number (Optional)</label>
                        <input type="text" id="registrationNumber" class="form-control" placeholder="Enter registration number">
                    </div>
                    
                    <!-- Row 6: Location -->
                    <div class="col-md-4">
                        <label for="city" class="form-label">City</label>
                        <input type="text" id="city" class="form-control" placeholder="Enter city">
                    </div>
                    <div class="col-md-4">
                        <label for="state" class="form-label">State</label>
                        <input type="text" id="state" class="form-control" placeholder="Enter state">
                    </div>
                    <div class="col-md-4">
                        <label for="country" class="form-label">Country</label>
                        <select id="country" class="form-select">
                            <option value="">Select Country</option>
                        </select>
                    </div>
                    
                    <!-- Row 7: Pedigree Link -->
                    <div class="col-12">
                        <label for="pedigreeLink" class="form-label">Pedigree Link</label>
                        <input type="url" id="pedigreeLink" class="form-control" placeholder="Enter pedigree link">
                    </div>
                    
                    <!-- Row 8: Description -->
                    <div class="col-12">
                        <label for="description" class="form-label">Description</label>
                        <textarea id="description" class="form-control" rows="4" placeholder="Enter detailed description about the dog"></textarea>
                    </div>
                </div>
            </div>
            
            <!-- Buying Form Section (Hidden by default) -->
            <div class="buying-form-section" id="buyingForm" style="display: none;">
                <div class="row g-3">
                    <!-- Row 1: Breed Name & Bloodline -->
                    <div class="col-md-6">
                        <label for="buyBreedName" class="form-label">Breed Name <span class="text-danger">*</span></label>
                        <input type="text" id="buyBreedName" class="form-control" placeholder="Enter breed name" required>
                    </div>
                    <div class="col-md-6">
                        <label for="buyBloodline" class="form-label">Bloodline <span class="text-danger">*</span></label>
                        <input type="text" id="buyBloodline" class="form-control" placeholder="Enter bloodline" required>
                    </div>
                    
                    <!-- Row 2: Age & Price -->
                    <div class="col-md-6">
                        <label for="buyAge" class="form-label">Age <span class="text-danger">*</span></label>
                        <input type="number" id="buyAge" class="form-control" placeholder="Enter age" required>
                    </div>
                    <div class="col-md-6">
                        <label for="buyPrice" class="form-label">Price <span class="text-danger">*</span></label>
                        <input type="number" id="buyPrice" class="form-control" placeholder="Enter price" required>
                    </div>
                    
                    <!-- Row 3: Location -->
                    <div class="col-md-4">
                        <label for="buyCity" class="form-label">Your City <span class="text-danger">*</span></label>
                        <input type="text" id="buyCity" class="form-control" placeholder="Enter your city" required>
                    </div>
                    <div class="col-md-4">
                        <label for="buyState" class="form-label">Your State</label>
                        <input type="text" id="buyState" class="form-control" placeholder="Enter your state">
                    </div>
                    <div class="col-md-4">
                        <label for="buyCountry" class="form-label">Country <span class="text-danger">*</span></label>
                        <select id="buyCountry" class="form-select">
                            <option value="">Select Country</option>
                        </select>
                    </div>
                    
                    <!-- Row 4: Description -->
                    <div class="col-12">
                        <label for="buyDescription" class="form-label">Description <span class="text-danger">*</span></label>
                        <textarea id="buyDescription" class="form-control" rows="4" placeholder="Describe what you're looking for" required></textarea>
                    </div>
                </div>
            </div>
            
            <!-- Stud Dog Form Section (Hidden by default) -->
            <div class="stud-form-section" id="studForm" style="display: none;">
                <div class="row g-3">
                    <!-- Row 1: Dog Name -->
                    <div class="col-12">
                        <label for="studDogName" class="form-label">Dog Name <span class="text-danger">*</span></label>
                        <input type="text" id="studDogName" class="form-control" placeholder="Enter dog's name" required>
                    </div>
                    
                    <!-- Row 2: Breed Name & Bloodline -->
                    <div class="col-md-6">
                        <label for="studBreedName" class="form-label">Breed Name <span class="text-danger">*</span></label>
                        <input type="text" id="studBreedName" class="form-control" placeholder="Enter breed name" required>
                    </div>
                    <div class="col-md-6">
                        <label for="studBloodline" class="form-label">Bloodline <span class="text-danger">*</span></label>
                        <input type="text" id="studBloodline" class="form-control" placeholder="Enter bloodline" required>
                    </div>
                    
                    <!-- Row 3: Age & Price per Breeding Cycle -->
                    <div class="col-md-6">
                        <label for="studAge" class="form-label">Age <span class="text-danger">*</span></label>
                        <input type="number" id="studAge" class="form-control" placeholder="Enter age" required>
                    </div>
                    <div class="col-md-6">
                        <label for="studPrice" class="form-label">Price per Breeding Cycle <span class="text-danger">*</span></label>
                        <input type="number" id="studPrice" class="form-control" placeholder="Enter price per breeding cycle" required>
                    </div>
                    
                    <!-- Row 4: Sticks per Breeding Cycle & Status -->
                    <div class="col-md-6">
                        <label for="studSticks" class="form-label">Sticks per Breeding Cycle <span class="text-danger">*</span></label>
                        <input type="number" id="studSticks" class="form-control" placeholder="Enter number of sticks" required>
                    </div>
                    <div class="col-md-6">
                        <label for="studStatus" class="form-label">Status <span class="text-danger">*</span></label>
                        <select id="studStatus" class="form-select" required>
                            <option value="">Select Status</option>
                            <option value="available">Available</option>
                            <option value="busy">Busy</option>
                            <option value="retired">Retired</option>
                        </select>
                    </div>
                    
                    <!-- Row 5: Location -->
                    <div class="col-md-4">
                        <label for="studCity" class="form-label">City <span class="text-danger">*</span></label>
                        <input type="text" id="studCity" class="form-control" placeholder="Enter city" required>
                    </div>
                    <div class="col-md-4">
                        <label for="studState" class="form-label">State</label>
                        <input type="text" id="studState" class="form-control" placeholder="Enter state">
                    </div>
                    <div class="col-md-4">
                        <label for="studCountry" class="form-label">Country <span class="text-danger">*</span></label>
                        <select id="studCountry" class="form-select" required>
                            <option value="">Select Country</option>
                        </select>
                    </div>
                    
                    <!-- Row 6: Pedigree Link -->
                    <div class="col-12">
                        <label for="studPedigreeLink" class="form-label">Pedigree Link</label>
                        <input type="url" id="studPedigreeLink" class="form-control" placeholder="Enter pedigree link">
                    </div>
                    
                    <!-- Row 7: Description -->
                    <div class="col-12">
                        <label for="studDescription" class="form-label">Description <span class="text-danger">*</span></label>
                        <textarea id="studDescription" class="form-control" rows="4" placeholder="Describe the stud dog's characteristics, achievements, and breeding history" required></textarea>
                    </div>
                </div>
            </div>
            
            <!-- Frozen Semens Form Section (Hidden by default) -->
            <div class="frozen-form-section" id="frozenForm" style="display: none;">
                <div class="row g-3">
                    <!-- Row 1: Dog Name -->
                    <div class="col-12">
                        <label for="frozenDogName" class="form-label">Dog Name <span class="text-danger">*</span></label>
                        <input type="text" id="frozenDogName" class="form-control" placeholder="Enter dog's name" required>
                    </div>
                    
                    <!-- Row 2: Breed Name & Bloodline -->
                    <div class="col-md-6">
                        <label for="frozenBreedName" class="form-label">Breed Name <span class="text-danger">*</span></label>
                        <input type="text" id="frozenBreedName" class="form-control" placeholder="Enter breed name" required>
                    </div>
                    <div class="col-md-6">
                        <label for="frozenBloodline" class="form-label">Bloodline <span class="text-danger">*</span></label>
                        <input type="text" id="frozenBloodline" class="form-control" placeholder="Enter bloodline" required>
                    </div>
                    
                    <!-- Row 3: Price per 5cc & Stored Since -->
                    <div class="col-md-6">
                        <label for="frozenPrice" class="form-label">Price per 5cc <span class="text-danger">*</span></label>
                        <input type="number" id="frozenPrice" class="form-control" placeholder="Enter price per 5cc" required>
                    </div>
                    <div class="col-md-6">
                        <label for="frozenStoredSince" class="form-label">Stored Since <span class="text-danger">*</span></label>
                        <input type="date" id="frozenStoredSince" class="form-control" required>
                    </div>
                    
                    <!-- Row 4: Status -->
                    <div class="col-md-12">
                        <label for="frozenStatus" class="form-label">Status <span class="text-danger">*</span></label>
                        <select id="frozenStatus" class="form-select" required>
                            <option value="">Select Status</option>
                            <option value="available">Available</option>
                            <option value="sold">Sold</option>
                            <option value="reserved">Reserved</option>
                        </select>
                    </div>
                    
                    <!-- Row 5: Location -->
                    <div class="col-md-4">
                        <label for="frozenCity" class="form-label">City <span class="text-danger">*</span></label>
                        <input type="text" id="frozenCity" class="form-control" placeholder="Enter city" required>
                    </div>
                    <div class="col-md-4">
                        <label for="frozenState" class="form-label">State</label>
                        <input type="text" id="frozenState" class="form-control" placeholder="Enter state">
                    </div>
                    <div class="col-md-4">
                        <label for="frozenCountry" class="form-label">Country <span class="text-danger">*</span></label>
                        <select id="frozenCountry" class="form-select" required>
                            <option value="">Select Country</option>
                        </select>
                    </div>
                    
                    <!-- Row 6: Pedigree Link -->
                    <div class="col-12">
                        <label for="frozenPedigreeLink" class="form-label">Pedigree Link (Optional)</label>
                        <input type="url" id="frozenPedigreeLink" class="form-control" placeholder="Enter pedigree link">
                    </div>
                    
                    <!-- Row 7: Description -->
                    <div class="col-12">
                        <label for="frozenDescription" class="form-label">Description <span class="text-danger">*</span></label>
                        <textarea id="frozenDescription" class="form-control" rows="4" placeholder="Describe the frozen semen quality, storage conditions, and any additional information" required></textarea>
                    </div>
                </div>
            </div>
            
            <!-- Action Bar -->
            <div class="post-actions mt-3">
                <div class="attachment-options">
                    <button class="attachment-btn" type="button" title="Attach File" id="fileUploadBtn">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M21.44 11.05l-9.19 9.19a6 6 0 0 1-8.49-8.49l9.19-9.19a4 4 0 0 1 5.66 5.66L9.64 16.2a2 2 0 0 1-2.83-2.83l8.49-8.49"/>
                        </svg>
                    </button>
                    <button class="attachment-btn" type="button" title="Add Photo/Video" id="mediaUploadBtn">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <rect x="3" y="3" width="18" height="18" rx="2" ry="2"/>
                            <circle cx="8.5" cy="8.5" r="1.5"/>
                            <polyline points="21,15 16,10 5,21"/>
                        </svg>
                    </button>
                    
                    <!-- Hidden file inputs -->
                    <input type="file" id="fileInput" accept=".doc,.docx,.pdf,.ppt,.pptx,.xls,.xlsx,.txt" style="display: none;">
                    <input type="file" id="mediaInput" accept="image/*,video/*" style="display: none;">
                    
                </div>
                <button class="btn btn-primary px-4 text-white" id="postBtn" type="button">
                    Post
                </button>
            </div>
        </div>
    </div>
</div>

<style>
     
    .create-post-card {
        background: white;
        border-radius: 12px;
        padding: 20px;
    }
    
    /* Header Section */
    .post-header {
        display: flex;
        justify-content: space-between;
        align-items: flex-start;
        margin-bottom: 20px;
    }
    
    .user-info {
        display: flex;
        align-items: center;
        gap: 12px;
    }
    
    .user-avatar {
        width: 50px;
        height: 50px;
        border-radius: 50%;
        object-fit: cover;
        border: 2px solid #e9ecef;
    }
    
    .user-name {
        font-weight: 500;
        font-size: 18px;
        color: #1a1a1a;
    }
    
    .post-type-selector {
        display: flex;
        flex-direction: column;
        align-items: flex-end;
        gap: 8px;
    }
    
    .dropdown {
        position: relative;
    }
    
    .dropdown-toggle {
        background: none;
        border: none;
        color: #6c757d;
        font-size: 14px;
        display: flex;
        align-items: center;
        gap: 6px;
        cursor: pointer;
        padding: 4px 8px;
        border-radius: 6px;
        transition: all 0.3s ease;
    }
    
    .dropdown-toggle:hover {
        background-color: #f8f9fa;
        color: #495057;
    }
    
    .dropdown-arrow {
        transition: transform 0.3s ease;
    }
    
    .dropdown-toggle[aria-expanded="true"] .dropdown-arrow {
        transform: rotate(180deg);
    }
    
    .dropdown-menu {
        position: absolute;
        top: 100%;
        right: 0;
        background: white;
        border: 1px solid #e9ecef;
        border-radius: 8px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
        min-width: 200px;
        z-index: 1000;
        padding: 8px 0;
        margin-top: 4px;
        display: none;
        list-style: none;
    }
    
    .dropdown-menu.show {
        display: block;
    }
    
    .dropdown-item {
        display: block;
        padding: 10px 16px;
        color: #495057;
        text-decoration: none;
        font-size: 14px;
        transition: all 0.3s ease;
        border: none;
        background: none;
        width: 100%;
        text-align: left;
    }
    
    .dropdown-item:hover {
        background-color: #f8f9fa;
        color: #00A8D1;
    }
    
    .dropdown-item.active {
        background-color: #e3f2fd;
        color: #00A8D1;
        font-weight: 500;
    }
    
    .selected-type {
        margin-top: 4px;
    }
    
    .type-indicator {
        background: linear-gradient(135deg, #ff6b35 0%, #f7931e 100%);
        color: white;
        padding: 4px 12px;
        border-radius: 20px;
        font-size: 12px;
        font-weight: 500;
        display: inline-block;
    }
    
    /* Content Section */
    .post-content {
        margin-bottom: 20px;
    }
    
    .post-textarea {
        width: 100%;
        border: 1px solid #e9ecef;
        border-radius: 8px;
        padding: 16px;
        font-size: 16px;
        font-family: 'Poppins', sans-serif;
        resize: vertical;
        min-height: 100px;
        background-color: #f8f9fa;
        transition: all 0.3s ease;
    }
    
    .post-textarea:focus {
        outline: none;
        border-color: #00A8D1;
        background-color: white;
        box-shadow: 0 0 0 3px rgba(0, 168, 209, 0.1);
    }
    
    .post-textarea::placeholder {
        color: #6c757d;
        font-style: italic;
    }
    
    /* Action Bar */
    .post-actions {
        display: flex;
        justify-content: space-between;
        align-items: center;
    }
    
    .attachment-options {
        display: flex;
        gap: 12px;
        position: relative;
    }
    
    .attachment-btn {
        background: none;
        border: none;
        color: #6c757d;
        padding: 8px;
        border-radius: 6px;
        cursor: pointer;
        transition: all 0.3s ease;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    
    .attachment-btn:hover {
        background-color: #f8f9fa;
        color: #00A8D1;
        transform: scale(1.1);
    }
    
    .post-btn {
        background: #00A8D1;
        color: white;
        border: none;
        padding: 12px 24px;
        border-radius: 8px;
        font-weight: 600;
        font-size: 14px;
        cursor: pointer;
        transition: all 0.3s ease;
        min-width: 80px;
    }
    
    .post-btn:hover {
        background: linear-gradient(135deg, #0088B8 0%, #006699 100%);
        transform: translateY(-1px);
        box-shadow: 0 4px 12px rgba(0, 168, 209, 0.3);
    }
    
    .post-btn:active {
        transform: translateY(0);
    }
    
    /* Minimal custom styles - mostly using Bootstrap */
    .post-textarea {
        min-height: 100px;
        resize: vertical;
    }
    
    
    /* File upload preview */
    .file-preview {
        margin-bottom: 10px;
        padding: 8px;
        background: #f8f9fa;
        border-radius: 4px;
        border: 1px solid #dee2e6;
    }
    
    .file-preview-item {
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 4px 0;
        border-bottom: 1px solid #dee2e6;
    }
    
    .file-preview-item:last-child {
        border-bottom: none;
    }
    
    .file-info {
        display: flex;
        align-items: center;
        gap: 8px;
    }
    
    .file-icon {
        width: 20px;
        height: 20px;
        background: #6c757d;
        border-radius: 2px;
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        font-size: 12px;
    }
    
    .file-name {
        font-size: 14px;
        color: #333;
    }
    
    .file-remove {
        background: none;
        border: none;
        color: #dc3545;
        cursor: pointer;
        font-size: 16px;
        padding: 0;
        width: 20px;
        height: 20px;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    
    .file-remove:hover {
        color: #c82333;
    }
    
    /* Responsive Design */
    @media (max-width: 768px) {
        .create-post-container {
            padding: 15px;
        }
        
        .create-post-card {
            padding: 15px;
        }
        
        .post-header {
            flex-direction: column;
            gap: 15px;
            align-items: flex-start;
        }
        
        .post-type-selector {
            align-items: flex-start;
        }
        
        .post-actions {
            flex-direction: column;
            gap: 15px;
            align-items: stretch;
        }
        
        .attachment-options {
            justify-content: center;
        }
        
        .post-btn {
            width: 100%;
        }
        
        .form-grid {
            grid-template-columns: 1fr;
        }
        
        .selling-form-section {
            padding: 15px;
        }
    }
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const dropdownToggle = document.getElementById('postTypeDropdown');
    const dropdownItems = document.querySelectorAll('.dropdown-item');
    const typeIndicator = document.querySelector('.type-indicator');
    const textarea = document.querySelector('.post-textarea');
    const sellingForm = document.getElementById('sellingForm');
    const buyingForm = document.getElementById('buyingForm');
    const studForm = document.getElementById('studForm');
    const frozenForm = document.getElementById('frozenForm');
    const randomPostContent = document.getElementById('randomPostContent');
    const countrySelect = document.getElementById('country');
    const buyCountrySelect = document.getElementById('buyCountry');
    const studCountrySelect = document.getElementById('studCountry');
    const frozenCountrySelect = document.getElementById('frozenCountry');
    
    // Handle dropdown item clicks
    dropdownItems.forEach(item => {
        item.addEventListener('click', function(e) {
            e.preventDefault();
            
            // Remove active class from all items
            dropdownItems.forEach(i => i.classList.remove('active'));
            
            // Add active class to clicked item
            this.classList.add('active');
            
            // Update type indicator
            const type = this.getAttribute('data-type');
            const text = this.textContent;
            typeIndicator.textContent = text;
            
            // Update placeholder text based on post type
            updatePlaceholder(type);
            
            // Show/hide forms based on selection
            toggleFormVisibility(type);
            
            // Close dropdown
            const dropdownMenu = dropdownToggle.nextElementSibling;
            dropdownMenu.classList.remove('show');
            dropdownToggle.setAttribute('aria-expanded', 'false');
        });
    });
    
    // Update placeholder text based on post type
    function updatePlaceholder(type) {
        const placeholders = {
            'random': 'Tell something about your dog..',
            'buying': 'What kind of dog are you looking to buy?',
            'selling': 'Tell us about the dog you want to sell..',
            'frozensemens': 'Share details about artificial insemination services..',
            'stud': 'Describe your stud service offerings..'
        };
        
        textarea.placeholder = placeholders[type] || placeholders['random'];
    }
    
    // Toggle form visibility based on post type
    function toggleFormVisibility(type) {
        // Hide all forms first
        sellingForm.style.display = 'none';
        buyingForm.style.display = 'none';
        studForm.style.display = 'none';
        frozenForm.style.display = 'none';
        randomPostContent.style.display = 'none';
        
        if (type === 'selling') {
            sellingForm.style.display = 'block';
            // Initialize Select2 for selling country dropdown
            setTimeout(() => {
                initializeCountrySelect2();
            }, 100);
        } else if (type === 'buying') {
            buyingForm.style.display = 'block';
            // Initialize Select2 for buying country dropdown
            setTimeout(() => {
                initializeBuyCountrySelect2();
            }, 100);
        } else if (type === 'stud') {
            studForm.style.display = 'block';
            // Initialize Select2 for stud country dropdown
            setTimeout(() => {
                initializeStudCountrySelect2();
            }, 100);
        } else if (type === 'frozensemens') {
            frozenForm.style.display = 'block';
            // Initialize Select2 for frozen country dropdown
            setTimeout(() => {
                initializeFrozenCountrySelect2();
            }, 100);
        } else if (type === 'random') {
            randomPostContent.style.display = 'block';
        }
    }
    
    // Initialize Select2 for country dropdown
    function initializeCountrySelect2() {
        // Check if Select2 is available
        if (typeof $.fn.select2 !== 'undefined') {
            // Destroy existing Select2 if it exists
            if ($(countrySelect).hasClass('select2-hidden-accessible')) {
                $(countrySelect).select2('destroy');
            }
            
            // Load countries first, then initialize Select2
            loadCountriesFallback().then(() => {
                $(countrySelect).select2({
                    placeholder: 'Select Country',
                    allowClear: true,
                    width: '100%'
                });
            });
        } else {
            // Fallback: Load countries without Select2
            loadCountriesFallback();
        }
    }
    
    // Initialize Select2 for buying country dropdown
    function initializeBuyCountrySelect2() {
        // Check if Select2 is available
        if (typeof $.fn.select2 !== 'undefined') {
            // Destroy existing Select2 if it exists
            if ($(buyCountrySelect).hasClass('select2-hidden-accessible')) {
                $(buyCountrySelect).select2('destroy');
            }
            
            // Load countries first, then initialize Select2
            loadBuyCountriesFallback().then(() => {
                $(buyCountrySelect).select2({
                    placeholder: 'Select Country',
                    allowClear: true,
                    width: '100%'
                });
            });
        } else {
            // Fallback: Load countries without Select2
            loadBuyCountriesFallback();
        }
    }
    
    // Initialize Select2 for stud country dropdown
    function initializeStudCountrySelect2() {
        // Check if Select2 is available
        if (typeof $.fn.select2 !== 'undefined') {
            // Destroy existing Select2 if it exists
            if ($(studCountrySelect).hasClass('select2-hidden-accessible')) {
                $(studCountrySelect).select2('destroy');
            }
            
            // Load countries first, then initialize Select2
            loadStudCountriesFallback().then(() => {
                $(studCountrySelect).select2({
                    placeholder: 'Select Country',
                    allowClear: true,
                    width: '100%'
                });
            });
        } else {
            // Fallback: Load countries without Select2
            loadStudCountriesFallback();
        }
    }
    
    // Initialize Select2 for frozen country dropdown
    function initializeFrozenCountrySelect2() {
        // Check if Select2 is available
        if (typeof $.fn.select2 !== 'undefined') {
            // Destroy existing Select2 if it exists
            if ($(frozenCountrySelect).hasClass('select2-hidden-accessible')) {
                $(frozenCountrySelect).select2('destroy');
            }
            
            // Load countries first, then initialize Select2
            loadFrozenCountriesFallback().then(() => {
                $(frozenCountrySelect).select2({
                    placeholder: 'Select Country',
                    allowClear: true,
                    width: '100%'
                });
            });
        } else {
            // Fallback: Load countries without Select2
            loadFrozenCountriesFallback();
        }
    }
    
    // Fallback function to load countries without Select2
    function loadCountriesFallback() {
        return fetch('/filters/countries')
            .then(response => response.json())
            .then(data => {
                countrySelect.innerHTML = '<option value="">Select Country</option>';
                Object.entries(data).forEach(([key, value]) => {
                    const option = document.createElement('option');
                    option.value = key;
                    option.textContent = value;
                    countrySelect.appendChild(option);
                });
            })
            .catch(error => {
                console.error('Error loading countries:', error);
                // Add some default countries as fallback
                const defaultCountries = {
                    'US': 'United States',
                    'CA': 'Canada',
                    'GB': 'United Kingdom',
                    'AU': 'Australia',
                    'DE': 'Germany',
                    'FR': 'France',
                    'IT': 'Italy',
                    'ES': 'Spain',
                    'NL': 'Netherlands',
                    'BE': 'Belgium'
                };
                
                countrySelect.innerHTML = '<option value="">Select Country</option>';
                Object.entries(defaultCountries).forEach(([key, value]) => {
                    const option = document.createElement('option');
                    option.value = key;
                    option.textContent = value;
                    countrySelect.appendChild(option);
                });
            });
    }
    
    // Fallback function to load countries for buying form
    function loadBuyCountriesFallback() {
        return fetch('/filters/countries')
            .then(response => response.json())
            .then(data => {
                buyCountrySelect.innerHTML = '<option value="">Select Country</option>';
                Object.entries(data).forEach(([key, value]) => {
                    const option = document.createElement('option');
                    option.value = key;
                    option.textContent = value;
                    buyCountrySelect.appendChild(option);
                });
            })
            .catch(error => {
                console.error('Error loading countries for buying:', error);
                // Add some default countries as fallback
                const defaultCountries = {
                    'US': 'United States',
                    'CA': 'Canada',
                    'GB': 'United Kingdom',
                    'AU': 'Australia',
                    'DE': 'Germany',
                    'FR': 'France',
                    'IT': 'Italy',
                    'ES': 'Spain',
                    'NL': 'Netherlands',
                    'BE': 'Belgium'
                };
                
                buyCountrySelect.innerHTML = '<option value="">Select Country</option>';
                Object.entries(defaultCountries).forEach(([key, value]) => {
                    const option = document.createElement('option');
                    option.value = key;
                    option.textContent = value;
                    buyCountrySelect.appendChild(option);
                });
            });
    }
    
    // Fallback function to load countries for stud form
    function loadStudCountriesFallback() {
        return fetch('/filters/countries')
            .then(response => response.json())
            .then(data => {
                studCountrySelect.innerHTML = '<option value="">Select Country</option>';
                Object.entries(data).forEach(([key, value]) => {
                    const option = document.createElement('option');
                    option.value = key;
                    option.textContent = value;
                    studCountrySelect.appendChild(option);
                });
            })
            .catch(error => {
                console.error('Error loading countries for stud:', error);
                // Add some default countries as fallback
                const defaultCountries = {
                    'US': 'United States',
                    'CA': 'Canada',
                    'GB': 'United Kingdom',
                    'AU': 'Australia',
                    'DE': 'Germany',
                    'FR': 'France',
                    'IT': 'Italy',
                    'ES': 'Spain',
                    'NL': 'Netherlands',
                    'BE': 'Belgium'
                };
                
                studCountrySelect.innerHTML = '<option value="">Select Country</option>';
                Object.entries(defaultCountries).forEach(([key, value]) => {
                    const option = document.createElement('option');
                    option.value = key;
                    option.textContent = value;
                    studCountrySelect.appendChild(option);
                });
            });
    }
    
    // Fallback function to load countries for frozen form
    function loadFrozenCountriesFallback() {
        return fetch('/filters/countries')
            .then(response => response.json())
            .then(data => {
                frozenCountrySelect.innerHTML = '<option value="">Select Country</option>';
                Object.entries(data).forEach(([key, value]) => {
                    const option = document.createElement('option');
                    option.value = key;
                    option.textContent = value;
                    frozenCountrySelect.appendChild(option);
                });
            })
            .catch(error => {
                console.error('Error loading countries for frozen:', error);
                // Add some default countries as fallback
                const defaultCountries = {
                    'US': 'United States',
                    'CA': 'Canada',
                    'GB': 'United Kingdom',
                    'AU': 'Australia',
                    'DE': 'Germany',
                    'FR': 'France',
                    'IT': 'Italy',
                    'ES': 'Spain',
                    'NL': 'Netherlands',
                    'BE': 'Belgium'
                };
                
                frozenCountrySelect.innerHTML = '<option value="">Select Country</option>';
                Object.entries(defaultCountries).forEach(([key, value]) => {
                    const option = document.createElement('option');
                    option.value = key;
                    option.textContent = value;
                    frozenCountrySelect.appendChild(option);
                });
            });
    }
    
    // Handle dropdown toggle
    dropdownToggle.addEventListener('click', function(e) {
        e.preventDefault();
        e.stopPropagation();
        
        const dropdownMenu = this.nextElementSibling;
        const isExpanded = this.getAttribute('aria-expanded') === 'true';
        
        // Close all other dropdowns first
        document.querySelectorAll('.dropdown-menu.show').forEach(menu => {
            if (menu !== dropdownMenu) {
                menu.classList.remove('show');
                menu.previousElementSibling.setAttribute('aria-expanded', 'false');
            }
        });
        
        // Toggle current dropdown
        if (isExpanded) {
            dropdownMenu.classList.remove('show');
            this.setAttribute('aria-expanded', 'false');
        } else {
            dropdownMenu.classList.add('show');
            this.setAttribute('aria-expanded', 'true');
        }
    });
    
    // Close dropdown when clicking outside
    document.addEventListener('click', function(e) {
        if (!e.target.closest('.dropdown')) {
            document.querySelectorAll('.dropdown-menu.show').forEach(menu => {
                menu.classList.remove('show');
                menu.previousElementSibling.setAttribute('aria-expanded', 'false');
            });
        }
    });
    
    // Handle post button click
    const postBtn = document.getElementById('postBtn');
    if (postBtn) {
        postBtn.addEventListener('click', function() {
        const content = textarea.value.trim();
        const activeType = document.querySelector('.dropdown-item.active').getAttribute('data-type');
        
        if (activeType === 'selling') {
            // Validate selling form
            if (validateSellingForm()) {
                const sellingData = collectSellingFormData();
                console.log('Selling Post Data:', sellingData);
                alert('Dog listing created successfully!');
                clearSellingForm();
            }
        } else if (activeType === 'buying') {
            // Validate buying form
            if (validateBuyingForm()) {
                const buyingData = collectBuyingFormData();
                console.log('Buying Post Data:', buyingData);
                alert('Buying request created successfully!');
                clearBuyingForm();
            }
        } else if (activeType === 'stud') {
            // Validate stud form
            if (validateStudForm()) {
                const studData = collectStudFormData();
                console.log('Stud Post Data:', studData);
                alert('Stud dog listing created successfully!');
                clearStudForm();
            }
        } else if (activeType === 'frozensemens') {
            // Validate frozen form
            if (validateFrozenForm()) {
                const frozenData = collectFrozenFormData();
                console.log('Frozen Semens Post Data:', frozenData);
                alert('Frozen semen listing created successfully!');
                clearFrozenForm();
            }
        } else {
            // Regular post validation
            if (content) {
                console.log('Post Type:', activeType);
                console.log('Content:', content);
                alert('Post created successfully!');
                textarea.value = '';
            } else {
                alert('Please enter some content before posting.');
            }
        }
        });
    }
    
    // Validate selling form
    function validateSellingForm() {
        const requiredFields = ['breedName', 'bloodline', 'age', 'price'];
        const missingFields = [];
        
        requiredFields.forEach(fieldId => {
            const field = document.getElementById(fieldId);
            if (!field.value.trim()) {
                missingFields.push(field.previousElementSibling.textContent.replace(' *', ''));
            }
        });
        
        if (missingFields.length > 0) {
            alert(`Please fill in the following required fields: ${missingFields.join(', ')}`);
            return false;
        }
        
        return true;
    }
    
    // Collect selling form data
    function collectSellingFormData() {
        return {
            postType: 'selling',
            content: textarea.value.trim(),
            dogName: document.getElementById('dogName').value.trim(),
            breedName: document.getElementById('breedName').value.trim(),
            bloodline: document.getElementById('bloodline').value.trim(),
            age: document.getElementById('age').value.trim(),
            price: document.getElementById('price').value.trim(),
            gender: document.getElementById('gender').value,
            status: document.getElementById('status').value,
            registrationNumber: document.getElementById('registrationNumber').value.trim(),
            city: document.getElementById('city').value.trim(),
            state: document.getElementById('state').value.trim(),
            country: document.getElementById('country').value,
            pedigreeLink: document.getElementById('pedigreeLink').value.trim(),
            description: document.getElementById('description').value.trim()
        };
    }
    
    // Clear selling form
    function clearSellingForm() {
        const formFields = [
            'dogName', 'breedName', 'bloodline', 'age', 'price', 
            'gender', 'status', 'registrationNumber', 'city', 
            'state', 'country', 'pedigreeLink', 'description'
        ];
        
        formFields.forEach(fieldId => {
            const field = document.getElementById(fieldId);
            if (field.tagName === 'SELECT') {
                field.selectedIndex = 0;
            } else {
                field.value = '';
            }
        });
        
        textarea.value = '';
    }
    
    // Validate buying form
    function validateBuyingForm() {
        const requiredFields = ['buyBreedName', 'buyBloodline', 'buyAge', 'buyPrice', 'buyCity', 'buyCountry', 'buyDescription'];
        const missingFields = [];
        
        requiredFields.forEach(fieldId => {
            const field = document.getElementById(fieldId);
            if (!field.value.trim()) {
                missingFields.push(field.previousElementSibling.textContent.replace(' *', ''));
            }
        });
        
        if (missingFields.length > 0) {
            alert(`Please fill in the following required fields: ${missingFields.join(', ')}`);
            return false;
        }
        
        return true;
    }
    
    // Collect buying form data
    function collectBuyingFormData() {
        return {
            postType: 'buying',
            content: textarea.value.trim(),
            breedName: document.getElementById('buyBreedName').value.trim(),
            bloodline: document.getElementById('buyBloodline').value.trim(),
            age: document.getElementById('buyAge').value.trim(),
            price: document.getElementById('buyPrice').value.trim(),
            city: document.getElementById('buyCity').value.trim(),
            state: document.getElementById('buyState').value.trim(),
            country: document.getElementById('buyCountry').value,
            description: document.getElementById('buyDescription').value.trim()
        };
    }
    
    // Clear buying form
    function clearBuyingForm() {
        const formFields = [
            'buyBreedName', 'buyBloodline', 'buyAge', 'buyPrice', 
            'buyCity', 'buyState', 'buyCountry', 'buyDescription'
        ];
        
        formFields.forEach(fieldId => {
            const field = document.getElementById(fieldId);
            if (field.tagName === 'SELECT') {
                field.selectedIndex = 0;
            } else {
                field.value = '';
            }
        });
        
        textarea.value = '';
    }
    
    // Validate stud form
    function validateStudForm() {
        const requiredFields = ['studDogName', 'studBreedName', 'studBloodline', 'studAge', 'studPrice', 'studSticks', 'studStatus', 'studCity', 'studCountry', 'studDescription'];
        const missingFields = [];
        
        requiredFields.forEach(fieldId => {
            const field = document.getElementById(fieldId);
            if (!field.value.trim()) {
                missingFields.push(field.previousElementSibling.textContent.replace(' *', ''));
            }
        });
        
        if (missingFields.length > 0) {
            alert(`Please fill in the following required fields: ${missingFields.join(', ')}`);
            return false;
        }
        
        return true;
    }
    
    // Collect stud form data
    function collectStudFormData() {
        return {
            postType: 'stud',
            content: textarea.value.trim(),
            dogName: document.getElementById('studDogName').value.trim(),
            breedName: document.getElementById('studBreedName').value.trim(),
            bloodline: document.getElementById('studBloodline').value.trim(),
            age: document.getElementById('studAge').value.trim(),
            pricePerBreedingCycle: document.getElementById('studPrice').value.trim(),
            sticksPerBreedingCycle: document.getElementById('studSticks').value.trim(),
            status: document.getElementById('studStatus').value,
            city: document.getElementById('studCity').value.trim(),
            state: document.getElementById('studState').value.trim(),
            country: document.getElementById('studCountry').value,
            pedigreeLink: document.getElementById('studPedigreeLink').value.trim(),
            description: document.getElementById('studDescription').value.trim()
        };
    }
    
    // Clear stud form
    function clearStudForm() {
        const formFields = [
            'studDogName', 'studBreedName', 'studBloodline', 'studAge', 'studPrice', 
            'studSticks', 'studStatus', 'studCity', 'studState', 'studCountry', 
            'studPedigreeLink', 'studDescription'
        ];
        
        formFields.forEach(fieldId => {
            const field = document.getElementById(fieldId);
            if (field.tagName === 'SELECT') {
                field.selectedIndex = 0;
            } else {
                field.value = '';
            }
        });
        
        textarea.value = '';
    }
    
    // Validate frozen form
    function validateFrozenForm() {
        const requiredFields = ['frozenDogName', 'frozenBreedName', 'frozenBloodline', 'frozenPrice', 'frozenStoredSince', 'frozenStatus', 'frozenCity', 'frozenCountry', 'frozenDescription'];
        const missingFields = [];
        
        requiredFields.forEach(fieldId => {
            const field = document.getElementById(fieldId);
            if (!field.value.trim()) {
                missingFields.push(field.previousElementSibling.textContent.replace(' *', ''));
            }
        });
        
        if (missingFields.length > 0) {
            alert(`Please fill in the following required fields: ${missingFields.join(', ')}`);
            return false;
        }
        
        return true;
    }
    
    // Collect frozen form data
    function collectFrozenFormData() {
        return {
            postType: 'frozensemens',
            content: textarea.value.trim(),
            dogName: document.getElementById('frozenDogName').value.trim(),
            breedName: document.getElementById('frozenBreedName').value.trim(),
            bloodline: document.getElementById('frozenBloodline').value.trim(),
            pricePer5cc: document.getElementById('frozenPrice').value.trim(),
            storedSince: document.getElementById('frozenStoredSince').value,
            status: document.getElementById('frozenStatus').value,
            city: document.getElementById('frozenCity').value.trim(),
            state: document.getElementById('frozenState').value.trim(),
            country: document.getElementById('frozenCountry').value,
            pedigreeLink: document.getElementById('frozenPedigreeLink').value.trim(),
            description: document.getElementById('frozenDescription').value.trim()
        };
    }
    
    // Clear frozen form
    function clearFrozenForm() {
        const formFields = [
            'frozenDogName', 'frozenBreedName', 'frozenBloodline', 'frozenPrice', 
            'frozenStoredSince', 'frozenStatus', 'frozenCity', 'frozenState', 
            'frozenCountry', 'frozenPedigreeLink', 'frozenDescription'
        ];
        
        formFields.forEach(fieldId => {
            const field = document.getElementById(fieldId);
            if (field.tagName === 'SELECT') {
                field.selectedIndex = 0;
            } else {
                field.value = '';
            }
        });
        
        textarea.value = '';
    }
    
    // Attachment functionality will be initialized in DOMContentLoaded
    
    // Function to initialize attachment buttons
    function initializeAttachmentButtons() {
        console.log('Initializing attachment buttons...');
        
        // Handle file upload button
        const fileUploadBtn = document.getElementById('fileUploadBtn');
        const fileInput = document.getElementById('fileInput');
        
        if (fileUploadBtn && fileInput) {
            console.log('File upload button found, attaching listener');
            fileUploadBtn.addEventListener('click', function(e) {
                e.preventDefault();
                e.stopPropagation();
                console.log('File upload button clicked');
                fileInput.click();
            });
            
            fileInput.addEventListener('change', function(e) {
                const files = Array.from(e.target.files);
                console.log('Files selected:', files.length);
                files.forEach(file => {
                    console.log('File selected:', file.name, file.type, file.size);
                    showFilePreview(file);
                });
            });
        } else {
            console.log('File upload elements not found');
        }
        
        // Handle media upload button
        const mediaUploadBtn = document.getElementById('mediaUploadBtn');
        const mediaInput = document.getElementById('mediaInput');
        
        if (mediaUploadBtn && mediaInput) {
            console.log('Media upload button found, attaching listener');
            mediaUploadBtn.addEventListener('click', function(e) {
                e.preventDefault();
                e.stopPropagation();
                console.log('Media upload button clicked');
                mediaInput.click();
            });
            
            mediaInput.addEventListener('change', function(e) {
                const files = Array.from(e.target.files);
                console.log('Media files selected:', files.length);
                files.forEach(file => {
                    console.log('Media selected:', file.name, file.type, file.size);
                    showFilePreview(file);
                });
            });
        } else {
            console.log('Media upload elements not found');
        }
        
    }
    
    // Function to show file preview
    function showFilePreview(file) {
        // Create preview container if it doesn't exist
        let previewContainer = document.querySelector('.file-preview');
        if (!previewContainer) {
            previewContainer = document.createElement('div');
            previewContainer.className = 'file-preview';
            // Insert above the post-actions (buttons row)
            const postActions = document.querySelector('.post-actions');
            postActions.parentNode.insertBefore(previewContainer, postActions);
        }
        
        // Create file preview item
        const fileItem = document.createElement('div');
        fileItem.className = 'file-preview-item';
        
        const fileInfo = document.createElement('div');
        fileInfo.className = 'file-info';
        
        const fileIcon = document.createElement('div');
        fileIcon.className = 'file-icon';
        fileIcon.textContent = getFileIcon(file.type);
        
        const fileName = document.createElement('span');
        fileName.className = 'file-name';
        fileName.textContent = file.name;
        
        const fileRemove = document.createElement('button');
        fileRemove.className = 'file-remove';
        fileRemove.innerHTML = '&times;';
        fileRemove.addEventListener('click', function() {
            fileItem.remove();
            if (previewContainer.children.length === 0) {
                previewContainer.remove();
            }
        });
        
        fileInfo.appendChild(fileIcon);
        fileInfo.appendChild(fileName);
        fileItem.appendChild(fileInfo);
        fileItem.appendChild(fileRemove);
        previewContainer.appendChild(fileItem);
    }
    
    // Function to get file icon based on file type
    function getFileIcon(fileType) {
        if (fileType.includes('pdf')) return '📄';
        if (fileType.includes('word') || fileType.includes('document')) return '📝';
        if (fileType.includes('excel') || fileType.includes('spreadsheet')) return '📊';
        if (fileType.includes('powerpoint') || fileType.includes('presentation')) return '📽️';
        if (fileType.includes('image')) return '🖼️';
        if (fileType.includes('video')) return '🎥';
        return '📎';
    }
    
    
    // Initialize attachment functionality
    initializeAttachmentButtons();
});
</script>