<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Formad</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets_user/img/favicon.png" rel="icon">
    <link href="assets_user/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=EB+Garamond:wght@400;500&family=Inter:wght@400;500&family=Playfair+Display:ital,wght@0,400;0,700;1,400;1,700&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets_user/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets_user/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets_user/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link href="assets_user/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets_user/assets/vendor/aos/aos.css" rel="stylesheet">

    <!-- Template Main CSS Files -->
    <link href="assets_user/assets/css/variables.css" rel="stylesheet">
    <link href="assets_user/assets/css/main.css" rel="stylesheet">

    {{-- trix --}}
    <link rel="stylesheet" type="text/css" href="https://unpkg.com/trix@2.0.0/dist/trix.css">
    <script type="text/javascript" src="https://unpkg.com/trix@2.0.0/dist/trix.umd.min.js"></script>

</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="header d-flex align-items-center fixed-top">
        <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

            <a href="/" class="logo d-flex align-items-center">
                <!-- <img src="assets/img/logo.png" alt=""> -->
                <h1 class="fw-bold">Formad.id</h1>
            </a>

            <nav id="navbar" class="navbar fw-bold ">
                <ul>
                    <li><a href="/">Blog</a></li>
                    <li class="dropdown"><a href="category.html"><span>Categories</span> <i
                                class="bi bi-chevron-down dropdown-indicator"></i></a>
                        <ul>
                            <li><a href="search-result.html">Search Result</a></li>
                            <li><a href="#">Drop Down 1</a></li>
                            <li><a href="#">Drop Down 2</a></li>
                            <li><a href="#">Drop Down 3</a></li>
                            <li><a href="#">Drop Down 4</a></li>
                        </ul>
                    </li>

                    <li><a href="about.html">About</a></li>
                    <li><a href="contact.html">Contact</a></li>
                </ul>
            </nav><!-- .navbar -->

            <div class="position-relative">
                <a href="#" class="mx-2"><span class="bi-facebook"></span></a>
                <a href="#" class="mx-2"><span class="bi-twitter"></span></a>
                <a href="#" class="mx-2"><span class="bi-instagram"></span></a>

                <a href="#" class="mx-2 js-search-open"><span class="bi-search"></span></a>
                <i class="bi bi-list mobile-nav-toggle"></i>

                <!-- ======= Search Form ======= -->
                <div class="search-form-wrap js-search-form-wrap">
                    <form action="search-result.html" class="search-form">
                        <span class="icon bi-search"></span>
                        <input type="text" placeholder="Search" class="form-control">
                        <button class="btn js-search-close"><span class="bi-x"></span></button>
                    </form>
                </div><!-- End Search Form -->

            </div>

        </div>
    </header>

    @yield('content')

    <!-- End Header -->
    <main id="main">

        <!-- ======= Hero Slider Section ======= -->
        @include('components.hero-slider')
        <!-- End Hero Slider Section -->

        <!-- ======= Post Grid Section ======= -->
        @include('components.post-grid')
        <!-- End Post Grid Section -->

        <!-- ======= Culture Category Section ======= -->
        {{-- @include('components.culture-category') --}}
        <!-- End Culture Category Section -->

        <!-- ======= Business Category Section ======= -->
        {{-- @include('components.business-category') --}}
        <!-- End Business Category Section -->

        <!-- ======= Lifestyle Category Section ======= -->
        {{-- @include('components.lifestyle-category') --}}
        <!-- End Lifestyle Category Section -->

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    @include('components.footer')

    <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="assets_user/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets_user/assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets_user/assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets_user/assets/vendor/aos/aos.js"></script>
    <script src="assets_user/assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets_user/assets/js/main.js"></script>

</body>

</html>
