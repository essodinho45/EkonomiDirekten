@extends('layouts.app')

@section('content')
    <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="{{ Vite::asset('resources/img/carousel-1.jpg') }}" alt="Image">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-start">
                                <div class="col-lg-8">
                                    {{-- <p
                                        class="d-inline-block border border-white rounded text-primary fw-semi-bold py-1 px-3 animated slideInDown">
                                        Välkommen till Ekonomi Direkten</p> --}}
                                    <h1 class="display-1 mb-4 animated slideInDown">Din Ekonomiska Status är Vårt Mål
                                    </h1>
                                    <a href="" class="btn btn-primary py-3 px-5 animated slideInDown">Utforska
                                        Mer</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="{{ Vite::asset('resources/img/carousel-2.jpg') }}" alt="Image">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-start">
                                <div class="col-lg-7">
                                    {{-- <p
                                        class="d-inline-block border border-white rounded text-primary fw-semi-bold py-1 px-3 animated slideInDown">
                                        Välkommen till Ekonomi Direkten</p> --}}
                                    <h1 class="display-1 mb-4 animated slideInDown">Verkligt Ekonomiskt Stöd För Dig</h1>
                                    <a href="" class="btn btn-primary py-3 px-5 animated slideInDown">Utforska
                                        Mer</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Tidigare</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Nästa</span>
            </button>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-4 align-items-end mb-4">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <img class="img-fluid rounded" src="{{ Vite::asset('resources/img/about.jpg') }}">
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                    <p class="d-inline-block border rounded text-primary fw-semi-bold py-1 px-3">Om Oss</p>
                    <h1 class="display-5 mb-4">Vi Hjälper Våra Kunder Att Växa Sin Verksamhet</h1>
                    <p class="mb-4">
                        Vi är Ekonomi Direkten AB, en redovisningsbyrå med bas i Sverige. Vi erbjuder professionella
                        tjänster
                        inom bokföring, redovisning och ekonomisk rådgivning för företag i olika branscher. Vårt uppdrag är
                        att underlätta för företag att hantera sina ekonomiska behov på ett effektivt och smidigt sätt.
                    </p>
                    <p class="mb-4">
                        Med vår expertis och personliga service ser vi till att skapa lösningar som är anpassade efter varje
                        företags unika krav och mål. Vi strävar efter att göra ekonomihantering både enkel och
                        lättförståelig,
                        så att våra kunder kan fokusera på att utveckla sina verksamheter. Oavsett om det handlar om
                        löpande bokföring, årsredovisning eller strategisk planering är vi här för att stötta dig varje steg
                        på
                        vägen.
                    </p>
                    {{-- <div class="border rounded p-4">
                            <nav>
                                <div class="nav nav-tabs mb-3" id="nav-tab" role="tablist">
                                    <button class="nav-link fw-semi-bold active" id="nav-story-tab" data-bs-toggle="tab"
                                        data-bs-target="#nav-story" type="button" role="tab" aria-controls="nav-story"
                                        aria-selected="true">Story</button>
                                    <button class="nav-link fw-semi-bold" id="nav-mission-tab" data-bs-toggle="tab"
                                        data-bs-target="#nav-mission" type="button" role="tab" aria-controls="nav-mission"
                                        aria-selected="false">Mission</button>
                                    <button class="nav-link fw-semi-bold" id="nav-vision-tab" data-bs-toggle="tab"
                                        data-bs-target="#nav-vision" type="button" role="tab" aria-controls="nav-vision"
                                        aria-selected="false">Vision</button>
                                </div>
                            </nav>
                            <div class="tab-content" id="nav-tabContent">
                                <div class="tab-pane fade show active" id="nav-story" role="tabpanel"
                                    aria-labelledby="nav-story-tab">
                                    <p>Tempor erat elitr rebum at clita. Diam dolor diam ipsum et tempor sit. Aliqu diam
                                        amet diam et eos labore.</p>
                                    <p class="mb-0">Diam dolor diam ipsum et tempor sit. Aliqu diam amet diam et eos labore.
                                        Clita erat ipsum et lorem et sit</p>
                                </div>
                                <div class="tab-pane fade" id="nav-mission" role="tabpanel"
                                    aria-labelledby="nav-mission-tab">
                                    <p>Tempor erat elitr rebum at clita. Diam dolor diam ipsum et tempor sit. Aliqu diam
                                        amet diam et eos labore.</p>
                                    <p class="mb-0">Diam dolor diam ipsum et tempor sit. Aliqu diam amet diam et eos labore.
                                        Clita erat ipsum et lorem et sit</p>
                                </div>
                                <div class="tab-pane fade" id="nav-vision" role="tabpanel" aria-labelledby="nav-vision-tab">
                                    <p>Tempor erat elitr rebum at clita. Diam dolor diam ipsum et tempor sit. Aliqu diam
                                        amet diam et eos labore.</p>
                                    <p class="mb-0">Diam dolor diam ipsum et tempor sit. Aliqu diam amet diam et eos labore.
                                        Clita erat ipsum et lorem et sit</p>
                                </div>
                            </div>
                        </div> --}}
                </div>
            </div>
            {{-- <div class="border rounded p-4 wow fadeInUp" data-wow-delay="0.1s">
                <div class="row g-4">
                    <div class="col-lg-4 wow fadeIn" data-wow-delay="0.1s">
                        <div class="h-100">
                            <div class="d-flex">
                                <div class="flex-shrink-0 btn-lg-square rounded-circle bg-secondary">
                                    <i class="fa fa-times text-white"></i>
                                </div>
                                <div class="ps-3">
                                    <h4>Ingen Dold Kostnad</h4>
                                    <span>Clita erat ipsum lorem sit sed stet duo justo</span>
                                </div>
                                <div class="border-end d-none d-lg-block"></div>
                            </div>
                            <div class="border-bottom mt-4 d-block d-lg-none"></div>
                        </div>
                    </div>
                    <div class="col-lg-4 wow fadeIn" data-wow-delay="0.3s">
                        <div class="h-100">
                            <div class="d-flex">
                                <div class="flex-shrink-0 btn-lg-square rounded-circle bg-secondary">
                                    <i class="fa fa-users text-white"></i>
                                </div>
                                <div class="ps-3">
                                    <h4>Dedikerat Team</h4>
                                    <span>Clita erat ipsum lorem sit sed stet duo justo</span>
                                </div>
                                <div class="border-end d-none d-lg-block"></div>
                            </div>
                            <div class="border-bottom mt-4 d-block d-lg-none"></div>
                        </div>
                    </div>
                    <div class="col-lg-4 wow fadeIn" data-wow-delay="0.5s">
                        <div class="h-100">
                            <div class="d-flex">
                                <div class="flex-shrink-0 btn-lg-square rounded-circle bg-secondary">
                                    <i class="fa fa-phone text-white"></i>
                                </div>
                                <div class="ps-3">
                                    <h4>Tillgänglig 24/7</h4>
                                    <span>Clita erat ipsum lorem sit sed stet duo justo</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
        </div>
    </div>
    <!-- About End -->


    <!-- Facts Start -->
    {{-- <div class="container-fluid facts my-5 py-5">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-sm-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.1s">
                    <i class="fa fa-users fa-3x text-white mb-3"></i>
                    <h1 class="display-4 text-white" data-toggle="counter-up">1234</h1>
                    <span class="fs-5 text-white">Happy Clients</span>
                    <hr class="bg-white w-25 mx-auto mb-0">
                </div>
                <div class="col-sm-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.3s">
                    <i class="fa fa-check fa-3x text-white mb-3"></i>
                    <h1 class="display-4 text-white" data-toggle="counter-up">1234</h1>
                    <span class="fs-5 text-white">Projects Completed</span>
                    <hr class="bg-white w-25 mx-auto mb-0">
                </div>
                <div class="col-sm-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.5s">
                    <i class="fa fa-users-cog fa-3x text-white mb-3"></i>
                    <h1 class="display-4 text-white" data-toggle="counter-up">1234</h1>
                    <span class="fs-5 text-white">Dedicated Staff</span>
                    <hr class="bg-white w-25 mx-auto mb-0">
                </div>
                <div class="col-sm-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.7s">
                    <i class="fa fa-award fa-3x text-white mb-3"></i>
                    <h1 class="display-4 text-white" data-toggle="counter-up">1234</h1>
                    <span class="fs-5 text-white">Awards Achieved</span>
                    <hr class="bg-white w-25 mx-auto mb-0">
                </div>
            </div>
        </div>
    </div> --}}
    <!-- Facts End -->


    <!-- Features Start -->
    {{-- <div class="container-xxl feature py-5">
            <div class="container">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                        <p class="d-inline-block border rounded text-primary fw-semi-bold py-1 px-3">Why Choosing Us!</p>
                        <h1 class="display-5 mb-4">Few Reasons Why People Choosing Us!</h1>
                        <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et
                            eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet
                        </p>
                        <a class="btn btn-primary py-3 px-5" href="">Explore More</a>
                    </div>
                    <div class="col-lg-6">
                        <div class="row g-4 align-items-center">
                            <div class="col-md-6">
                                <div class="row g-4">
                                    <div class="col-12 wow fadeIn" data-wow-delay="0.3s">
                                        <div class="feature-box border rounded p-4">
                                            <i class="fa fa-check fa-3x text-primary mb-3"></i>
                                            <h4 class="mb-3">Fast Executions</h4>
                                            <p class="mb-3">Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo
                                                justo erat amet</p>
                                            <a class="fw-semi-bold" href="">Read More <i
                                                    class="fa fa-arrow-right ms-1"></i></a>
                                        </div>
                                    </div>
                                    <div class="col-12 wow fadeIn" data-wow-delay="0.5s">
                                        <div class="feature-box border rounded p-4">
                                            <i class="fa fa-check fa-3x text-primary mb-3"></i>
                                            <h4 class="mb-3">Guide & Support</h4>
                                            <p class="mb-3">Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo
                                                justo erat amet</p>
                                            <a class="fw-semi-bold" href="">Read More <i
                                                    class="fa fa-arrow-right ms-1"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 wow fadeIn" data-wow-delay="0.7s">
                                <div class="feature-box border rounded p-4">
                                    <i class="fa fa-check fa-3x text-primary mb-3"></i>
                                    <h4 class="mb-3">Financial Secure</h4>
                                    <p class="mb-3">Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo
                                        erat amet</p>
                                    <a class="fw-semi-bold" href="">Read More <i class="fa fa-arrow-right ms-1"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
    <!-- Features End -->


    <!-- Service Start -->
    <div class="container-xxl service py-5">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <p class="d-inline-block border rounded text-primary fw-semi-bold py-1 px-3">Våra Tjänster</p>
                <h1 class="display-5 mb-5">Fantastiska Finansiella Tjänster För Företag</h1>
                <p>
                    Vi på Ekonomi Direkten AB erbjuder ett brett utbud av tjänster för att hjälpa ditt företag med
                    ekonomihantering
                </p>
            </div>
            <div class="row g-4 wow fadeInUp" data-wow-delay="0.3s">
                <div class="col-lg-4">
                    <div class="nav nav-pills d-flex justify-content-between w-100 h-100 me-4">
                        <button class="nav-link w-100 d-flex align-items-center text-start border p-4 mb-1 active"
                            data-bs-toggle="pill" data-bs-target="#tab-pane-1" type="button">
                            <h5 class="m-0"><i class="fa fa-bars text-primary me-3"></i>Bokföring</h5>
                        </button>
                        <button class="nav-link w-100 d-flex align-items-center text-start border p-4 mb-1"
                            data-bs-toggle="pill" data-bs-target="#tab-pane-2" type="button">
                            <h5 class="m-0"><i class="fa fa-bars text-primary me-3"></i>Lönehantering</h5>
                        </button>
                        <button class="nav-link w-100 d-flex align-items-center text-start border p-4 mb-1"
                            data-bs-toggle="pill" data-bs-target="#tab-pane-3" type="button">
                            <h5 class="m-0"><i class="fa fa-bars text-primary me-3"></i>Årsredovisning</h5>
                        </button>
                        <button class="nav-link w-100 d-flex align-items-center text-start border p-4 mb-1"
                            data-bs-toggle="pill" data-bs-target="#tab-pane-4" type="button">
                            <h5 class="m-0"><i class="fa fa-bars text-primary me-3"></i>Skattedeklarationer</h5>
                        </button>
                        <button class="nav-link w-100 d-flex align-items-center text-start border p-4 mb-1"
                            data-bs-toggle="pill" data-bs-target="#tab-pane-5" type="button">
                            <h5 class="m-0"><i class="fa fa-bars text-primary me-3"></i>Rådgivning</h5>
                        </button>
                        <button class="nav-link w-100 d-flex align-items-center text-start border p-4 mb-1"
                            data-bs-toggle="pill" data-bs-target="#tab-pane-6" type="button">
                            <h5 class="m-0"><i class="fa fa-bars text-primary me-3"></i>Bolagsbildning</h5>
                        </button>
                        <button class="nav-link w-100 d-flex align-items-center text-start border p-4 mb-1"
                            data-bs-toggle="pill" data-bs-target="#tab-pane-7" type="button">
                            <h5 class="m-0"><i class="fa fa-bars text-primary me-3"></i>Budget och prognoser</h5>
                        </button>
                        <button class="nav-link w-100 d-flex align-items-center text-start border p-4 mb-0"
                            data-bs-toggle="pill" data-bs-target="#tab-pane-8" type="button">
                            <h5 class="m-0"><i class="fa fa-bars text-primary me-3"></i>Ekonomisk rapportering</h5>
                        </button>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="tab-content w-100">
                        <div class="tab-pane fade show active" id="tab-pane-1">
                            <div class="row g-4">
                                <div class="col-md-6" style="min-height: 350px;">
                                    <div class="position-relative h-100">
                                        <img class="position-absolute rounded w-100 h-100"
                                            src="{{ Vite::asset('resources/img/service-1.jpg') }}"
                                            style="object-fit: cover;" alt="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <h3 class="mb-4">Löpande bokföring för att hålla dina siffror i ordning.</h3>
                                    {{-- <a href="" class="btn btn-primary py-3 px-5 mt-3">Read More</a> --}}
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tab-pane-2">
                            <div class="row g-4">
                                <div class="col-md-6" style="min-height: 350px;">
                                    <div class="position-relative h-100">
                                        <img class="position-absolute rounded w-100 h-100"
                                            src="{{ Vite::asset('resources/img/service-2.jpg') }}"
                                            style="object-fit: cover;" alt="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <h3 class="mb-4">Smidig hantering av löner, arbetsgivaravgifter och rapportering.
                                    </h3>
                                    {{-- <a href="" class="btn btn-primary py-3 px-5 mt-3">Read More</a> --}}
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tab-pane-3">
                            <div class="row g-4">
                                <div class="col-md-6" style="min-height: 350px;">
                                    <div class="position-relative h-100">
                                        <img class="position-absolute rounded w-100 h-100"
                                            src="{{ Vite::asset('resources/img/service-3.jpg') }}"
                                            style="object-fit: cover;" alt="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <h3 class="mb-4"> Vi ser till arr din årsredovisning blir korrekt och levereras i
                                        tid.</h3>
                                    {{-- <a href="" class="btn btn-primary py-3 px-5 mt-3">Read More</a> --}}
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tab-pane-4">
                            <div class="row g-4">
                                <div class="col-md-6" style="min-height: 350px;">
                                    <div class="position-relative h-100">
                                        <img class="position-absolute rounded w-100 h-100"
                                            src="{{ Vite::asset('resources/img/service-4.jpg') }}"
                                            style="object-fit: cover;" alt="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <h3 class="mb-4"> Hjälp med moms, arbetsgivardeklaration och andra skatterelaterade
                                        ärenden.
                                    </h3>
                                    {{-- <a href="" class="btn btn-primary py-3 px-5 mt-3">Read More</a> --}}
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tab-pane-5">
                            <div class="row g-4">
                                <div class="col-md-6" style="min-height: 350px;">
                                    <div class="position-relative h-100">
                                        <img class="position-absolute rounded w-100 h-100"
                                            src="{{ Vite::asset('resources/img/service-1.jpg') }}"
                                            style="object-fit: cover;" alt="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <h3 class="mb-4">Ekonomisk rådgivning för att hjälpa dig fatta välgrundade beslut.
                                    </h3>
                                    {{-- <a href="" class="btn btn-primary py-3 px-5 mt-3">Read More</a> --}}
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tab-pane-6">
                            <div class="row g-4">
                                <div class="col-md-6" style="min-height: 350px;">
                                    <div class="position-relative h-100">
                                        <img class="position-absolute rounded w-100 h-100"
                                            src="{{ Vite::asset('resources/img/service-2.jpg') }}"
                                            style="object-fit: cover;" alt="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <h3 class="mb-4">
                                        Stöd vid uppstart av företag, inklusive registrering och administration.
                                    </h3>
                                    {{-- <a href="" class="btn btn-primary py-3 px-5 mt-3">Read More</a> --}}
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tab-pane-7">
                            <div class="row g-4">
                                <div class="col-md-6" style="min-height: 350px;">
                                    <div class="position-relative h-100">
                                        <img class="position-absolute rounded w-100 h-100"
                                            src="{{ Vite::asset('resources/img/service-3.jpg') }}"
                                            style="object-fit: cover;" alt="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <h3 class="mb-4">
                                        Vi hjälper dig att planera och analysera företagets framtid.
                                    </h3>
                                    {{-- <a href="" class="btn btn-primary py-3 px-5 mt-3">Read More</a> --}}
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tab-pane-8">
                            <div class="row g-4">
                                <div class="col-md-6" style="min-height: 350px;">
                                    <div class="position-relative h-100">
                                        <img class="position-absolute rounded w-100 h-100"
                                            src="{{ Vite::asset('resources/img/service-4.jpg') }}"
                                            style="object-fit: cover;" alt="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <h3 class="mb-4">Tydliga rapporter som ger dig insikter om din verksamhet.</h3>
                                    {{-- <a href="" class="btn btn-primary py-3 px-5 mt-3">Read More</a> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->


    <!-- Callback Start -->
    <div class="container-fluid callback my-5 pt-5">
        <div class="container pt-5">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="bg-white border rounded p-4 p-sm-5 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                            <p class="d-inline-block border rounded text-primary fw-semi-bold py-1 px-3">Hör av dig
                            </p>
                            <h1 class="display-5 mb-5">Begär ett återuppringning</h1>
                        </div>
                        <form action="{{ url('contact') }}" method="POST" class="wpcf7-form" novalidate="novalidate">
                            @csrf
                            <div class="row g-3">
                                <div class="col-sm-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="name" name="name"
                                            placeholder="Your Name">
                                        <label for="name">Ditt Namn</label>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-floating">
                                        <input type="email" class="form-control" id="email" name="email"
                                            placeholder="Your Email">
                                        <label for="email">Din E-Post</label>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="mobile" name="mobile"
                                            placeholder="Your Mobile">
                                        <label for="mobile">Din Mobil</label>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="subject" name="subject"
                                            placeholder="Subject">
                                        <label for="subject">Ämne</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <textarea class="form-control" placeholder="Leave a message here" name="message" id="message"
                                            style="height: 100px"></textarea>
                                        <label for="message">Meddelande</label>
                                    </div>
                                </div>
                                <div class="my-3">
                                    <div class="loading">Skickar meddelande...</div>
                                    <div class="error-message"></div>
                                    <div class="sent-message">Meddelande skickat, tack.</div>
                                </div>
                                <div class="col-12 text-center">
                                    <button class="btn btn-primary w-100 py-3" type="submit">Skicka Nu</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Callback End -->


    <!-- Projects Start -->
    <!-- <div class="container-xxl py-5">
                                                                                                                <div class="container">
                                                                                                                    <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                                                                                                                        <p class="d-inline-block border rounded text-primary fw-semi-bold py-1 px-3">Our Projects</p>
                                                                                                                        <h1 class="display-5 mb-5">We Have Completed Latest Projects</h1>
                                                                                                                    </div>
                                                                                                                    <div class="owl-carousel project-carousel wow fadeInUp" data-wow-delay="0.3s">
                                                                                                                        <div class="project-item pe-5 pb-5">
                                                                                                                            <div class="project-img mb-3">
                                                                                                                                <img class="img-fluid rounded" src="img/service-1.jpg" alt="">
                                                                                                                                <a href=""><i class="fa fa-link fa-3x text-primary"></i></a>
                                                                                                                            </div>
                                                                                                                            <div class="project-title">
                                                                                                                                <h4 class="mb-0">Financial Planning</h4>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                        <div class="project-item pe-5 pb-5">
                                                                                                                            <div class="project-img mb-3">
                                                                                                                                <img class="img-fluid rounded" src="img/service-2.jpg" alt="">
                                                                                                                                <a href=""><i class="fa fa-link fa-3x text-primary"></i></a>
                                                                                                                            </div>
                                                                                                                            <div class="project-title">
                                                                                                                                <h4 class="mb-0">Cash Investment</h4>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                        <div class="project-item pe-5 pb-5">
                                                                                                                            <div class="project-img mb-3">
                                                                                                                                <img class="img-fluid rounded" src="img/service-3.jpg" alt="">
                                                                                                                                <a href=""><i class="fa fa-link fa-3x text-primary"></i></a>
                                                                                                                            </div>
                                                                                                                            <div class="project-title">
                                                                                                                                <h4 class="mb-0">Financial Consultancy</h4>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                        <div class="project-item pe-5 pb-5">
                                                                                                                            <div class="project-img mb-3">
                                                                                                                                <img class="img-fluid rounded" src="img/service-4.jpg" alt="">
                                                                                                                                <a href=""><i class="fa fa-link fa-3x text-primary"></i></a>
                                                                                                                            </div>
                                                                                                                            <div class="project-title">
                                                                                                                                <h4 class="mb-0">Business Loans</h4>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div> -->
    <!-- Projects End -->


    <!-- Team Start -->
    <!-- <div class="container-xxl py-5">
                                                                                                                <div class="container">
                                                                                                                    <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                                                                                                                        <p class="d-inline-block border rounded text-primary fw-semi-bold py-1 px-3">Our Team</p>
                                                                                                                        <h1 class="display-5 mb-5">Exclusive Team</h1>
                                                                                                                    </div>
                                                                                                                    <div class="row g-4">
                                                                                                                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                                                                                                                            <div class="team-item">
                                                                                                                                <img class="img-fluid rounded" src="img/team-1.jpg" alt="">
                                                                                                                                <div class="team-text">
                                                                                                                                    <h4 class="mb-0">Kate Winslet</h4>
                                                                                                                                    <div class="team-social d-flex">
                                                                                                                                        <a class="btn btn-square rounded-circle mx-1" href=""><i
                                                                                                                                                class="fab fa-facebook-f"></i></a>
                                                                                                                                        <a class="btn btn-square rounded-circle mx-1" href=""><i class="fab fa-twitter"></i></a>
                                                                                                                                        <a class="btn btn-square rounded-circle mx-1" href=""><i
                                                                                                                                                class="fab fa-instagram"></i></a>
                                                                                                                                    </div>
                                                                                                                                </div>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                                                                                                                            <div class="team-item">
                                                                                                                                <img class="img-fluid rounded" src="img/team-2.jpg" alt="">
                                                                                                                                <div class="team-text">
                                                                                                                                    <h4 class="mb-0">Jac Jacson</h4>
                                                                                                                                    <div class="team-social d-flex">
                                                                                                                                        <a class="btn btn-square rounded-circle mx-1" href=""><i
                                                                                                                                                class="fab fa-facebook-f"></i></a>
                                                                                                                                        <a class="btn btn-square rounded-circle mx-1" href=""><i class="fab fa-twitter"></i></a>
                                                                                                                                        <a class="btn btn-square rounded-circle mx-1" href=""><i
                                                                                                                                                class="fab fa-instagram"></i></a>
                                                                                                                                    </div>
                                                                                                                                </div>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                                                                                                                            <div class="team-item">
                                                                                                                                <img class="img-fluid rounded" src="img/team-3.jpg" alt="">
                                                                                                                                <div class="team-text">
                                                                                                                                    <h4 class="mb-0">Doris Jordan</h4>
                                                                                                                                    <div class="team-social d-flex">
                                                                                                                                        <a class="btn btn-square rounded-circle mx-1" href=""><i
                                                                                                                                                class="fab fa-facebook-f"></i></a>
                                                                                                                                        <a class="btn btn-square rounded-circle mx-1" href=""><i class="fab fa-twitter"></i></a>
                                                                                                                                        <a class="btn btn-square rounded-circle mx-1" href=""><i
                                                                                                                                                class="fab fa-instagram"></i></a>
                                                                                                                                    </div>
                                                                                                                                </div>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div> -->
    <!-- Team End -->


    <!-- Testimonial Start -->
    <!-- <div class="container-xxl py-5">
                                                                                                                <div class="container">
                                                                                                                    <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                                                                                                                        <p class="d-inline-block border rounded text-primary fw-semi-bold py-1 px-3">Testimonial</p>
                                                                                                                        <h1 class="display-5 mb-5">What Our Clients Say!</h1>
                                                                                                                    </div>
                                                                                                                    <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.3s">
                                                                                                                        <div class="testimonial-item">
                                                                                                                            <div class="testimonial-text border rounded p-4 pt-5 mb-5">
                                                                                                                                <div class="btn-square bg-white border rounded-circle">
                                                                                                                                    <i class="fa fa-quote-right fa-2x text-primary"></i>
                                                                                                                                </div>
                                                                                                                                Dolores sed duo clita tempor justo dolor et stet lorem kasd labore dolore lorem ipsum. At lorem
                                                                                                                                lorem magna ut et, nonumy et labore et tempor diam tempor erat.
                                                                                                                            </div>
                                                                                                                            <img class="rounded-circle mb-3" src="img/testimonial-1.jpg" alt="">
                                                                                                                            <h4>Client Name</h4>
                                                                                                                            <span>Profession</span>
                                                                                                                        </div>
                                                                                                                        <div class="testimonial-item">
                                                                                                                            <div class="testimonial-text border rounded p-4 pt-5 mb-5">
                                                                                                                                <div class="btn-square bg-white border rounded-circle">
                                                                                                                                    <i class="fa fa-quote-right fa-2x text-primary"></i>
                                                                                                                                </div>
                                                                                                                                Dolores sed duo clita tempor justo dolor et stet lorem kasd labore dolore lorem ipsum. At lorem
                                                                                                                                lorem magna ut et, nonumy et labore et tempor diam tempor erat.
                                                                                                                            </div>
                                                                                                                            <img class="rounded-circle mb-3" src="img/testimonial-2.jpg" alt="">
                                                                                                                            <h4>Client Name</h4>
                                                                                                                            <span>Profession</span>
                                                                                                                        </div>
                                                                                                                        <div class="testimonial-item">
                                                                                                                            <div class="testimonial-text border rounded p-4 pt-5 mb-5">
                                                                                                                                <div class="btn-square bg-white border rounded-circle">
                                                                                                                                    <i class="fa fa-quote-right fa-2x text-primary"></i>
                                                                                                                                </div>
                                                                                                                                Dolores sed duo clita tempor justo dolor et stet lorem kasd labore dolore lorem ipsum. At lorem
                                                                                                                                lorem magna ut et, nonumy et labore et tempor diam tempor erat.
                                                                                                                            </div>
                                                                                                                            <img class="rounded-circle mb-3" src="img/testimonial-3.jpg" alt="">
                                                                                                                            <h4>Client Name</h4>
                                                                                                                            <span>Profession</span>
                                                                                                                        </div>
                                                                                                                        <div class="testimonial-item">
                                                                                                                            <div class="testimonial-text border rounded p-4 pt-5 mb-5">
                                                                                                                                <div class="btn-square bg-white border rounded-circle">
                                                                                                                                    <i class="fa fa-quote-right fa-2x text-primary"></i>
                                                                                                                                </div>
                                                                                                                                Dolores sed duo clita tempor justo dolor et stet lorem kasd labore dolore lorem ipsum. At lorem
                                                                                                                                lorem magna ut et, nonumy et labore et tempor diam tempor erat.
                                                                                                                            </div>
                                                                                                                            <img class="rounded-circle mb-3" src="img/testimonial-4.jpg" alt="">
                                                                                                                            <h4>Client Name</h4>
                                                                                                                            <span>Profession</span>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div> -->
    <!-- Testimonial End -->
@endsection
