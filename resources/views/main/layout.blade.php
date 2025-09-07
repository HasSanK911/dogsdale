                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        <!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Dogifier')</title>
    
    <!-- Google Fonts - Outfit -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <style>
        /* World-Class Header Design */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Outfit', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
            color: #1a1a1a;
            background: #f1f1f1;
            min-height: 100vh;
        }

        /* Header */
        .header {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(20px);
            border-bottom: 1px solid rgba(255, 255, 255, 0.2);
            position: sticky;
            top: 0;
            z-index: 1000;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        }

        .header-container {
            width: 100%;
            padding: 0 24px;
            height: 72px;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        /* Left Section - Logo */
        .header-left {
            display: flex;
            align-items: center;
        }

        .logo {
            display: flex;
            align-items: center;
            text-decoration: none;
            gap: 12px;
            transition: transform 0.3s ease;
        }

        .logo:hover {
            transform: translateY(-2px);
        }

        .logo-icon {
            position: relative;
            animation: float 3s ease-in-out infinite;
        }

        @keyframes float {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-4px); }
        }

        .logo-text {
            font-size: 28px;
            font-weight: 800;
            background: linear-gradient(135deg, #00A8D1 0%, #0088B8 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            letter-spacing: -0.5px;
        }

        /* Center Section - Search */
        .header-center {
            flex: 1;
            max-width: 500px;
            margin: 0 40px;
        }

        .search-container {
            position: relative;
            display: flex;
            align-items: center;
        }

        .search-icon {
            position: absolute;
            left: 16px;
            color: #8b5cf6;
            z-index: 1;
            transition: color 0.3s ease;
        }

        .search-input {
            width: 100%;
            height: 48px;
            padding: 0 16px 0 48px;
            border: 2px solid transparent;
            border-radius: 24px;
            background: rgba(255, 255, 255, 0.8);
            font-size: 16px;
            outline: none;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            backdrop-filter: blur(10px);
        }

        .search-input:focus {
            background: rgba(255, 255, 255, 0.95);
            border-color: #00A8D1;
            box-shadow: 0 0 0 4px rgba(0, 168, 209, 0.1);
            transform: translateY(-1px);
        }

        .search-input:focus + .search-shortcut {
            opacity: 0;
        }

        .search-input::placeholder {
            color: #6b7280;
            font-weight: 400;
        }

        .search-shortcut {
            position: absolute;
            right: 16px;
            background: rgba(139, 92, 246, 0.1);
            color: #8b5cf6;
            padding: 4px 8px;
            border-radius: 6px;
            font-size: 12px;
            font-weight: 600;
            transition: opacity 0.3s ease;
        }

        /* Right Section - Navigation */
        .header-right {
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .nav-items {
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .nav-item {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 48px;
            height: 48px;
            border-radius: 12px;
            color: #6b7280;
            text-decoration: none;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            position: relative;
            background: rgba(255, 255, 255, 0.5);
            backdrop-filter: blur(10px);
        }

        .nav-item:hover {
            background: rgba(0, 168, 209, 0.1);
            color: #00A8D1;
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(0, 168, 209, 0.2);
        }

        .nav-item.active {
            background: linear-gradient(135deg, #00A8D1 0%, #0088B8 100%);
            color: white;
            box-shadow: 0 8px 25px rgba(0, 168, 209, 0.4);
        }

        .nav-item.active::after {
            content: '';
            position: absolute;
            bottom: -8px;
            left: 50%;
            transform: translateX(-50%);
            width: 24px;
            height: 3px;
            background: linear-gradient(135deg, #00A8D1 0%, #0088B8 100%);
            border-radius: 2px;
        }

        .notification-dot {
            position: absolute;
            top: 8px;
            right: 8px;
            width: 8px;
            height: 8px;
            background: #ef4444;
            border-radius: 50%;
            border: 2px solid white;
            animation: pulse 2s infinite;
        }

        .notification-badge {
            position: absolute;
            top: 6px;
            right: 6px;
            background: linear-gradient(135deg, #ef4444 0%, #dc2626 100%);
            color: white;
            font-size: 10px;
            font-weight: 700;
            min-width: 18px;
            height: 18px;
            border-radius: 9px;
            display: flex;
            align-items: center;
            justify-content: center;
            border: 2px solid white;
            box-shadow: 0 2px 8px rgba(239, 68, 68, 0.3);
        }

        @keyframes pulse {
            0% { transform: scale(1); opacity: 1; }
            50% { transform: scale(1.2); opacity: 0.7; }
            100% { transform: scale(1); opacity: 1; }
        }

        /* Profile Menu */
        .profile-menu {
            position: relative;
            margin-left: 12px;
        }

        .profile-btn {
            border: none;
            background: none;
            cursor: pointer;
            padding: 4px;
            border-radius: 50%;
            transition: all 0.3s ease;
        }

        .profile-btn:hover {
            transform: scale(1.05);
        }

        .profile-avatar {
            position: relative;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            overflow: hidden;
        }

        .avatar-ring {
            position: absolute;
            top: -2px;
            left: -2px;
            right: -2px;
            bottom: -2px;
            background: linear-gradient(135deg, #00A8D1 0%, #0088B8 100%);
            border-radius: 50%;
            z-index: -1;
            animation: rotate 3s linear infinite;
        }

        @keyframes rotate {
            from { transform: rotate(0deg); }
            to { transform: rotate(360deg); }
        }

        .profile-img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: 50%;
        }

        /* Dropdown */
        .dropdown-menu {
            position: absolute;
            top: 100%;
            right: 0;
            margin-top: 12px;
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.2);
            border-radius: 16px;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
            min-width: 280px;
            padding: 16px 0;
            list-style: none;
            z-index: 1000;
            overflow: hidden;
        }

        .dropdown-header {
            padding: 16px 20px;
            border-bottom: 1px solid rgba(0, 0, 0, 0.1);
            margin-bottom: 8px;
        }

        .user-info {
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .user-avatar {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            overflow: hidden;
        }

        .user-avatar img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .user-details {
            flex: 1;
        }

        .user-name {
            font-weight: 600;
            color: #1a1a1a;
            font-size: 16px;
        }

        .user-email {
            color: #6b7280;
            font-size: 14px;
        }

        .dropdown-link {
            display: flex;
            align-items: center;
            gap: 12px;
            padding: 12px 20px;
            color: #374151;
            text-decoration: none;
            font-size: 15px;
            font-weight: 500;
            transition: all 0.2s ease;
        }

        .dropdown-link:hover {
            background: rgba(139, 92, 246, 0.1);
            color: #8b5cf6;
            transform: translateX(4px);
        }

        .dropdown-link.logout {
            color: #ef4444;
        }

        .dropdown-link.logout:hover {
            background: rgba(239, 68, 68, 0.1);
            color: #dc2626;
        }

        .dropdown-divider {
            height: 1px;
            background: rgba(0, 0, 0, 0.1);
            margin: 8px 0;
            border: none;
        }

        /* Main Layout */
        .main-layout {
            display: flex;
            min-height: calc(100vh - 72px);
        }

        /* Main Content */
        .main-content {
            flex: 1;
            padding: 16px;
            margin-left: 0;
        }

       

        /* Responsive */
        @media (max-width: 768px) {
            .header-center {
                display: none;
            }
            
            .header-container {
                padding: 0 16px;
                height: 64px;
            }
            
            .logo-text {
                font-size: 24px;
            }
            
            .nav-items {
                gap: 12px;
            }
            
            .nav-item {
                width: 44px;
                height: 44px;
            }
            
        }

        @media (max-width: 480px) {
            .header-container {
                justify-content: space-between;
            }
            
            .nav-items {
                gap: 8px;
            }
            
            .nav-item {
                width: 36px;
                height: 36px;
                padding: 8px;
            }
            
            .nav-item svg {
                width: 18px;
                height: 18px;
            }
            
            .profile-btn {
                width: 36px;
                height: 36px;
            }
            
            .profile-avatar {
                width: 32px;
                height: 32px;
            }
            
            .main-content {
                margin-left: 0;
                padding: 20px;
            }
        }

    </style>
</head>
<body>
    <!-- Header -->
    <header class="header">
        <div class="header-container">
            <!-- Left Section - Logo -->
            <div class="header-left">
                <a href="{{ route('home') }}" class="logo">
                    <div class="logo-icon">
                        <svg width="32" height="32" viewBox="0 0 24 24" fill="none">
                            <path d="M12 2L2 7l10 5 10-5-10-5z" fill="url(#gradient1)"/>
                            <path d="M2 17l10 5 10-5M2 12l10 5 10-5" stroke="url(#gradient2)" stroke-width="2" fill="none"/>
                            <defs>
                                <linearGradient id="gradient1" x1="0%" y1="0%" x2="100%" y2="100%">
                                    <stop offset="0%" style="stop-color:#00A8D1;stop-opacity:1" />
                                    <stop offset="100%" style="stop-color:#0088B8;stop-opacity:1" />
                                </linearGradient>
                                <linearGradient id="gradient2" x1="0%" y1="0%" x2="100%" y2="100%">
                                    <stop offset="0%" style="stop-color:#00A8D1;stop-opacity:1" />
                                    <stop offset="100%" style="stop-color:#00C4E6;stop-opacity:1" />
                                </linearGradient>
                            </defs>
                        </svg>
                    </div>
                    <span class="logo-text">{{ __('messages.app_name') }}</span>
                </a>
            </div>

            <!-- Center Section - Search
            <div class="header-center">
                <div class="search-container">
                    <div class="search-icon">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <circle cx="11" cy="11" r="8"></circle>
                            <path d="m21 21-4.35-4.35"></path>
                        </svg>
                    </div>
                    <input type="text" class="search-input" placeholder="{{ __('messages.search_anything') }}">
                </div>
            </div> -->

            <!-- Right Section - Navigation -->
            <div class="header-right">
                <!-- Language Switcher -->
                @include('partials.language-switcher')
                
                <div class="nav-items">
                    <a href="#" class="nav-item" title="Messages">
                        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path>
                        </svg>
                        <span class="notification-dot"></span>
                    </a>
                    
                    <a href="#" class="nav-item" title="Notifications">
                        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path>
                            <path d="M13.73 21a2 2 0 0 1-3.46 0"></path>
                        </svg>
                        <span class="notification-badge">3</span>
                    </a>
                    
                </div>

                <!-- Profile Menu -->
                <div class="profile-menu">
                    <button class="profile-btn" data-bs-toggle="dropdown">
                        <div class="profile-avatar">
                            <div class="avatar-ring"></div>
                            <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?w=40&h=40&fit=crop&crop=face" alt="Profile" class="profile-img">
                        </div>
                    </button>
                    <ul class="dropdown-menu">
                        <li class="dropdown-header">
                            <div class="user-info">
                                <div class="user-avatar">
                                    <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?w=40&h=40&fit=crop&crop=face" alt="Profile">
                                </div>
                                <div class="user-details">
                                    <div class="user-name">{{ __('messages.profile_name') }}</div>
                                    <div class="user-email">john@dogsdale.com</div>
                                </div>
                            </div>
                        </li>
                        <li><a href="{{ route('home') }}" class="dropdown-link">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                                <polyline points="9,22 9,12 15,12 15,22"></polyline>
                            </svg>
                            {{ __('messages.home') }}
                        </a></li>
                        <li><a href="{{ route('dogs') }}" class="dropdown-link">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                <circle cx="12" cy="7" r="4"></circle>
                            </svg>
                            {{ __('messages.dogs') }}
                        </a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a href="{{ route('login') }}" class="dropdown-link logout">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
                                <polyline points="16,17 21,12 16,7"></polyline>
                                <line x1="21" y1="12" x2="9" y2="12"></line>
                            </svg>
                            {{ __('messages.logout') }}
                        </a></li>
                    </ul>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content Area -->
    <div class="main-layout">
        <div class="main-content">
            @yield('content')
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
    <script>
        // Initialize tooltips
        document.addEventListener('DOMContentLoaded', function() {
            var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
            var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
                return new bootstrap.Tooltip(tooltipTriggerEl);
            });
        });
    </script>
    
    @yield('scripts')
</body>
</html>
