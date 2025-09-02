@extends('layouts.app')

@section('title', 'Your Details - Dogifier')

@section('content')
    <div class="container-fluid bg-white">
        <div class="container">
            <div class="min-vh-100 d-flex align-items-center justify-content-center py-4">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="d-flex align-items-center justify-content-center h-100 p-3">
                            <img src="{{ asset('login-vector.svg') }}" class="w-100" alt="Dog">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="p-4">
                            <h3 class="primary-color mb-2">Your Details</h3>
                            <p class="text-muted primary-color mb-4">Please enter your details</p>

                            <!-- Profile Picture Section -->
                            <div class="text-center mb-4">
                                <div class="position-relative d-inline-block">
                                    <div class="rounded-circle bg-light border d-flex align-items-center justify-content-center" 
                                         style="width: 100px; height: 100px; border: 1px solid #e0e0e0;">
                                        <i class="bi bi-person text-muted" style="font-size: 2.5rem;"></i>
                                    </div>
                                    <div class="position-absolute bottom-0 end-0 bg-primary rounded-circle d-flex align-items-center justify-content-center" 
                                         style="width: 30px; height: 30px; cursor: pointer;" id="editProfilePic">
                                        <i class="bi bi-pencil text-white" style="font-size: 0.875rem;"></i>
                                    </div>
                                </div>
                            </div>

                            <!-- First Name and Last Name Row -->
                            <div class="row mb-3">
                                <div class="col-6">
                                    <input type="text" class="form-control" placeholder="First Name" id="firstName">
                                </div>
                                <div class="col-6">
                                    <input type="text" class="form-control" placeholder="Last Name" id="lastName">
                                </div>
                            </div>

                            <!-- Phone Number Input -->
                            <div class="mb-3">
                                <input type="tel" class="form-control" 
                                       placeholder="Enter Your Phone Number" id="phoneNumber">
                            </div>

                            <!-- About Section -->
                            <div class="mb-3">
                                <textarea class="form-control" rows="3" 
                                          placeholder="Write About Your Dog and Yourself" id="about"></textarea>
                            </div>

                            <!-- Date Input -->
                            <div class="input-group mb-4">
                                <input type="date" class="form-control" placeholder="MM/DD/YYYY" id="birthDate">
                                
                            </div>

                            <!-- Save and Next Button -->
                            <div class="d-flex justify-content-center gap-2 mb-4">
                                <a href="{{ route('address') }}" class="btn btn-primary text-white px-5 fs-6 text-decoration-none">Save and Next</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Profile picture edit functionality
            const editIcon = document.getElementById('editProfilePic');
            const profilePicture = document.querySelector('.bi-person').parentElement;
            
            if (editIcon && profilePicture) {
                editIcon.addEventListener('click', function() {
                    // Create file input for image upload
                    const fileInput = document.createElement('input');
                    fileInput.type = 'file';
                    fileInput.accept = 'image/*';
                    fileInput.style.display = 'none';
                    
                    fileInput.addEventListener('change', function(e) {
                        const file = e.target.files[0];
                        if (file) {
                            const reader = new FileReader();
                            reader.onload = function(e) {
                                profilePicture.innerHTML = `<img src="${e.target.result}" class="rounded-circle" style="width: 100px; height: 100px; object-fit: cover;">`;
                            };
                            reader.readAsDataURL(file);
                        }
                    });
                    
                    document.body.appendChild(fileInput);
                    fileInput.click();
                    document.body.removeChild(fileInput);
                });
            }
        });
    </script>
@endsection
