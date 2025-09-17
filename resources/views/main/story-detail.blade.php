@extends('main.layout')

@section('title', 'Story Detail - Dogsdale')

@section('content')
<div class="story-detail-page">
    <!-- Page Header -->
    <div class="page-header">
        <h1 class="main-title">American Pit Bull Terrier</h1>
    </div>
    
    <!-- Main Image -->
    <div class="main-image-section">
        <img src="{{ asset('dogs/methodman.jpeg') }}" alt="Methodman" class="main-image">
    </div>


    <!-- Body Life Section -->
    <div class="content-section">
        <div class="container">
            <h2 class="section-title">Body Life</h2>
            <div class="body-life-content">
                <div class="text-content">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
                <div class="image-content">
                    <img src="{{ asset('dogs/redboy.jpeg') }}" alt="Body Life" class="section-image">
                </div>
            </div>
        </div>
    </div>

    <!-- Quote Section -->
    <div class="content-section">
        <div class="container">
            <h2 class="section-title">Quote</h2>
            <div class="quote-images">
                <img src="{{ asset('dogs/jeep.jpg') }}" alt="Quote 1" class="quote-image">
                <img src="{{ asset('dogs/eli.jpeg') }}" alt="Quote 2" class="quote-image">
            </div>
            <div class="quote-text">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
        </div>
    </div>

    <!-- Additional Content -->
    <div class="content-section">
        <div class="container">
            <div class="additional-content">
                <div class="text-content">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                </div>
                <div class="image-content">
                    <img src="{{ asset('dogs/davidbates.jpg') }}" alt="Additional" class="section-image">
                </div>
            </div>
        </div>
    </div>

    <!-- Photo Gallery Section -->
    <div class="content-section">
        <div class="container">
            <h2 class="section-title">Photo Gallery</h2>
            <div class="photo-gallery">
                <div class="gallery-item">
                    <img src="{{ asset('dogs/redboy.jpeg') }}" alt="Gallery 1" class="gallery-image">
                </div>
                <div class="gallery-item">
                    <img src="{{ asset('dogs/jeep.jpg') }}" alt="Gallery 2" class="gallery-image">
                </div>
                <div class="gallery-item">
                    <img src="{{ asset('dogs/eli.jpeg') }}" alt="Gallery 3" class="gallery-image">
                </div>
                <div class="gallery-item">
                    <img src="{{ asset('dogs/davidbates.jpg') }}" alt="Gallery 4" class="gallery-image">
                </div>
                <div class="gallery-item">
                    <img src="{{ asset('dogs/christiangray.jpg') }}" alt="Gallery 5" class="gallery-image">
                </div>
                <div class="gallery-item">
                    <img src="{{ asset('dogs/jocko.jpeg') }}" alt="Gallery 6" class="gallery-image">
                </div>
                <div class="gallery-item">
                    <img src="{{ asset('dogs/mayday.jpeg') }}" alt="Gallery 7" class="gallery-image">
                </div>
                <div class="gallery-item">
                    <img src="{{ asset('dogs/wendell.jpg') }}" alt="Gallery 8" class="gallery-image">
                </div>
            </div>
        </div>
    </div>

    <!-- Videos Section -->
    <div class="content-section">
        <div class="container">
            <h2 class="section-title">Videos</h2>
            <div class="videos-grid">
                <div class="video-thumbnail">
                    <video class="video-player" controls>
                        <source src="https://sample-videos.com/zip/10/mp4/SampleVideo_1280x720_1mb.mp4" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                </div>
                <div class="video-thumbnail">
                    <video class="video-player" controls>
                        <source src="https://sample-videos.com/zip/10/mp4/SampleVideo_1280x720_2mb.mp4" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                </div>
                <div class="video-thumbnail">
                    <video class="video-player" controls>
                        <source src="https://sample-videos.com/zip/10/mp4/SampleVideo_1280x720_5mb.mp4" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                </div>
            </div>
        </div>
    </div>

    <!-- Pedigree Section -->
    <div class="content-section">
        <div class="container">
            <h2 class="section-title">Pedigree</h2>
            <p class="pedigree-description">This is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
            <div class="pedigree-iframe-container">
                <iframe 
                    src="https://www.apbt.online-pedigrees.com/modules.php?name=Public&file=printPedigree&dog_id=704252" 
                    class="pedigree-iframe"
                    title="Methodman Pedigree"
                    allowfullscreen>
                </iframe>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <div class="footer-line"></div>
</div>

<style>
/* Reset and Base Styles */
*, *::before, *::after {
    box-sizing: border-box;
    margin: 0;
    padding: 0;
}

@import url('https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700;800;900&display=swap');

body.story-detail-body {
    overflow: auto !important;
    height: auto !important;
    font-family: 'Outfit', sans-serif;
    line-height: 1.6;
    color: #333;
    background: #ffffff;
}

body.story-detail-body .main-layout {
    height: auto !important;
    overflow: visible !important;
    display: block !important;
}

body.story-detail-body .main-content {
    overflow: visible !important;
    height: auto !important;
}

body.story-detail-body .container-fluid {
    overflow: visible !important;
    height: auto !important;
}

/* Story Detail Page */
.story-detail-page {
    min-height: 100vh;
    background: #ffffff;
    overflow-x: hidden;
}

/* Photo Gallery */
.photo-gallery {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 20px;
    margin-top: 20px;
}

.gallery-item {
    position: relative;
    overflow: hidden;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.gallery-item:hover {
    transform: translateY(-5px);
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
}

.gallery-image {
    width: 100%;
    height: 250px;
    object-fit: cover;
    display: block;
    transition: transform 0.3s ease;
}

.gallery-item:hover .gallery-image {
    transform: scale(1.05);
}

/* Page Header */
.page-header {
    padding: 20px 0;
    text-align: center;
}

.main-title {
    font-size: 2rem;
    font-weight: bold;
    color: #000000;
    margin: 0;
}

/* Main Image */
.main-image-section {
    width: 100%;
    margin-bottom: 40px;
}

.main-image {
    width: 100%;
    height: 500px;
    object-fit: cover;
    display: block;
}

/* Container */
.container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 20px;
}

/* Content Sections */
.content-section {
    margin-bottom: 40px;
}

.section-title {
    font-size: 1.2rem;
    font-weight: bold;
    color: #87CEEB;
    margin-bottom: 20px;
}

/* Body Life Section */
.body-life-content {
    display: flex;
    gap: 30px;
    align-items: flex-start;
}

.text-content {
    flex: 1;
}

.text-content p {
    margin-bottom: 15px;
    font-size: 1.1rem;
    line-height: 1.6;
    color: #333;
}

.image-content {
    flex: 0 0 400px;
}

.section-image {
    width: 100%;
    height: 400px;
    object-fit: cover;
    border-radius: 8px;
}

/* Quote Section */
.quote-images {
    display: flex;
    gap: 20px;
    margin-bottom: 20px;
}

.quote-image {
    width: 300px;
    height: 300px;
    object-fit: cover;
    border-radius: 8px;
}

.quote-text {
    margin-top: 20px;
}

.quote-text p {
    margin-bottom: 15px;
    font-size: 1.1rem;
    line-height: 1.6;
    color: #333;
}

/* Additional Content */
.additional-content {
    display: flex;
    gap: 30px;
    align-items: flex-start;
}

/* Videos Section */
.videos-grid {
    display: flex;
    gap: 20px;
    justify-content: center;
}

.video-thumbnail {
    width: 350px;
    height: 350px;
}

.video-player {
    width: 100%;
    height: 100%;
    object-fit: cover;
    border-radius: 8px;
    background: #000;
}

/* Pedigree Section */
.pedigree-description {
    color: #FF8C00;
    font-size: 1.1rem;
    margin-bottom: 20px;
}

.pedigree-iframe-container {
    width: 100%;
    height: 600px;
    border: 1px solid #ddd;
    border-radius: 8px;
    overflow: hidden;
}

.pedigree-iframe {
    width: 100%;
    height: 100%;
    border: none;
}

/* Footer */
.footer-line {
    height: 4px;
    background: #87CEEB;
    width: 100%;
    margin-top: 40px;
}

/* Responsive Design */
@media (max-width: 768px) {
    .container {
        padding: 0 15px;
    }
    
    .main-title {
        font-size: 1.5rem;
    }
    
    .section-title {
        font-size: 1.1rem;
    }
    
    .body-life-content,
    .additional-content {
        flex-direction: column;
        gap: 20px;
    }
    
    .image-content {
        flex: none;
    }
    
    .quote-images {
        flex-direction: column;
        align-items: center;
    }
    
    .quote-image {
        width: 250px;
        height: 250px;
    }
    
    .videos-grid {
        flex-direction: column;
        align-items: center;
        gap: 15px;
    }
    
    .video-thumbnail {
        width: 280px;
        height: 280px;
    }
    
    .pedigree-iframe-container {
        height: 400px;
    }
    
    .photo-gallery {
        grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
        gap: 18px;
    }
    
    .gallery-image {
        height: 220px;
    }
}

@media (max-width: 480px) {
    .main-title {
        font-size: 1.4rem;
    }
    
    .section-title {
        font-size: 1rem;
    }
    
    .main-image {
        height: 350px;
    }
    
    .section-image {
        height: 300px;
    }
    
    .quote-image {
        width: 250px;
        height: 250px;
    }
    
    .video-thumbnail {
        width: 300px;
        height: 300px;
    }
    
    .pedigree-iframe-container {
        height: 400px;
    }
    
    .photo-gallery {
        grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
        gap: 15px;
    }
    
    .gallery-image {
        height: 200px;
    }
}

/* Hero Section */
.hero {
    min-height: 100vh;
    display: flex;
    align-items: center;
    background: linear-gradient(135deg, #f8f9fa 0%, #ffffff 100%);
    position: relative;
    overflow: hidden;
}

.hero::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: radial-gradient(circle at 20% 80%, rgba(0, 168, 209, 0.1) 0%, transparent 50%),
                radial-gradient(circle at 80% 20%, rgba(0, 168, 209, 0.05) 0%, transparent 50%);
    pointer-events: none;
}

.hero-container {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 80px;
    align-items: center;
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 40px;
    position: relative;
    z-index: 1;
}

.hero-content {
    animation: slideInLeft 0.8s ease-out;
}

.hero-badge {
    display: inline-block;
    background: linear-gradient(135deg, #00A8D1, #007acc);
    color: white;
    padding: 8px 16px;
    border-radius: 20px;
    font-size: 0.8rem;
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 0.5px;
    margin-bottom: 24px;
    box-shadow: 0 4px 12px rgba(0, 168, 209, 0.2);
}

.hero-title {
    font-size: 3.5rem;
    font-weight: 700;
    line-height: 1.1;
    margin-bottom: 24px;
    color: #1a1a1a;
}

.title-line {
    display: block;
}

.title-line.highlight {
    background: linear-gradient(135deg, #00A8D1, #007acc);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
}

.hero-description {
    font-size: 1.1rem;
    line-height: 1.7;
    color: #666;
    margin-bottom: 40px;
    max-width: 500px;
}

.hero-actions {
    display: flex;
    gap: 16px;
    margin-top: 32px;
}

.btn-primary {
    background: linear-gradient(135deg, #00A8D1, #007acc);
    color: white;
    border: none;
    padding: 12px 24px;
    border-radius: 8px;
    font-size: 0.9rem;
    font-weight: 600;
    cursor: pointer;
    transition: all 0.3s ease;
    box-shadow: 0 4px 12px rgba(0, 168, 209, 0.2);
}

.btn-primary:hover {
    transform: translateY(-2px);
    box-shadow: 0 8px 20px rgba(0, 168, 209, 0.3);
}

.btn-secondary {
    background: transparent;
    color: #00A8D1;
    border: 2px solid #00A8D1;
    padding: 10px 24px;
    border-radius: 8px;
    font-size: 0.9rem;
    font-weight: 600;
    cursor: pointer;
    transition: all 0.3s ease;
}

.btn-secondary:hover {
    background: #00A8D1;
    color: white;
    transform: translateY(-2px);
    box-shadow: 0 8px 20px rgba(0, 168, 209, 0.2);
}

.hero-visual {
    animation: slideInRight 0.8s ease-out;
}

.image-frame {
    position: relative;
    border-radius: 24px;
    overflow: hidden;
    box-shadow: 0 20px 60px rgba(0, 0, 0, 0.15);
    background: white;
    padding: 8px;
}

.hero-image {
    width: 100%;
    height: 500px;
    object-fit: cover;
    border-radius: 16px;
    transition: transform 0.4s ease;
}

.image-frame:hover .hero-image {
    transform: scale(1.02);
}

.image-overlay {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: linear-gradient(135deg, rgba(0, 168, 209, 0.1) 0%, transparent 50%);
    pointer-events: none;
}

.scroll-hint {
    position: absolute;
    bottom: 40px;
    left: 50%;
    transform: translateX(-50%);
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 8px;
    color: #666;
    font-size: 0.8rem;
    text-transform: uppercase;
    letter-spacing: 1px;
    animation: fadeInUp 1s ease-out 0.5s both;
}

.scroll-line {
    width: 1px;
    height: 30px;
    background: linear-gradient(to bottom, #00A8D1, transparent);
    animation: scrollLine 2s ease-in-out infinite;
}

@keyframes slideInLeft {
    from {
        opacity: 0;
        transform: translateX(-50px);
    }
    to {
        opacity: 1;
        transform: translateX(0);
    }
}

@keyframes slideInRight {
    from {
        opacity: 0;
        transform: translateX(50px);
    }
    to {
        opacity: 1;
        transform: translateX(0);
    }
}

@keyframes fadeInUp {
    from {
        opacity: 0;
        transform: translateY(20px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

@keyframes scrollLine {
    0%, 100% {
        opacity: 0.3;
        transform: scaleY(0.5);
    }
    50% {
        opacity: 1;
        transform: scaleY(1);
    }
}

/* Main Content Wrapper */
.main-content-wrapper {
    background: #ffffff;
    position: relative;
    z-index: 10;
}

/* Container */
.container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 40px;
}

/* Section Styles */
.section-intro {
    text-align: center;
    margin-bottom: 80px;
}

.section-label {
    display: inline-block;
    background: linear-gradient(135deg, #00A8D1, #007acc);
    color: white;
    padding: 6px 16px;
    border-radius: 20px;
    font-size: 0.8rem;
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 0.5px;
    margin-bottom: 16px;
}

.section-heading {
    font-size: 2.5rem;
    font-weight: 700;
    color: #1a1a1a;
    margin-bottom: 16px;
    line-height: 1.2;
}

.section-subtitle {
    font-size: 1.1rem;
    color: #666;
    max-width: 600px;
    margin: 0 auto;
    line-height: 1.6;
}

/* About Section */
.about {
    padding: 120px 0;
    background: linear-gradient(135deg, #f8f9fa 0%, #ffffff 100%);
}

.about-layout {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 80px;
    align-items: center;
}

.about-text {
    animation: fadeInUp 0.8s ease-out;
}

.text-block {
    margin-bottom: 40px;
}

.text-block h3 {
    font-size: 1.5rem;
    font-weight: 600;
    color: #1a1a1a;
    margin-bottom: 16px;
}

.text-block p {
    font-size: 1rem;
    line-height: 1.7;
    color: #555;
    margin-bottom: 16px;
}

.features-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 20px;
}

.feature-card {
    background: white;
    padding: 24px 20px;
    border-radius: 16px;
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
    border: 1px solid #f0f0f0;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    display: flex;
    align-items: center;
    gap: 16px;
}

.feature-card:hover {
    transform: translateY(-4px);
    box-shadow: 0 8px 30px rgba(0, 0, 0, 0.12);
}

.feature-icon {
    width: 48px;
    height: 48px;
    background: linear-gradient(135deg, #00A8D1, #007acc);
    border-radius: 12px;
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
    font-size: 1.2rem;
    flex-shrink: 0;
}

.feature-content h4 {
    font-size: 1rem;
    font-weight: 600;
    color: #1a1a1a;
    margin-bottom: 4px;
}

.feature-content p {
    font-size: 0.8rem;
    color: #666;
    margin: 0;
}

.about-image {
    animation: fadeInUp 0.8s ease-out 0.2s both;
}

.image-wrapper {
    position: relative;
    border-radius: 20px;
    overflow: hidden;
    box-shadow: 0 20px 60px rgba(0, 0, 0, 0.15);
}

.about-img {
    width: 100%;
    height: 400px;
    object-fit: cover;
    transition: transform 0.4s ease;
}

.image-wrapper:hover .about-img {
    transform: scale(1.05);
}

.image-caption {
    position: absolute;
    bottom: 0;
    left: 0;
    right: 0;
    background: linear-gradient(transparent, rgba(0, 0, 0, 0.8));
    color: white;
    padding: 24px;
    transform: translateY(100%);
    transition: transform 0.4s ease;
}

.image-wrapper:hover .image-caption {
    transform: translateY(0);
}

.image-caption h4 {
    font-size: 1.2rem;
    font-weight: 600;
    margin-bottom: 4px;
}

.image-caption p {
    font-size: 0.9rem;
    opacity: 0.9;
    margin: 0;
}

/* Gallery Section */
.gallery {
    padding: 120px 0;
    background: #ffffff;
}

.gallery-grid {
    display: grid;
    grid-template-columns: 2fr 1fr 1fr;
    grid-template-rows: 1fr 1fr;
    gap: 20px;
    height: 500px;
}

.gallery-item {
    position: relative;
    border-radius: 16px;
    overflow: hidden;
    box-shadow: 0 8px 30px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.gallery-item.primary {
    grid-row: 1 / 3;
}

.gallery-item:hover {
    transform: translateY(-8px);
    box-shadow: 0 20px 50px rgba(0, 0, 0, 0.15);
}

.gallery-card {
    position: relative;
    width: 100%;
    height: 100%;
    overflow: hidden;
}

.gallery-img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.4s ease;
}

.gallery-item:hover .gallery-img {
    transform: scale(1.05);
}

.gallery-overlay {
    position: absolute;
    bottom: 0;
    left: 0;
    right: 0;
    background: linear-gradient(transparent, rgba(0, 0, 0, 0.9));
    color: white;
    padding: 24px;
    transform: translateY(100%);
    transition: transform 0.4s ease;
}

.gallery-item:hover .gallery-overlay {
    transform: translateY(0);
}

.gallery-content h4 {
    font-size: 1.2rem;
    font-weight: 600;
    margin-bottom: 8px;
}

.gallery-content p {
    font-size: 0.9rem;
    opacity: 0.9;
    margin-bottom: 16px;
    line-height: 1.4;
}

.gallery-actions {
    display: flex;
    gap: 8px;
}

.gallery-btn {
    width: 32px;
    height: 32px;
    border: none;
    border-radius: 50%;
    background: rgba(255, 255, 255, 0.2);
    color: white;
    display: flex;
    align-items: center;
    justify-content: center;
    cursor: pointer;
    transition: all 0.3s ease;
    backdrop-filter: blur(10px);
}

.gallery-btn:hover {
    background: rgba(255, 255, 255, 0.3);
    transform: scale(1.1);
}

/* Pedigree Section */
.pedigree {
    padding: 120px 0;
    background: linear-gradient(135deg, #f8f9fa 0%, #ffffff 100%);
}

.pedigree-container {
    background: white;
    border-radius: 20px;
    padding: 40px;
    box-shadow: 0 20px 60px rgba(0, 0, 0, 0.1);
    border: 1px solid #f0f0f0;
}

.pedigree-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 40px;
    padding-bottom: 30px;
    border-bottom: 2px solid #f0f0f0;
}

.pedigree-info h3 {
    font-size: 1.8rem;
    font-weight: 700;
    color: #1a1a1a;
    margin-bottom: 8px;
}

.pedigree-info p {
    font-size: 1rem;
    color: #666;
    margin: 0;
}

.pedigree-metrics {
    display: flex;
    gap: 30px;
}

.metric-item {
    text-align: center;
}

.metric-number {
    display: block;
    font-size: 2rem;
    font-weight: 700;
    color: #00A8D1;
    line-height: 1;
}

.metric-text {
    display: block;
    font-size: 0.8rem;
    color: #666;
    text-transform: uppercase;
    letter-spacing: 0.5px;
    margin-top: 4px;
}

.pedigree-content {
    border-radius: 12px;
    overflow: hidden;
    box-shadow: 0 8px 30px rgba(0, 0, 0, 0.1);
}

.pedigree-iframe {
    width: 100%;
    height: 500px;
    border: none;
    display: block;
}

/* Section Headers */
.section-header {
    text-align: center;
    margin-bottom: 60px;
}

.section-tag {
    display: inline-block;
    background: linear-gradient(135deg, #00A8D1, #007acc);
    color: white;
    padding: 6px 16px;
    border-radius: 20px;
    font-size: 0.8rem;
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 1px;
    margin-bottom: 15px;
}

.section-title {
    font-size: 2rem;
    font-weight: 700;
    color: #1a1a1a;
    margin-bottom: 20px;
    line-height: 1.2;
}

.section-description {
    font-size: 1.2rem;
    color: #666;
    max-width: 600px;
    margin: 0 auto;
    line-height: 1.6;
}

/* About Section */
.about-section {
    padding: 100px 0;
    background: linear-gradient(135deg, #f8f9fa 0%, #ffffff 100%);
}

.about-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 80px;
    align-items: center;
}

.about-content {
    padding-right: 40px;
}

.content-card {
    background: white;
    padding: 40px;
    border-radius: 20px;
    box-shadow: 0 20px 60px rgba(0, 0, 0, 0.1);
    margin-bottom: 40px;
    border: 1px solid #f0f0f0;
}

.content-card h3 {
    font-size: 1.8rem;
    font-weight: 700;
    color: #1a1a1a;
    margin-bottom: 20px;
}

.content-card p {
    font-size: 1.1rem;
    line-height: 1.7;
    color: #555;
    margin-bottom: 15px;
}

.achievements-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 20px;
}

.achievement-card {
    background: white;
    padding: 25px 20px;
    border-radius: 15px;
    text-align: center;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
    border: 1px solid #f0f0f0;
    transition: all 0.3s ease;
}

.achievement-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 20px 50px rgba(0, 0, 0, 0.15);
}

.achievement-icon {
    font-size: 2rem;
    margin-bottom: 10px;
}

.achievement-card h4 {
    font-size: 1rem;
    font-weight: 600;
    color: #1a1a1a;
    margin-bottom: 5px;
}

.achievement-card p {
    font-size: 0.9rem;
    color: #666;
    margin: 0;
}

.about-image {
    position: relative;
}

.image-container {
    position: relative;
    border-radius: 20px;
    overflow: hidden;
    box-shadow: 0 25px 80px rgba(0, 0, 0, 0.15);
}

.main-image {
    width: 100%;
    height: 500px;
    object-fit: cover;
    transition: transform 0.4s ease;
}

.image-container:hover .main-image {
    transform: scale(1.05);
}

.image-overlay {
    position: absolute;
    bottom: 0;
    left: 0;
    right: 0;
    background: linear-gradient(transparent, rgba(0, 0, 0, 0.8));
    color: white;
    padding: 30px;
    transform: translateY(100%);
    transition: transform 0.4s ease;
}

.image-container:hover .image-overlay {
    transform: translateY(0);
}

.overlay-content h4 {
    font-size: 1.3rem;
    font-weight: 600;
    margin-bottom: 5px;
}

.overlay-content p {
    font-size: 1rem;
    opacity: 0.9;
    margin: 0;
}

/* Content Layout */
.info-content {
    padding-right: 30px;
}

.info-image {
    position: relative;
}

.section-image {
    width: 100%;
    height: 350px;
    object-fit: cover;
    border-radius: 16px;
    box-shadow: 0 12px 35px rgba(0, 0, 0, 0.15);
    transition: all 0.4s ease;
}

.section-image:hover {
    transform: translateY(-8px);
    box-shadow: 0 20px 50px rgba(0, 0, 0, 0.2);
}

.description-content {
    margin-top: 40px;
    padding: 30px;
    background: linear-gradient(135deg, #f8f9fa 0%, #ffffff 100%);
    border-radius: 16px;
    border-left: 4px solid #00A8D1;
}

/* Gallery Section */
.gallery-section {
    padding: 100px 0;
    background: #ffffff;
}

.gallery-grid {
    display: grid;
    grid-template-columns: 2fr 1fr 1fr;
    grid-template-rows: 1fr 1fr;
    gap: 20px;
    height: 600px;
}

.gallery-item {
    position: relative;
    border-radius: 20px;
    overflow: hidden;
    box-shadow: 0 15px 40px rgba(0, 0, 0, 0.1);
    transition: all 0.4s ease;
}

.gallery-item.featured {
    grid-row: 1 / 3;
}

.gallery-item:hover {
    transform: translateY(-10px);
    box-shadow: 0 25px 60px rgba(0, 0, 0, 0.2);
}

.gallery-card {
    position: relative;
    width: 100%;
    height: 100%;
    overflow: hidden;
}

.gallery-image {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.4s ease;
}

.gallery-item:hover .gallery-image {
    transform: scale(1.08);
}

.gallery-overlay {
    position: absolute;
    bottom: 0;
    left: 0;
    right: 0;
    background: linear-gradient(transparent, rgba(0, 0, 0, 0.9));
    color: white;
    padding: 30px 25px 25px;
    transform: translateY(100%);
    transition: transform 0.4s ease;
}

.gallery-item:hover .gallery-overlay {
    transform: translateY(0);
}

.overlay-content h4 {
    font-size: 1.3rem;
    font-weight: 600;
    margin: 0 0 8px 0;
    color: #ffffff;
}

.overlay-content p {
    font-size: 0.95rem;
    margin: 0 0 15px 0;
    opacity: 0.9;
    line-height: 1.4;
}

.overlay-actions {
    display: flex;
    gap: 10px;
}

.action-btn {
    width: 35px;
    height: 35px;
    border: none;
    border-radius: 50%;
    background: rgba(255, 255, 255, 0.2);
    color: white;
    display: flex;
    align-items: center;
    justify-content: center;
    cursor: pointer;
    transition: all 0.3s ease;
    backdrop-filter: blur(10px);
}

.action-btn:hover {
    background: rgba(255, 255, 255, 0.3);
    transform: scale(1.1);
}

/* Pedigree Section */
.pedigree-section {
    padding: 100px 0;
    background: linear-gradient(135deg, #f8f9fa 0%, #ffffff 100%);
}

.pedigree-container {
    background: white;
    border-radius: 25px;
    padding: 50px;
    box-shadow: 0 25px 80px rgba(0, 0, 0, 0.1);
    border: 1px solid #f0f0f0;
}

.pedigree-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 40px;
    padding-bottom: 30px;
    border-bottom: 2px solid #f0f0f0;
}

.pedigree-info h3 {
    font-size: 2rem;
    font-weight: 700;
    color: #1a1a1a;
    margin-bottom: 10px;
}

.pedigree-info p {
    font-size: 1.1rem;
    color: #666;
    margin: 0;
}

.pedigree-stats {
    display: flex;
    gap: 30px;
}

.stat {
    text-align: center;
}

.stat-number {
    display: block;
    font-size: 2.5rem;
    font-weight: 700;
    color: #00A8D1;
    line-height: 1;
}

.stat-label {
    display: block;
    font-size: 0.9rem;
    color: #666;
    text-transform: uppercase;
    letter-spacing: 1px;
    margin-top: 5px;
}

.pedigree-iframe-wrapper {
    border-radius: 15px;
    overflow: hidden;
    box-shadow: 0 15px 40px rgba(0, 0, 0, 0.1);
}

.pedigree-iframe {
    width: 100%;
    height: 600px;
    border: none;
    display: block;
}

/* Story Content */
.story-content {
    max-width: 800px;
    margin: 0 auto;
}

/* Dog Details */
.dog-details {
    background: #f8f9fa;
    border-radius: 12px;
    padding: 20px;
    margin-bottom: 25px;
    border-left: 3px solid #00A8D1;
}

.detail-item {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 6px 0;
    border-bottom: 1px solid #e9ecef;
    font-size: 0.95rem;
}

.detail-item:last-child {
    border-bottom: none;
}

.detail-item strong {
    color: #1a202c;
    font-weight: 600;
    min-width: 120px;
}

/* Pedigree Iframe */
.pedigree-iframe-container {
    background: white;
    border-radius: 12px;
    padding: 15px;
    box-shadow: 0 8px 25px rgba(0, 0, 0, 0.1);
    overflow: hidden;
}

.pedigree-iframe {
    width: 100%;
    height: 600px;
    border: none;
    border-radius: 8px;
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.08);
}

/* Features List */
.features-list {
    display: flex;
    flex-direction: column;
    gap: 30px;
}

.feature-item {
    display: flex;
    align-items: flex-start;
    gap: 20px;
    padding: 25px;
    background: white;
    border-radius: 15px;
    box-shadow: 0 8px 30px rgba(0, 0, 0, 0.1);
    transition: all 0.3s ease;
}

.feature-item:hover {
    transform: translateX(10px);
    box-shadow: 0 12px 40px rgba(0, 0, 0, 0.15);
}

.feature-item i {
    font-size: 2rem;
    color: #00A8D1;
    margin-top: 5px;
}

.feature-item h5 {
    font-size: 1.3rem;
    font-weight: 600;
    color: #1a202c;
    margin-bottom: 8px;
}

.feature-item p {
    color: #6c757d;
    margin: 0;
    line-height: 1.6;
}

/* Video Cards */
.video-card {
    background: white;
    border-radius: 20px;
    overflow: hidden;
    box-shadow: 0 15px 50px rgba(0, 0, 0, 0.15);
    transition: all 0.4s ease;
    margin-bottom: 30px;
}

.video-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 25px 70px rgba(0, 0, 0, 0.2);
}

.video-thumbnail {
    position: relative;
    overflow: hidden;
}

.video-image {
    width: 100%;
    height: 250px;
    object-fit: cover;
    transition: transform 0.4s ease;
}

.video-card:hover .video-image {
    transform: scale(1.05);
}

.play-button {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 80px;
    height: 80px;
    background: rgba(255, 255, 255, 0.95);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    transition: all 0.4s ease;
    backdrop-filter: blur(10px);
    box-shadow: 0 8px 30px rgba(0, 0, 0, 0.2);
}

.play-button:hover {
    background: #00A8D1;
    color: white;
    transform: translate(-50%, -50%) scale(1.1);
    box-shadow: 0 12px 40px rgba(0, 168, 209, 0.4);
}

.play-button i {
    font-size: 32px;
    margin-left: 4px;
}

.video-info {
    padding: 25px;
}

.video-info h5 {
    font-size: 1.3rem;
    font-weight: 600;
    color: #1a202c;
    margin-bottom: 10px;
}

.video-info p {
    color: #6c757d;
    margin: 0;
    line-height: 1.6;
}

/* Pedigree Table */
.pedigree-table-container {
    overflow-x: auto;
    border-radius: 20px;
    box-shadow: 0 15px 50px rgba(0, 0, 0, 0.15);
    background: white;
}

.pedigree-table {
    width: 100%;
    background: white;
    border-collapse: collapse;
    min-width: 1000px;
}

.pedigree-table th,
.pedigree-table td {
    padding: 25px 20px;
    text-align: left;
    border-bottom: 1px solid #f1f3f4;
}

.pedigree-table th {
    background: linear-gradient(135deg, #00A8D1 0%, #007acc 100%);
    color: white;
    font-weight: 700;
    font-size: 1.1rem;
    text-transform: uppercase;
    letter-spacing: 0.5px;
}

.pedigree-table td {
    color: #4a5568;
    font-size: 1rem;
    font-weight: 500;
}

.pedigree-table tbody tr:hover {
    background: linear-gradient(135deg, #f8f9fa 0%, #ffffff 100%);
    transform: scale(1.01);
    transition: all 0.2s ease;
}

.pedigree-table tbody tr:last-child td {
    border-bottom: none;
}

/* Responsive Design */
@media (max-width: 1200px) {
    .container {
        padding: 0 30px;
    }
    
    .hero-container {
        gap: 60px;
        padding: 0 30px;
    }
    
    .hero-title {
        font-size: 3rem;
    }
    
    .section-heading {
        font-size: 2.2rem;
    }
    
    .about-layout {
        gap: 60px;
    }
    
    .gallery-grid {
        height: 450px;
    }
}

@media (max-width: 992px) {
    .hero {
        min-height: 80vh;
    }
    
    .hero-container {
        grid-template-columns: 1fr;
        gap: 40px;
        text-align: center;
    }
    
    .hero-title {
        font-size: 2.5rem;
    }
    
    .hero-actions {
        justify-content: center;
        flex-wrap: wrap;
    }
    
    .section-heading {
        font-size: 2rem;
    }
    
    .about-layout {
        grid-template-columns: 1fr;
        gap: 40px;
    }
    
    .features-grid {
        grid-template-columns: repeat(2, 1fr);
    }
    
    .gallery-grid {
        grid-template-columns: 1fr 1fr;
        grid-template-rows: 1fr 1fr 1fr;
        height: auto;
        gap: 15px;
    }
    
    .gallery-item.primary {
        grid-row: 1 / 2;
        grid-column: 1 / 3;
    }
    
    .pedigree-header {
        flex-direction: column;
        gap: 30px;
        text-align: center;
    }
    
    .pedigree-metrics {
        justify-content: center;
    }
    
    .pedigree-iframe {
        height: 400px;
    }
}

@media (max-width: 768px) {
    .container {
        padding: 0 20px;
    }
    
    .hero {
        min-height: 70vh;
    }
    
    .hero-container {
        padding: 0 20px;
        gap: 30px;
    }
    
    .hero-title {
        font-size: 2rem;
    }
    
    .hero-description {
        font-size: 1rem;
    }
    
    .hero-actions {
        flex-direction: column;
        align-items: center;
        gap: 12px;
    }
    
    .section-heading {
        font-size: 1.8rem;
    }
    
    .section-subtitle {
        font-size: 1rem;
    }
    
    .features-grid {
        grid-template-columns: 1fr;
        gap: 15px;
    }
    
    .gallery-grid {
        grid-template-columns: 1fr;
        grid-template-rows: repeat(6, 200px);
        gap: 15px;
    }
    
    .gallery-item.primary {
        grid-row: 1 / 2;
        grid-column: 1 / 2;
    }
    
    .pedigree-container {
        padding: 30px 20px;
    }
    
    .pedigree-iframe {
        height: 350px;
    }
    
    .pedigree-metrics {
        gap: 20px;
    }
    
    .content-section {
        padding: 35px 0;
    }
    
    .section-title {
        font-size: 1.4rem;
    }
    
    .section-text {
        font-size: 0.95rem;
    }
    
    .section-image {
        height: 250px;
    }
    
    .gallery-image {
        height: 250px;
    }
    
    .description-content {
        margin-top: 25px;
        padding: 20px;
    }
    
    .pedigree-iframe {
        height: 450px;
    }
    
    .dog-details {
        padding: 15px;
    }
    
    .detail-item {
        font-size: 0.85rem;
        flex-direction: column;
        align-items: flex-start;
        gap: 3px;
    }
    
    .detail-item strong {
        min-width: auto;
    }
}

@media (max-width: 576px) {
    .hero-section {
        height: 40vh;
        min-height: 300px;
    }
    
    .hero-title {
        font-size: 1.5rem;
    }
    
    .hero-subtitle {
        font-size: 0.85rem;
    }
    
    .content-section {
        padding: 30px 0;
    }
    
    .section-title {
        font-size: 1.2rem;
    }
    
    .section-text {
        font-size: 0.9rem;
    }
    
    .section-image {
        height: 200px;
    }
    
    .gallery-image {
        height: 200px;
    }
    
    .description-content {
        margin-top: 20px;
        padding: 15px;
    }
    
    .video-image {
        height: 180px;
    }
    
    .play-button {
        width: 50px;
        height: 50px;
    }
    
    .play-button i {
        font-size: 20px;
    }
    
    .pedigree-table th,
    .pedigree-table td {
        padding: 15px 10px;
        font-size: 0.9rem;
    }
    
    .feature-item {
        padding: 15px;
        flex-direction: column;
        text-align: center;
    }
    
    .feature-item i {
        font-size: 2rem;
    }
    
    .pedigree-iframe {
        height: 400px;
    }
    
    .dog-details {
        padding: 12px;
    }
    
    .detail-item {
        font-size: 0.8rem;
    }
    
    .pedigree-iframe-container {
        padding: 10px;
    }
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Add class to body to override main layout styles
    document.body.classList.add('story-detail-body');
    
    // Override main layout styles
    const mainLayout = document.querySelector('.main-layout');
    if (mainLayout) {
        mainLayout.style.height = 'auto';
        mainLayout.style.overflow = 'visible';
        mainLayout.style.display = 'block';
    }
    
    const mainContent = document.querySelector('.main-content');
    if (mainContent) {
        mainContent.style.overflow = 'visible';
        mainContent.style.height = 'auto';
    }
    
    const containerFluid = document.querySelector('.container-fluid');
    if (containerFluid) {
        containerFluid.style.overflow = 'visible';
        containerFluid.style.height = 'auto';
    }
    
    // Ensure scrolling is enabled
    document.body.style.overflow = 'auto';
    document.documentElement.style.overflow = 'auto';
    
    // Force enable scrolling on the story detail page
    const storyPage = document.querySelector('.story-detail-page');
    if (storyPage) {
        storyPage.style.overflowY = 'visible';
        storyPage.style.height = 'auto';
        storyPage.style.minHeight = '100vh';
    }
    
    // Video thumbnail click functionality
    const videoThumbnails = document.querySelectorAll('.video-thumbnail');
    
    videoThumbnails.forEach(thumbnail => {
        thumbnail.addEventListener('click', function() {
            // Here you can add functionality to open a video modal or redirect to video page
            console.log('Video clicked:', this.querySelector('.video-image').alt);
            // Example: window.location.href = '/video/' + videoId;
        });
    });
    
    // Test scrolling functionality
    console.log('Page height:', document.body.scrollHeight);
    console.log('Window height:', window.innerHeight);
    console.log('Can scroll:', document.body.scrollHeight > window.innerHeight);
    console.log('Body overflow:', document.body.style.overflow);
    console.log('Main layout overflow:', mainLayout ? mainLayout.style.overflow : 'not found');
});
</script>
@endsection
