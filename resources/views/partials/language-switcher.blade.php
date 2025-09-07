<!-- Language Switcher -->
<div class="language-switcher">
    <div class="language-dropdown">
        <button class="language-btn" type="button" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="fas fa-globe"></i>
            <span class="current-language">{{ app()->getLocale() == 'en' ? 'English' : (app()->getLocale() == 'es' ? 'Español' : (app()->getLocale() == 'fr' ? 'Français' : 'हिन्दी')) }}</span>
            <i class="fas fa-chevron-down"></i>
        </button>
        <ul class="dropdown-menu language-menu">
            <li>
                <a href="{{ route('language.switch', 'en') }}" class="dropdown-item {{ app()->getLocale() == 'en' ? 'active' : '' }}">
                    <span class="flag-icon">🇺🇸</span>
                    <span>English</span>
                </a>
            </li>
            <li>
                <a href="{{ route('language.switch', 'es') }}" class="dropdown-item {{ app()->getLocale() == 'es' ? 'active' : '' }}">
                    <span class="flag-icon">🇪🇸</span>
                    <span>Español</span>
                </a>
            </li>
            <li>
                <a href="{{ route('language.switch', 'fr') }}" class="dropdown-item {{ app()->getLocale() == 'fr' ? 'active' : '' }}">
                    <span class="flag-icon">🇫🇷</span>
                    <span>Français</span>
                </a>
            </li>
            <li>
                <a href="{{ route('language.switch', 'hi') }}" class="dropdown-item {{ app()->getLocale() == 'hi' ? 'active' : '' }}">
                    <span class="flag-icon">🇮🇳</span>
                    <span>हिन्दी</span>
                </a>
            </li>
        </ul>
    </div>
</div>

<style>
.language-switcher {
    position: relative;
}

.language-btn {
    display: flex;
    align-items: center;
    gap: 8px;
    padding: 8px 12px;
    background: transparent;
    border: 1px solid #e5e7eb;
    border-radius: 8px;
    color: #6b7280;
    font-size: 14px;
    cursor: pointer;
    transition: all 0.2s ease;
}

.language-btn:hover {
    background: #f9fafb;
    border-color: #d1d5db;
    color: #374151;
}

.language-btn i {
    font-size: 16px;
}

.language-btn .fas.fa-chevron-down {
    font-size: 12px;
    margin-left: 4px;
}

.language-menu {
    min-width: 180px;
    border: 1px solid #e5e7eb;
    border-radius: 8px;
    box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
    padding: 8px 0;
    margin-top: 4px;
}

.language-menu .dropdown-item {
    display: flex;
    align-items: center;
    gap: 12px;
    padding: 10px 16px;
    color: #374151;
    text-decoration: none;
    transition: background-color 0.2s ease;
    font-size: 14px;
}

.language-menu .dropdown-item:hover {
    background: #f9fafb;
    color: #1f2937;
}

.language-menu .dropdown-item.active {
    background: #eff6ff;
    color: #2563eb;
    font-weight: 500;
}

.flag-icon {
    font-size: 18px;
    width: 20px;
    text-align: center;
}


/* Header specific styles */
.header .language-switcher .language-btn {
    background: rgba(255, 255, 255, 0.1);
    border-color: rgba(255, 255, 255, 0.2);
    color: #1f2937;
}

.header .language-switcher .language-btn:hover {
    background: rgba(255, 255, 255, 0.2);
    border-color: rgba(255, 255, 255, 0.3);
}

/* Login page specific styles */
.login-page .language-switcher {
    position: absolute;
    top: 20px;
    right: 20px;
    z-index: 10;
}

.login-page .language-switcher .language-btn {
    background: rgba(255, 255, 255, 0.9);
    backdrop-filter: blur(10px);
    border-color: rgba(255, 255, 255, 0.3);
}

.login-page .language-switcher .language-btn:hover {
    background: rgba(255, 255, 255, 1);
    border-color: rgba(255, 255, 255, 0.5);
}
</style>
