<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Ekonomi Direkten</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    {{-- <link href="{{ Vite::asset('resources/img/favicon.ico') }}" rel="icon"> --}}

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Jost:wght@500;600;700&family=Open+Sans:wght@400;500&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    @vite(['resources/lib/animate/animate.min.css', 'resources/lib/owlcarousel/assets/owl.carousel.min.css', 'resources/sass/app.scss', 'resources/css/app.css'])
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" role="status" style="width: 3rem; height: 3rem;"></div>
    </div>
    <!-- Spinner End -->


    <!-- Navbar Start -->
    <div class="container-fluid fixed-top px-0 wow fadeIn" data-wow-delay="0.1s">
        <div class="top-bar row gx-0 align-items-center d-none d-lg-flex">
            <div class="col-lg-6 px-5 text-start">
                <small><i class="fa fa-map-marker-alt text-primary me-2"></i>Kungsängsvägen 27, 753 23 Uppsala</small>
                <small class="ms-4"><i class="fa fa-clock text-primary me-2"></i>9.00 am - 6.00 pm</small>
            </div>
            <div class="col-lg-6 px-5 text-end">
                <small><i class="fa fa-envelope text-primary me-2"></i>info@ekonomidirekten.se</small>
                <small class="ms-4"><i class="fa fa-phone-alt text-primary me-2"></i>018-751 33 20</small>
            </div>
        </div>

        <nav class="navbar navbar-expand-lg navbar-light py-lg-0 px-lg-5 wow fadeIn" data-wow-delay="0.1s">
            <a href="{{ route('home') }}" class="navbar-brand ms-4 ms-lg-0">
                <img src="{{ Vite::asset('resources/img/logowide.png') }}" class="logo-img">
                <!-- <h1 class="display-5 text-primary m-0">Finanza</h1> -->
            </a>
            <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse"
                data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto p-4 p-lg-0">
                    <a href="{{ route('home') }}"
                        class="nav-item nav-link @if (request()->routeIs('home')) active @endif">Hem</a>
                    <a href="{{ route('about') }}"
                        class="nav-item nav-link @if (request()->routeIs('about')) active @endif">Om Oss</a>
                    <a href="{{ route('service') }}"
                        class="nav-item nav-link @if (request()->routeIs('service')) active @endif">Tjänster</a>
                    <a href="{{ route('contact') }}"
                        class="nav-item nav-link @if (request()->routeIs('contact')) active @endif">Kontakta</a>
                </div>
                <div class="d-none d-lg-flex ms-2">
                    <a class="btn btn-light btn-sm-square rounded-circle ms-3" href="">
                        <small class="fab fa-facebook-f text-primary"></small>
                    </a>
                    <a class="btn btn-light btn-sm-square rounded-circle ms-3" href="">
                        <small class="fab fa-twitter text-primary"></small>
                    </a>
                    <a class="btn btn-light btn-sm-square rounded-circle ms-3" href="">
                        <small class="fab fa-linkedin-in text-primary"></small>
                    </a>
                </div>
            </div>
        </nav>
    </div>
    <!-- Navbar End -->

    @yield('content')

    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light footer mt-5 py-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-4">Kontakt</h4>
                    <p class="mb-2"><b>STOCKHOLM-UPPSALA LÄN</b></p>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Kungsängsvägen 27, 753 23 Uppsala
                        Huvudkonto</p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>018-751 33 20</p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>info@ekonomidirekten.se</p>
                    <hr>
                    <p class="mb-2"><b>SKÅNE-BLEKINE LÄN</b></p>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Älgbacken, 372 34 Ronneby</p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>018-751 33 20</p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>info@ekonomidirekten.se</p>
                    <div class="d-flex pt-2">
                        <a class="btn btn-square btn-outline-light rounded-circle me-2" href=""><i
                                class="fab fa-twitter"></i></a>
                        <a class="btn btn-square btn-outline-light rounded-circle me-2" href=""><i
                                class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-square btn-outline-light rounded-circle me-2" href=""><i
                                class="fab fa-youtube"></i></a>
                        <a class="btn btn-square btn-outline-light rounded-circle me-2" href=""><i
                                class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    {{-- <h4 class="text-white mb-4">Quick Links</h4>
                    <a class="btn btn-link" href="">About Us</a>
                    <a class="btn btn-link" href="">Contact Us</a>
                    <a class="btn btn-link" href="">Our Services</a>
                    <a class="btn btn-link" href="">Terms & Condition</a>
                    <a class="btn btn-link" href="">Support</a> --}}
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-4">Tjänster</h4>
                    <a class="btn btn-link">Bokföring</a>
                    <a class="btn btn-link">Lönehantering</a>
                    <a class="btn btn-link">Årsredovisning</a>
                    <a class="btn btn-link">Skattedeklarationer</a>
                    <a class="btn btn-link">Rådgivning</a>
                    <a class="btn btn-link">Bolagsbildning</a>
                    <a class="btn btn-link">Budget och prognoser</a>
                    <a class="btn btn-link">Ekonomisk rapportering</a>
                </div>
                <!-- <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-4">Newsletter</h4>
                    <p>Dolor amet sit justo amet elitr clita ipsum elitr est.</p>
                    <div class="position-relative w-100">
                        <input class="form-control bg-white border-0 w-100 py-3 ps-4 pe-5" type="text"
                            placeholder="Your email">
                        <button type="button"
                            class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">SignUp</button>
                    </div>
                </div> -->
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Copyright Start -->
    <div class="container-fluid copyright py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                    &copy; <a class="border-bottom" href="#">EKONOMI DIREKTEN</a>, All Right Reserved.
                </div>
                <!-- <div class="col-md-6 text-center text-md-end"> -->
                <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                <!-- Designed By <a class="border-bottom" href="https://htmlcodex.com">HTML Codex</a> Distributed By <a
                        href="https://themewagon.com">ThemeWagon</a>
                </div> -->
            </div>
        </div>
    </div>
    <!-- Copyright End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i
            class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->

    @vite([
        'resources/js/app.js',
        // 'resources/lib/wow/wow.min.js',
    ])
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"
        integrity="sha512-Eak/29OTpb36LLo2r47IpVzPBLXnAMPAVypbSZiZ4Qkf8p/7S/XRG5xp7OKWPPYfJT6metI+IORkR5G8F900+g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    @vite(['resources/lib/easing/easing.min.js', 'resources/lib/waypoints/waypoints.min.js', 'resources/lib/owlcarousel/owl.carousel.min.js', 'resources/lib/counterup/counterup.min.js', 'resources/js/main.js'])
</body>

</html>
