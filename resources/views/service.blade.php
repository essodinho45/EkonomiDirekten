@extends('layouts.app')

@section('content')
    <!-- Page Header Start -->
    <div class="container-fluid page-header mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container">
            <h1 class="display-3 mb-4 animated slideInDown">Tjänster</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="#">Hem</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Tjänster</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->

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
@endsection
