<div class="main-content-wrapper">
    @include('home.posts')
    @include('home.discover-people')
    @include('home.explore-kennels')
    @include('home.display-posts')
</div>

<style>
/* Ensure all content is visible and scrollable */
.main-content-wrapper {
    width: 100%;
    padding: 0;
    margin: 0;
}

/* Fix the scrolling issue by ensuring proper height calculation */
.container-fluid.h-100 {
    height: calc(100vh - 80px) !important; /* Account for header */
    max-height: calc(100vh - 80px) !important;
}

.row.flex-grow-1 {
    height: 100% !important;
    max-height: 100% !important;
}

.col-lg-3, .col-lg-6 {
    height: 100% !important;
    max-height: 100% !important;
}

.col-lg-3 .flex-grow-1, .col-lg-6 .flex-grow-1 {
    height: 100% !important;
    max-height: 100% !important;
    overflow-y: auto !important;
}

/* Hide scrollbars but keep functionality */
.overflow-y-auto {
    scrollbar-width: none; /* Firefox */
    -ms-overflow-style: none; /* Internet Explorer 10+ */
}

.overflow-y-auto::-webkit-scrollbar {
    display: none; /* WebKit */
}

/* Ensure content sections have proper spacing */
.main-content-wrapper > div {
    margin-bottom: 20px;
}

.main-content-wrapper > div:last-child {
    margin-bottom: 0;
}
</style>