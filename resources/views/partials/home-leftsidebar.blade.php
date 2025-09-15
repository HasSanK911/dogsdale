<div class="h-100">
    <div class="bg-white p-3 rounded-3 w-100">
        <div class="d-flex flex-column align-items-center gap-2">
            <img src="{{ asset('dogs/davidbates.jpg') }}" alt="Logo" class="img-fluid rounded-circle" width="120px" height="120px"> 
            <a href="{{ route('home') }}" class="text-decoration-none text-dark fs-5 fw-semibold">
                David Bates
            </a>
        </div>
        <div class="mt-3 d-flex flex-column gap-2">
            <button class="sidebar-btn d-flex btn align-items-center gap-2 w-100 rounded-3 p-2">
                <svg class="sidebar-icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/>
                    <polyline points="9,22 9,12 15,12 15,22"/>
                </svg>
                <span>Create Kennel</span>
            </button>
            <button class="sidebar-btn d-flex btn align-items-center gap-2 w-100 rounded-3 p-2">
                <svg class="sidebar-icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/>
                </svg>
                <span>Litter Announcements</span>
            </button>
            <button class="sidebar-btn d-flex btn align-items-center gap-2 w-100 rounded-3 p-2">
                <svg class="sidebar-icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/>
                    <path d="M13 8H7"/>
                    <path d="M17 12H7"/>
                    <path d="M10 16H7"/>
                </svg>
                <span>Create Forum</span>
            </button>
            <button class="sidebar-btn d-flex btn align-items-center gap-2 w-100 rounded-3 p-2">
                <svg class="sidebar-icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M19 21l-7-5-7 5V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2z"/>
                </svg>
                <span>Saved</span>
            </button>
            <button class="sidebar-btn d-flex btn align-items-center gap-2 w-100 rounded-3 p-2">
                <svg class="sidebar-icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                    <polygon points="23 7 16 12 23 17 23 7"/>
                    <rect x="1" y="5" width="15" height="14" rx="2" ry="2"/>
                </svg>
                <span>Videos</span>
            </button>
            <button class="sidebar-btn d-flex btn align-items-center gap-2 w-100 rounded-3 p-2">
                <svg class="sidebar-icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/>
                    <polyline points="14,2 14,8 20,8"/>
                    <line x1="16" y1="13" x2="8" y2="13"/>
                    <line x1="16" y1="17" x2="8" y2="17"/>
                    <polyline points="10,9 9,9 8,9"/>
                </svg>
                <span>Stories</span>
            </button>
        </div>
    </div>
    <div class="bg-white p-3 rounded-3 w-100 mt-3">
        <div class="filter-section">
            <h5 class=" mb-3 fw-medium text-black text-start">
                Filters
            </h5>
            
            <!-- Country Filter -->
            <div class="filter-group mb-3">
                <label class="filter-label">Country</label>
                <select id="countryFilter" class="form-select filter-select">
                    <option value="">Select Country</option>
                </select>
            </div>
            
            <!-- Dog Breed Filter -->
            <div class="filter-group mb-3" id="breedFilterGroup" style="display: none;">
                <label class="filter-label">Dog Breed</label>
                <select id="breedFilter" class="form-select filter-select">
                    <option value="">Select Breed</option>
                </select>
            </div>
            
            <!-- Bloodline Filter -->
            <div class="filter-group mb-3" id="bloodlineFilterGroup" style="display: none;">
                <label class="filter-label">Bloodline</label>
                <select id="bloodlineFilter" class="form-select filter-select">
                    <option value="">Select Bloodline</option>
                </select>
            </div>
            
            <!-- Filter Actions -->
            <div class="filter-actions d-flex gap-2">
                <button id="applyFilters" class="btn btn-primary btn-sm flex-fill" disabled>
                    <svg class="me-1" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <circle cx="11" cy="11" r="8"/>
                        <path d="M21 21l-4.35-4.35"/>
                    </svg>
                    Apply
                </button>
                <button id="clearFilters" class="btn btn-outline-secondary btn-sm">
                    <svg class="me-1" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <line x1="18" y1="6" x2="6" y2="18"/>
                        <line x1="6" y1="6" x2="18" y2="18"/>
                    </svg>
                    Clear
                </button>
            </div>
    </div>
</div>
<div class="bg-white p-3 rounded-3 w-100 mt-3">
<h5 class=" mb-3 fw-medium text-black text-start">
            Kennels
        </h5>
        <div>
             <a href="" class="btn px-0 d-flex align-items-center gap-3">
                <img src="{{ asset('dogs/kennel1.png') }}" alt="Kaleemi Kennel" class="rounded-circle" width="40px" height="40px"> 
                <span>Kaleemi Kennel Club</span>
            </a>
            <a href="" class="btn px-0 d-flex align-items-center gap-3">
                <img src="{{ asset('dogs/kennel2.png') }}" alt="Tom Garner Kennel" class="rounded-circle" width="40px" height="40px"> 
                <span>Tom Garner Kennels</span>
            </a>
            <a href="" class="btn px-0 d-flex align-items-center gap-3">
                <img src="{{ asset('dogs/kennel3.png') }}" alt="Buck Bred Kennel" class="rounded-circle" width="40px" height="40px"> 
                <span>Buck Bred Kennels</span>
            </a>
            <a href="" class="btn px-0 d-flex align-items-center gap-3">
                <img src="{{ asset('dogs/cover.jpeg') }}" alt="Machobuck Kennel" class="rounded-circle" width="40px" height="40px"> 
                <span>Machobuck Kennels</span>
            </a>
            <a href="" class="btn px-0 d-flex align-items-center gap-3">
                <img src="{{ asset('dogs/cardimage.png') }}" alt="Do Or Die Kennel" class="rounded-circle" width="40px" height="40px"> 
                <span>Do Or Die Kennels</span>
            </a>
        </div>
</div>

</div>

<style>
    .sidebar-btn {
        background: transparent;
        border: none;
        /* color: #374151; */
        transition: all 0.3s ease;
        font-weight: 500;
    }


    a:hover{
        color: grey !important;
    }
    
    .sidebar-btn:hover,
    .sidebar-btn:active,
    .sidebar-btn.active {
        background-color: #00A8D1 !important;
        color: white !important;
    }
    
    
    .sidebar-btn:hover span,
    .sidebar-btn:active span,
    .sidebar-btn.active span {
        color: white !important;
    }
    
    .sidebar-icon {
        width: 20px;
        height: 20px;
        transition: all 0.3s ease;
        stroke: currentColor;
    }
    
    .sidebar-btn:hover .sidebar-icon,
    .sidebar-btn:active .sidebar-icon,
    .sidebar-btn.active .sidebar-icon {
        stroke: white;
        transform: scale(1.05);
    }
    
    .filter-group {
        margin-bottom: 12px;
    }
    
    .filter-label {
        font-size: 14px;
        font-weight: 500;
        color: #6c757d;
        margin-bottom: 6px;
        display: block;
    }
    
    .filter-select {
        border: 1px solid #dee2e6;
        border-radius: 8px;
        padding: 8px 12px;
        font-size: 13px;
        transition: all 0.3s ease;
        background: white;
    }
    
    .filter-select:focus {
        border-color: #00A8D1;
        box-shadow: 0 0 0 0.2rem rgba(0, 168, 209, 0.25);
        outline: none;
    }
    
    .filter-actions {
        margin-top: 16px;
    }
    
    .filter-actions .btn {
        font-size: 12px;
        padding: 8px 12px;
        border-radius: 6px;
        font-weight: 500;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    
    .filter-actions .btn-primary {
        background: linear-gradient(135deg, #00A8D1 0%, #0088B8 100%);
        border: none;
    }
    
    .filter-actions .btn-primary:hover {
        background: linear-gradient(135deg, #0088B8 0%, #006699 100%);
        transform: translateY(-1px);
    }
    
    .filter-actions .btn-outline-secondary {
        border: 1px solid #dee2e6;
        color: #6c757d;
    }
    
    .filter-actions .btn-outline-secondary:hover {
        background: #f8f9fa;
        border-color: #adb5bd;
        color: #495057;
    }
    
    /* Select2 Customization */
    .select2-container--default .select2-selection--single {
        border: 1px solid #dee2e6 !important;
        border-radius: 8px !important;
        height: 38px !important;
        padding: 0 12px !important;
        background: white !important;
    }
    
    .select2-container--default .select2-selection--single:focus {
        border-color: #00A8D1 !important;
        box-shadow: 0 0 0 0.2rem rgba(0, 168, 209, 0.25) !important;
    }
    
    .select2-container--default .select2-selection--single .select2-selection__rendered {
        line-height: 36px !important;
        color: #495057 !important;
        font-size: 13px !important;
        padding-left: 0 !important;
    }
    
    .select2-container--default .select2-selection--single .select2-selection__arrow {
        height: 36px !important;
        right: 8px !important;
    }
    
    .select2-dropdown {
        border: 1px solid #dee2e6 !important;
        border-radius: 8px !important;
        box-shadow: 0 4px 16px rgba(0, 0, 0, 0.1) !important;
    }
    
    .select2-container--default .select2-search--dropdown .select2-search__field {
        border: 1px solid #dee2e6 !important;
        border-radius: 6px !important;
        padding: 6px 10px !important;
        font-size: 13px !important;
    }
    
    .select2-container--default .select2-results__option--highlighted[aria-selected] {
        background-color: #00A8D1 !important;
    }
    
    .select2-container--default .select2-results__option[aria-selected=true] {
        background-color: #e3f2fd !important;
        color: #00A8D1 !important;
    }
    
    
    
    /* Section Headers with Icons */
    h5 {
        color: #374151;
        font-size: 16px;
        font-weight: 600;
        display: flex;
        align-items: center;
    }
    
    h5 svg {
        color: #00A8D1;
    }
    
    /* Buttons */
    .btn-outline-primary {
        border-color: #00A8D1;
        color: #00A8D1;
        font-weight: 500;
        transition: all 0.3s ease;
    }
    
    .btn-outline-primary:hover {
        background-color: #00A8D1;
        border-color: #00A8D1;
        color: white;
        transform: translateY(-1px);
    }
</style>

<!-- jQuery and Select2 -->
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" rel="stylesheet" />

<script>
$(document).ready(function() {
    // Wait a bit for Select2 to load, then initialize
    setTimeout(function() {
        initializeSelect2();
    }, 100);
    
    function initializeSelect2() {
        // Check if Select2 is loaded
        if (typeof $.fn.select2 === 'undefined') {
            console.log('Select2 not found, attempting to load dynamically...');
            loadSelect2Dynamically();
            return;
        }
        
        // Initialize Select2 for all filter dropdowns
        try {
            $('#countryFilter, #breedFilter, #bloodlineFilter').select2({
                placeholder: 'Select an option',
                allowClear: true,
                width: '100%',
                dropdownParent: $('.filter-section')
            });
            console.log('Select2 initialized successfully');
        } catch (error) {
            console.error('Error initializing Select2:', error);
            initializeStandardDropdowns();
        }
    }
    
    function loadSelect2Dynamically() {
        // Try to load Select2 from a different CDN
        $.getScript('https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js')
            .done(function() {
                console.log('Select2 loaded dynamically, initializing...');
                setTimeout(function() {
                    if (typeof $.fn.select2 !== 'undefined') {
                        initializeSelect2();
                    } else {
                        console.error('Select2 still not available after dynamic load');
                        initializeStandardDropdowns();
                    }
                }, 50);
            })
            .fail(function() {
                console.error('Failed to load Select2 dynamically, using standard dropdowns');
                initializeStandardDropdowns();
            });
    }
    
    // Load countries on page load
    loadCountries();
    
    // Country change handler
    $('#countryFilter').on('change', function() {
        const countryId = $(this).val();
        
        // Reset dependent dropdowns
        if (typeof $.fn.select2 !== 'undefined') {
            $('#breedFilter').val('').trigger('change');
            $('#bloodlineFilter').val('').trigger('change');
        } else {
            $('#breedFilter').val('');
            $('#bloodlineFilter').val('');
        }
        $('#breedFilterGroup').hide();
        $('#bloodlineFilterGroup').hide();
        
        if (countryId) {
            loadBreeds(countryId);
            $('#breedFilterGroup').show();
        }
        
        updateApplyButton();
    });
    
    // Breed change handler
    $('#breedFilter').on('change', function() {
        const breedId = $(this).val();
        
        // Reset bloodline dropdown
        if (typeof $.fn.select2 !== 'undefined') {
            $('#bloodlineFilter').val('').trigger('change');
        } else {
            $('#bloodlineFilter').val('');
        }
        $('#bloodlineFilterGroup').hide();
        
        if (breedId) {
            loadBloodlines(breedId);
            $('#bloodlineFilterGroup').show();
        }
        
        updateApplyButton();
    });
    
    // Bloodline change handler
    $('#bloodlineFilter').on('change', function() {
        updateApplyButton();
    });
    
    // Apply filters handler
    $('#applyFilters').on('click', function() {
        const filters = {
            country: $('#countryFilter').val(),
            breed: $('#breedFilter').val(),
            bloodline: $('#bloodlineFilter').val()
        };
        
        console.log('Applying filters:', filters);
        // Here you would implement the actual filtering logic
        alert(`Filters applied:\nCountry: ${filters.country || 'None'}\nBreed: ${filters.breed || 'None'}\nBloodline: ${filters.bloodline || 'None'}`);
    });
    
    // Clear filters handler
    $('#clearFilters').on('click', function() {
        if (typeof $.fn.select2 !== 'undefined') {
            $('#countryFilter').val('').trigger('change');
            $('#breedFilter').val('').trigger('change');
            $('#bloodlineFilter').val('').trigger('change');
        } else {
            $('#countryFilter').val('');
            $('#breedFilter').val('');
            $('#bloodlineFilter').val('');
        }
        $('#breedFilterGroup').hide();
        $('#bloodlineFilterGroup').hide();
        updateApplyButton();
    });
    
    // Load countries from API
    function loadCountries() {
        fetch('/filters/countries')
            .then(response => response.json())
            .then(data => {
                const countrySelect = $('#countryFilter');
                countrySelect.empty().append('<option value="">Select Country</option>');
                
                Object.entries(data).forEach(([key, value]) => {
                    countrySelect.append(`<option value="${key}">${value}</option>`);
                });
                
                if (typeof $.fn.select2 !== 'undefined') {
                    countrySelect.trigger('change');
                }
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
                const breedSelect = $('#breedFilter');
                breedSelect.empty().append('<option value="">Select Breed</option>');
                
                Object.entries(data).forEach(([key, value]) => {
                    breedSelect.append(`<option value="${key}">${value}</option>`);
                });
                
                if (typeof $.fn.select2 !== 'undefined') {
                    breedSelect.trigger('change');
                }
            })
            .catch(error => {
                console.error('Error loading breeds:', error);
            });
    }
    
    // Load bloodlines for selected breed
    function loadBloodlines(breedId) {
        fetch(`/filters/bloodlines?breed=${breedId}`)
            .then(response => response.json())
            .then(data => {
                const bloodlineSelect = $('#bloodlineFilter');
                bloodlineSelect.empty().append('<option value="">Select Bloodline</option>');
                
                Object.entries(data).forEach(([key, value]) => {
                    bloodlineSelect.append(`<option value="${key}">${value}</option>`);
                });
                
                if (typeof $.fn.select2 !== 'undefined') {
                    bloodlineSelect.trigger('change');
                }
            })
            .catch(error => {
                console.error('Error loading bloodlines:', error);
            });
    }
    
    // Update apply button state
    function updateApplyButton() {
        const hasSelection = $('#countryFilter').val() || $('#breedFilter').val() || $('#bloodlineFilter').val();
        $('#applyFilters').prop('disabled', !hasSelection);
    }
    
    // Fallback function for standard dropdowns
    function initializeStandardDropdowns() {
        console.log('Initializing standard dropdowns as fallback');
        
        // Add basic styling for standard dropdowns
        $('.filter-select').addClass('form-control');
        
        // Update change handlers to work with standard dropdowns
        $('#countryFilter').off('change').on('change', function() {
            const countryId = $(this).val();
            
            // Reset dependent dropdowns
            $('#breedFilter').val('');
            $('#bloodlineFilter').val('');
            $('#breedFilterGroup').hide();
            $('#bloodlineFilterGroup').hide();
            
            if (countryId) {
                loadBreeds(countryId);
                $('#breedFilterGroup').show();
            }
            
            updateApplyButton();
        });
        
        $('#breedFilter').off('change').on('change', function() {
            const breedId = $(this).val();
            
            // Reset bloodline dropdown
            $('#bloodlineFilter').val('');
            $('#bloodlineFilterGroup').hide();
            
            if (breedId) {
                loadBloodlines(breedId);
                $('#bloodlineFilterGroup').show();
            }
            
            updateApplyButton();
        });
        
        $('#bloodlineFilter').off('change').on('change', function() {
            updateApplyButton();
        });
    }
});
</script>
