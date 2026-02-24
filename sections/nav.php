<!-- Sticky Navigation -->
<nav class="navbar navbar-expand-md navbar-light navbar-custom sticky-top">
    <div class="container py-1">
        <!-- Brand -->
        <a class="navbar-brand d-flex align-items-center gap-2" href="/">
            <img src="assets/logo-mauli.png" alt="Mauli Puja Bhandar Logo" style="height: 40px; width: auto;" />
            <div class="d-flex flex-column">
                <span class="fw-bold fs-5 text-dark lh-1">Mauli Puja Bhandar</span>
                <span class="brand-subtitle mt-1">Kolhapur</span>
            </div>
        </a>

        <!-- Mobile Toggle -->
        <button class="navbar-toggler border-0 shadow-none d-md-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#mobileMenu" aria-controls="mobileMenu" aria-label="Toggle navigation">
            <i class="ri-menu-3-line fs-4"></i>
        </button>

        <!-- Desktop Menu -->
        <div class="collapse navbar-collapse d-none d-md-flex" id="mainNav">
            <ul class="navbar-nav ms-auto gap-1">
                <li class="nav-item">
                    <a class="nav-link active" href="#home">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#products">Products</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#gallery">Gallery</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#location">Location</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Mobile Offcanvas Menu -->
<div class="offcanvas offcanvas-end mobile-menu" tabindex="-1" id="mobileMenu" aria-labelledby="mobileMenuLabel">
    <div class="offcanvas-header">
        <div class="d-flex align-items-center gap-2">
            <img src="assets/logo-mauli.png" alt="Mauli Puja Bhandar Logo" style="height: 32px; width: auto;" />
            <span class="fw-bold text-dark" id="mobileMenuLabel">Mauli Puja Bhandar</span>
        </div>
        <button type="button" class="mobile-menu-close" data-bs-dismiss="offcanvas" aria-label="Close">
            <i class="ri-close-line"></i>
        </button>
    </div>
    <div class="offcanvas-body">
        <ul class="mobile-nav-links list-unstyled mb-0">
            <li>
                <a href="#home" data-bs-dismiss="offcanvas">
                    <i class="ri-home-4-line"></i>
                    <span>Home</span>
                </a>
            </li>
            <li>
                <a href="#products" data-bs-dismiss="offcanvas">
                    <i class="ri-store-2-line"></i>
                    <span>Products</span>
                </a>
            </li>
            <li>
                <a href="#gallery" data-bs-dismiss="offcanvas">
                    <i class="ri-image-line"></i>
                    <span>Gallery</span>
                </a>
            </li>
            <li>
                <a href="#about" data-bs-dismiss="offcanvas">
                    <i class="ri-ancient-gate-line"></i>
                    <span>About</span>
                </a>
            </li>
            <li>
                <a href="#location" data-bs-dismiss="offcanvas">
                    <i class="ri-map-pin-line"></i>
                    <span>Location</span>
                </a>
            </li>
        </ul>

        <div class="mobile-menu-footer">
            <a href="tel:+917887770009" class="mobile-menu-cta">
                <i class="ri-phone-fill"></i>
                <span>Call Us — 0788 777 0009</span>
            </a>
        </div>
    </div>
</div>
