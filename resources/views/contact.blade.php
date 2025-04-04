@extends('layouts.app')

@section('content')
    <!-- Page Header Start -->
    <div class="container-fluid page-header mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container">
            <h1 class="display-3 mb-4 animated slideInDown">Kontakta</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="#">Hem</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Kontakta</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Contact Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 mt-0 wow fadeIn" data-wow-delay="0.1s">
                    <p class="mb-2"><b>STOCKHOLM-UPPSALA LÄN</b></p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>018-751 33 20</p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>info@ekonomidirekten.se</p>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Kungsängsvägen 27, 753 23 Uppsala
                        Huvudkonto</p>
                </div>
                <div class="col-lg-6 mt-0 wow fadeIn" data-wow-delay="0.1s">
                    <p class="mb-2"><b>SKÅNE-BLEKINE LÄN</b></p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>018-751 33 20</p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>info@ekonomidirekten.se</p>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Älgbacken, 372 34 Ronneby</p>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                    <p class="d-inline-block border rounded text-primary fw-semi-bold py-1 px-3">Kontakta</p>
                    <h1 class="display-5 mb-4">Om du har några frågor, vänligen kontakta oss</h1>
                    {{-- <p class="mb-4">The contact form is currently inactive. Get a functional and working contact form
                        with Ajax & PHP in a few minutes. Just copy and paste the files, add a little code and you're
                        done. <a href="https://htmlcodex.com/contact-form">Download Now</a>.</p> --}}
                    <form action="{{ url('contact') }}" method="POST" class="wpcf7-form" novalidate="novalidate">
                        @csrf
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="name" name="name"
                                        placeholder="Your Name">
                                    <label for="name">Ditt Namn</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="email" class="form-control" id="email" name="email"
                                        placeholder="Your Email">
                                    <label for="email">Din E-Post</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="subject" name="subject"
                                        placeholder="Subject">
                                    <label for="subject">Ämne</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control" placeholder="Leave a message here" id="message" name="message" style="height: 100px"></textarea>
                                    <label for="message">Meddelande</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary py-3 px-5" type="submit">Skicka Meddelande</button>
                            </div>
                            <div class="my-3">
                                <div class="loading">Skickar meddelande...</div>
                                <div class="error-message"></div>
                                <div class="sent-message">Meddelande skickat, tack.</div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s" style="min-height: 450px;">
                    <div class="position-relative rounded overflow-hidden h-100">
                        <iframe class="position-relative w-100 h-100"
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2587.4071787538696!2d17.67033855622421!3d59.846727568584456!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x465fc95aa3d79495%3A0xd7c27b1ac201663!2sKungs%C3%A4ngsv%C3%A4gen%2027%2C%20753%2023%20Uppsala%2C%20Sweden!5e0!3m2!1sen!2s!4v1738407435467!5m2!1sen!2s"
                            loading="lazy" referrerpolicy="no-referrer-when-downgrade" frameborder="0"
                            style="min-height: 450px; border:0;" allowfullscreen="" aria-hidden="false"
                            tabindex="0"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->
@endsection
