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
    <div class="bg-white rounded-3 p-3 mb-3 w-100" >
        <h2 class="text-dark mt-3 fw-medium fs-5 d-flex align-items-center mb-4">
            <i class="fas fa-filter me-2 "></i>{{ __('messages.filters') }}
        </h2>
        
        <!-- Country Filter -->
        <div class="mb-4">
            <label for="countryFilter" class="form-label fw-semibold text-dark mb-2">
               {{ __('messages.country') }}
            </label>
            <div class="custom-dropdown" data-filter="country">
                <div class="dropdown-toggle" id="countryDropdown">
                    <span class="selected-text placeholder">{{ __('messages.select_country') }}</span>
                </div>
                <div class="dropdown-menu">
                    <div class="search-container">
                        <input type="text" class="search-input" placeholder="Search countries...">
                        <i class="fas fa-search search-icon"></i>
                    </div>
                    <div class="options-container">
                        <div class="option" data-value="">{{ __('messages.select_country') }}</div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Dog Breed Filter -->
        <div class="mb-4" id="breedFilterContainer">
            <label for="breedFilter" class="form-label fw-semibold text-dark mb-2">
               {{ __('messages.dog_breed') }}
            </label>
            <div class="custom-dropdown" data-filter="breed">
                <div class="dropdown-toggle" id="breedDropdown">
                    <span class="selected-text placeholder">{{ __('messages.select_breed') }}</span>
                </div>
                <div class="dropdown-menu">
                    <div class="search-container">
                        <input type="text" class="search-input" placeholder="Search breeds...">
                        <i class="fas fa-search search-icon"></i>
                    </div>
                    <div class="options-container">
                        <div class="option" data-value="">{{ __('messages.select_breed') }}</div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Bloodline Filter -->
        <div class="mb-4" id="bloodlineFilterContainer">
            <label for="bloodlineFilter" class="form-label fw-semibold text-dark mb-2">
                {{ __('messages.bloodline') }}
            </label>
            <div class="custom-dropdown" data-filter="bloodline">
                <div class="dropdown-toggle" id="bloodlineDropdown">
                    <span class="selected-text placeholder">{{ __('messages.select_bloodline') }}</span>
                </div>
                <div class="dropdown-menu">
                    <div class="search-container">
                        <input type="text" class="search-input" placeholder="Search bloodlines...">
                        <i class="fas fa-search search-icon"></i>
                    </div>
                    <div class="options-container">
                        <div class="option" data-value="">{{ __('messages.select_bloodline') }}</div>
                    </div>
                </div>
            </div>
        </div>
         
        <!-- Filter Actions -->
        <div class="d-flex gap-2 mt-4">
            <button id="applyFilters" class="btn btn-primary text-white btn-sm flex-fill" disabled>
                <i class="fas fa-search me-1"></i>{{ __('messages.apply_filters') }}
            </button>
            <button id="clearFilters" class="btn btn-outline-secondary btn-sm">
                <i class="fas fa-times me-1"></i>{{ __('messages.clear') }}
            </button>
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
    
    /* App.scss integration for sidebar */
    .primary-color {
        color: #00A8D1 !important;
    }
    
    .secondary-color {
        color: #F6871F !important;
    }
    
    /* Ensure Outfit font is applied */
    .sidebar-nav a, .profile-name {
        font-family: 'Outfit', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
    }
    
    /* Custom Dropdown Styles */
    .custom-dropdown {
        position: relative;
        width: 100%;
    }
    
    .dropdown-toggle {
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 12px 16px;
        background: #fff;
        border: 2px solid #e9ecef;
        border-radius: 8px;
        cursor: pointer;
        transition: all 0.3s ease;
        min-height: 42px;
        font-size: 0.9rem;
        color: #495057;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.05);
    }
    
    .dropdown-toggle:hover {
        border-color: #00A8D1;
        box-shadow: 0 2px 8px rgba(0, 168, 209, 0.1);
    }
    
    .dropdown-toggle.active {
        border-color: #00A8D1;
        box-shadow: 0 0 0 0.2rem rgba(0, 168, 209, 0.25);
    }
    
    .selected-text {
        flex: 1;
        text-align: left;
        color: #495057;
    }
    
    .selected-text.placeholder {
        color: #6c757d;
        font-style: italic;
    }
    
    .dropdown-arrow {
        transition: transform 0.3s ease;
        color: #6c757d;
        font-size: 0.8rem;
    }
    
    .dropdown-toggle.active .dropdown-arrow {
        transform: rotate(180deg);
    }
    
    .dropdown-menu {
        position: absolute;
        top: 100%;
        left: 0;
        right: 0;
        background: #fff;
        border: 2px solid #e9ecef;
        border-radius: 8px;
        box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
        z-index: 1000;
        max-height: 300px;
        overflow: hidden;
        display: none;
        margin-top: 4px;
    }
    
    .dropdown-menu.show {
        display: block;
    }
    
    .search-container {
        position: relative;
        padding: 12px;
        border-bottom: 1px solid #e9ecef;
        background: #f8f9fa;
    }
    
    .search-input {
        width: 100%;
        padding: 8px 12px 8px 36px;
        border: 1px solid #e9ecef;
        border-radius: 6px;
        font-size: 0.9rem;
        outline: none;
        transition: border-color 0.3s ease;
    }
    
    .search-input:focus {
        border-color: #00A8D1;
        box-shadow: 0 0 0 0.2rem rgba(0, 168, 209, 0.25);
    }
    
    .search-icon {
        position: absolute;
        left: 24px;
        top: 50%;
        transform: translateY(-50%);
        color: #6c757d;
        font-size: 0.8rem;
    }
    
    .options-container {
        max-height: 200px;
        overflow-y: auto;
        padding: 4px 0;
    }
    
    .option {
        padding: 12px 16px;
        cursor: pointer;
        transition: background-color 0.2s ease;
        font-size: 0.9rem;
        color: #495057;
        border-bottom: 1px solid #f8f9fa;
    }
    
    .option:hover {
        background-color: #f8f9fa;
    }
    
    .option.selected {
        background-color: #00A8D1;
        color: white;
    }
    
    .option:last-child {
        border-bottom: none;
    }
    
    .option.hidden {
        display: none;
    }
    
    /* Custom scrollbar for options */
    .options-container::-webkit-scrollbar {
        width: 6px;
    }
    
    .options-container::-webkit-scrollbar-track {
        background: #f1f1f1;
        border-radius: 3px;
    }
    
    .options-container::-webkit-scrollbar-thumb {
        background: #c1c1c1;
        border-radius: 3px;
    }
    
    .options-container::-webkit-scrollbar-thumb:hover {
        background: #a8a8a8;
    }
    
    /* Form Label Styles */
    .form-label {
        font-size: 13px;
        margin-bottom: 8px;
        color: #374151;
        font-weight: 600;
        display: flex;
        align-items: center;
    }
    
    .form-label i {
        font-size: 14px;
    }
    
    /* Button Styles */
    .btn {
        font-size: 13px;
        padding: 8px 16px;
        font-weight: 500;
        border-radius: 6px;
        transition: all 0.3s ease;
    }
    
    .btn-primary {
        background: linear-gradient(135deg, #00A8D1 0%, #0088B8 100%);
        border: none;
        box-shadow: 0 2px 8px rgba(0, 168, 209, 0.3);
    }
    
    .btn-primary:hover {
        background: linear-gradient(135deg, #0088B8 0%, #006699 100%);
        transform: translateY(-1px);
        box-shadow: 0 4px 12px rgba(0, 168, 209, 0.4);
    }
    
    .btn-outline-secondary {
        border: 1px solid #e0e0e0;
        color: #6b7280;
        background: white;
    }
    
    .btn-outline-secondary:hover {
        background: #f8f9fa;
        border-color: #d1d5db;
        color: #374151;
        transform: translateY(-1px);
    }
    
    #applyFilters:disabled {
        opacity: 0.6;
        cursor: not-allowed;
        transform: none !important;
        box-shadow: 0 2px 8px rgba(0, 168, 209, 0.2) !important;
    }
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Get dropdown elements
    const countryDropdown = document.getElementById('countryDropdown');
    const breedDropdown = document.getElementById('breedDropdown');
    const bloodlineDropdown = document.getElementById('bloodlineDropdown');
    const breedContainer = document.getElementById('breedFilterContainer');
    const bloodlineContainer = document.getElementById('bloodlineFilterContainer');
    const applyBtn = document.getElementById('applyFilters');
    const clearBtn = document.getElementById('clearFilters');
    
    let currentFilters = {
        country: 'all',
        breed: 'all',
        bloodline: 'all'
    };
    
    // Initialize custom dropdowns
    initializeCustomDropdowns();
    
    // Load countries on page load
    loadCountries();
    
    // Initialize custom dropdown functionality
    function initializeCustomDropdowns() {
        // Initialize each dropdown
        initializeDropdown(countryDropdown, 'country');
        initializeDropdown(breedDropdown, 'breed');
        initializeDropdown(bloodlineDropdown, 'bloodline');
    }
    
    // Initialize individual dropdown
    function initializeDropdown(dropdown, filterType) {
        if (!dropdown) return;
        
        const dropdownMenu = dropdown.nextElementSibling;
        const searchInput = dropdownMenu.querySelector('.search-input');
        const optionsContainer = dropdownMenu.querySelector('.options-container');
        const selectedText = dropdown.querySelector('.selected-text');
        
        // Toggle dropdown
        dropdown.addEventListener('click', function(e) {
            e.stopPropagation();
            closeAllDropdowns();
            dropdown.classList.toggle('active');
            dropdownMenu.classList.toggle('show');
            
            if (dropdownMenu.classList.contains('show')) {
                searchInput.focus();
            }
        });
        
        // Handle search
        searchInput.addEventListener('input', function() {
            const searchTerm = this.value.toLowerCase();
            const options = optionsContainer.querySelectorAll('.option');
            
            options.forEach(option => {
                const text = option.textContent.toLowerCase();
                if (text.includes(searchTerm)) {
                    option.classList.remove('hidden');
                } else {
                    option.classList.add('hidden');
                }
            });
        });
        
        // Handle option selection
        optionsContainer.addEventListener('click', function(e) {
            if (e.target.classList.contains('option')) {
                const value = e.target.getAttribute('data-value');
                const text = e.target.textContent;
                
                // Update selected text
                selectedText.textContent = text;
                selectedText.classList.toggle('placeholder', value === '');
                
                // Update current filters
                currentFilters[filterType] = value;
                
                // Close dropdown
                dropdown.classList.remove('active');
                dropdownMenu.classList.remove('show');
                
                // Handle cascading filters
                handleFilterChange(filterType, value);
                
                // Update apply button
                updateApplyButton();
            }
        });
        
        // Close dropdown when clicking outside
        document.addEventListener('click', function(e) {
            if (!dropdown.contains(e.target)) {
                dropdown.classList.remove('active');
                dropdownMenu.classList.remove('show');
            }
        });
    }
    
    // Handle filter changes and cascading
    function handleFilterChange(filterType, value) {
        if (filterType === 'country') {
            if (value === 'all') {
                // If "All Countries" is selected, show all breeds and bloodlines
                breedContainer.style.display = 'block';
                bloodlineContainer.style.display = 'block';
                
                // Load all breeds (use US as default for getting all breeds)
                loadBreeds('US');
                setTimeout(() => {
                    const breedSelectedText = breedDropdown.querySelector('.selected-text');
                    breedSelectedText.textContent = 'All Breeds';
                    breedSelectedText.classList.remove('placeholder');
                    currentFilters.breed = 'all';
                    
                    // Load all bloodlines
                    loadBloodlines('labrador');
                    setTimeout(() => {
                        const bloodlineSelectedText = bloodlineDropdown.querySelector('.selected-text');
                        bloodlineSelectedText.textContent = 'All Bloodlines';
                        bloodlineSelectedText.classList.remove('placeholder');
                        currentFilters.bloodline = 'all';
                        updateApplyButton();
                    }, 100);
                }, 100);
            } else {
                // If specific country is selected, load breeds for that country
                loadBreeds(value);
                breedContainer.style.display = 'block';
                bloodlineContainer.style.display = 'block';
                
                // Set breed to "All Breeds" by default
                setTimeout(() => {
                    const breedSelectedText = breedDropdown.querySelector('.selected-text');
                    breedSelectedText.textContent = 'All Breeds';
                    breedSelectedText.classList.remove('placeholder');
                    currentFilters.breed = 'all';
                    
                    // Set bloodline to "All Bloodlines" by default
                    const bloodlineSelectedText = bloodlineDropdown.querySelector('.selected-text');
                    bloodlineSelectedText.textContent = 'All Bloodlines';
                    bloodlineSelectedText.classList.remove('placeholder');
                    currentFilters.bloodline = 'all';
                    updateApplyButton();
                }, 100);
            }
        } else if (filterType === 'breed') {
            if (value === 'all') {
                // If "All Breeds" is selected, show all bloodlines
                bloodlineContainer.style.display = 'block';
                loadBloodlines('labrador'); // Use default breed for getting all bloodlines
                setTimeout(() => {
                    const bloodlineSelectedText = bloodlineDropdown.querySelector('.selected-text');
                    bloodlineSelectedText.textContent = 'All Bloodlines';
                    bloodlineSelectedText.classList.remove('placeholder');
                    currentFilters.bloodline = 'all';
                    updateApplyButton();
                }, 100);
            } else {
                // If specific breed is selected, load bloodlines for that breed
                loadBloodlines(value);
                bloodlineContainer.style.display = 'block';
                
                // Set bloodline to "All Bloodlines" by default
                setTimeout(() => {
                    const bloodlineSelectedText = bloodlineDropdown.querySelector('.selected-text');
                    bloodlineSelectedText.textContent = 'All Bloodlines';
                    bloodlineSelectedText.classList.remove('placeholder');
                    currentFilters.bloodline = 'all';
                    updateApplyButton();
                }, 100);
            }
        }
    }
    
    // Reset dropdown to placeholder
    function resetDropdown(dropdown, placeholder) {
        if (!dropdown) return;
        
        const selectedText = dropdown.querySelector('.selected-text');
        selectedText.textContent = placeholder;
        selectedText.classList.add('placeholder');
    }
    
    // Close all dropdowns
    function closeAllDropdowns() {
        document.querySelectorAll('.dropdown-toggle').forEach(dropdown => {
            dropdown.classList.remove('active');
            dropdown.nextElementSibling.classList.remove('show');
        });
    }
    
    // Load countries
    function loadCountries() {
        fetch('/filters/countries')
            .then(response => response.json())
            .then(data => {
                const optionsContainer = countryDropdown.nextElementSibling.querySelector('.options-container');
                optionsContainer.innerHTML = '<div class="option" data-value="">{{ __('messages.select_country') }}</div>';
                
                // Add "All Countries" option first
                const allCountriesOption = document.createElement('div');
                allCountriesOption.className = 'option';
                allCountriesOption.setAttribute('data-value', 'all');
                allCountriesOption.textContent = 'All Countries';
                optionsContainer.appendChild(allCountriesOption);
                
                // Handle object format {key: value}
                Object.entries(data).forEach(([key, value]) => {
                    const option = document.createElement('div');
                    option.className = 'option';
                    option.setAttribute('data-value', key);
                    option.textContent = value;
                    optionsContainer.appendChild(option);
                });
                
                // Set default selection to "All Countries"
                const selectedText = countryDropdown.querySelector('.selected-text');
                selectedText.textContent = 'All Countries';
                selectedText.classList.remove('placeholder');
                currentFilters.country = 'all';
                
                // Show breed and bloodline containers with "All" options
                breedContainer.style.display = 'block';
                bloodlineContainer.style.display = 'block';
                
                // Set default breed and bloodline to "All"
                setDefaultAllOptions();
            })
            .catch(error => {
                console.error('Error loading countries:', error);
            });
    }
    
    // Load breeds for selected country
    function loadBreeds(countryId) {
        fetch(`/filters/breeds?country=${countryId}`)
            .then(response => response.json())
            .then(data => {
                const optionsContainer = breedDropdown.nextElementSibling.querySelector('.options-container');
                optionsContainer.innerHTML = '<div class="option" data-value="">{{ __('messages.select_breed') }}</div>';
                
                // Add "All Breeds" option first
                const allBreedsOption = document.createElement('div');
                allBreedsOption.className = 'option';
                allBreedsOption.setAttribute('data-value', 'all');
                allBreedsOption.textContent = 'All Breeds';
                optionsContainer.appendChild(allBreedsOption);
                
                // Handle object format {key: value}
                Object.entries(data).forEach(([key, value]) => {
                    const option = document.createElement('div');
                    option.className = 'option';
                    option.setAttribute('data-value', key);
                    option.textContent = value;
                    optionsContainer.appendChild(option);
                });
            })
            .catch(error => {
                console.error('Error loading breeds:', error);
            });
    }
    
    // Set default "All" options for breeds and bloodlines
    function setDefaultAllOptions() {
        // Set breed to "All Breeds"
        const breedSelectedText = breedDropdown.querySelector('.selected-text');
        breedSelectedText.textContent = 'All Breeds';
        breedSelectedText.classList.remove('placeholder');
        currentFilters.breed = 'all';
        
        // Set bloodline to "All Bloodlines"
        const bloodlineSelectedText = bloodlineDropdown.querySelector('.selected-text');
        bloodlineSelectedText.textContent = 'All Bloodlines';
        bloodlineSelectedText.classList.remove('placeholder');
        currentFilters.bloodline = 'all';
        
        // Update apply button state
        updateApplyButton();
    }
    
    // Load bloodlines for selected breed
    function loadBloodlines(breedId) {
        fetch(`/filters/bloodlines?breed=${breedId}`)
            .then(response => response.json())
            .then(data => {
                const optionsContainer = bloodlineDropdown.nextElementSibling.querySelector('.options-container');
                optionsContainer.innerHTML = '<div class="option" data-value="">{{ __('messages.select_bloodline') }}</div>';
                
                // Add "All Bloodlines" option first
                const allBloodlinesOption = document.createElement('div');
                allBloodlinesOption.className = 'option';
                allBloodlinesOption.setAttribute('data-value', 'all');
                allBloodlinesOption.textContent = 'All Bloodlines';
                optionsContainer.appendChild(allBloodlinesOption);
                
                // Handle object format {key: value}
                Object.entries(data).forEach(([key, value]) => {
                    const option = document.createElement('div');
                    option.className = 'option';
                    option.setAttribute('data-value', key);
                    option.textContent = value;
                    optionsContainer.appendChild(option);
                });
            })
            .catch(error => {
                console.error('Error loading bloodlines:', error);
            });
    }
    
    
    // Update apply button state
    function updateApplyButton() {
        const hasSelection = currentFilters.country || currentFilters.breed || currentFilters.bloodline;
        applyBtn.disabled = !hasSelection;
    }
    
    // Apply filters
    function applyFilters() {
        console.log('Applying filters:', currentFilters);
        // Here you would implement the actual filtering logic
        // For now, just show an alert
        alert(`Filters applied:\nCountry: ${currentFilters.country || 'None'}\nBreed: ${currentFilters.breed || 'None'}\nBloodline: ${currentFilters.bloodline || 'None'}`);
    }
    
    // Clear all filters
    function clearAllFilters() {
        currentFilters = {
            country: 'all',
            breed: 'all',
            bloodline: 'all'
        };
        
        // Reset dropdowns to "All" options
        const countrySelectedText = countryDropdown.querySelector('.selected-text');
        countrySelectedText.textContent = 'All Countries';
        countrySelectedText.classList.remove('placeholder');
        
        const breedSelectedText = breedDropdown.querySelector('.selected-text');
        breedSelectedText.textContent = 'All Breeds';
        breedSelectedText.classList.remove('placeholder');
        
        const bloodlineSelectedText = bloodlineDropdown.querySelector('.selected-text');
        bloodlineSelectedText.textContent = 'All Bloodlines';
        bloodlineSelectedText.classList.remove('placeholder');
        
        // Show all containers
        breedContainer.style.display = 'block';
        bloodlineContainer.style.display = 'block';
        
        // Update apply button
        updateApplyButton();
    }
    
    // Apply filters handler
    applyBtn.addEventListener('click', function() {
        applyFilters();
    });
    
    // Clear filters handler
    clearBtn.addEventListener('click', function() {
        clearAllFilters();
    });
});
</script>