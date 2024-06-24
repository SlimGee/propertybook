@extends('app')

@section('content')
    <section class="h-screen text-white bg-primary vh-90" id="home">
        <div class="container flex-col py-5 align-items-center h-100 d-flex col-xxl-8">
            <div class="py-5 row flex-lg-row-reverse align-items-center g-5">
                <div class="col-10 col-sm-8 col-lg-6">
                    <img src="{{ asset('images/2.webp') }}" class="rounded d-block mx-lg-auto img-fluid" alt="Bootstrap Themes"
                        width="700" height="500" loading="lazy">
                </div>
                <div class="col-lg-6">
                    <h1 class="mb-3 h-1 text-white display-3 fw-bold lh-1">

                        Doing things that don't scale at scale
                    </h1>
                    <p class="lead">
                        Master the art of doing things that don't scale to get your business off the ground without burnout
                    </p>
                    <div class="gap-2 d-grid d-md-flex justify-content-md-start align-items-center">
                        <button type="button"
                            class="px-4 tracking-wider bg-white fw-semibold fs-6 text-primary btn btn-invert text-uppercase btn-lg me-md-2">
                            Get started
                        </button>
                        <a type="button"
                            class="px-4 text-white border-0 btn btn-lg fw-semibold d-inline-flex align-items-center">
                            <span style="padding: 1px 8px"
                                class="justify-center bg-white me-2 text-primary rounded-pill d-inline-flex align-items-center">
                                <i class="bi bi-play fs-3"></i>
                            </span>
                            Watch intro
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="bg-light section about">
        <div class="container py-5 col-xxl-8">
            <div class="py-5 row align-items-center g-5">
                <div class="col-lg-6 position-relative">
                    <svg viewBox="0 0 52 24" fill="currentColor" class="icon">
                        <defs>
                            <pattern id="700c93bf-0068-4e32-aafe-ef5b6a647708" x="0" y="0" width=".135" height=".30">
                                <circle cx="1" cy="1" r=".7"></circle>
                            </pattern>
                        </defs>
                        <rect fill="url(#700c93bf-0068-4e32-aafe-ef5b6a647708)" width="52" height="24"></rect>
                    </svg>
                    <img src="{{ asset('images/3.webp') }}" class="z-10 position-relative d-block mx-lg-auto img-fluid"
                        alt="Bootstrap Themes" width="700" height="500" loading="lazy">
                </div>
                <div class="col-lg-6">
                    <div class="gap-2 mb-3 text-uppercase fw-semibold fs-5 subtitle w-100">
                        <span class="mr-2"></span>
                        Our story
                    </div>
                    <h2 class="mb-5 w-80 fw-bold display-6">
                        Our team comes with experience and knowlege
                    </h2>

                    <ul class="gap-2 p-3 mb-3 rounded nav nav-pills bg-body-secondary about-tabs" id="pills-tab"
                        role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="bg-white text-dark nav-link text-capitalize fw-semibold active"
                                id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button"
                                role="tab" aria-controls="pills-home" aria-selected="true">Who we are</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="bg-white nav-link fw-semibold text-dark" id="pills-profile-tab"
                                data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab"
                                aria-controls="pills-profile" aria-selected="false">Our Vision</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="bg-white nav-link fw-semibold text-dark" id="pills-contact-tab"
                                data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab"
                                aria-controls="pills-contact" aria-selected="false">Our History</button>
                        </li>
                    </ul>
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show text-secondary active" id="pills-home" role="tabpanel"
                            aria-labelledby="pills-home-tab" tabindex="0">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Vivamus arcu felis bibendum ut tristique et egestas quis.
                            Viverra

                            ipsum nunc aliquet bibendum enim facilisis. Maecenas ultricies mi eget mauris pharetra et
                            ultrices.
                        </div>
                        <div class="tab-pane text-secondary fade" id="pills-profile" role="tabpanel"
                            aria-labelledby="pills-profile-tab" tabindex="0">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Vivamus arcu felis bibendum ut tristique et egestas quis.
                            Viverra

                            ipsum nunc aliquet bibendum enim facilisis. Maecenas ultricies mi eget mauris pharetra et
                            ultrices.
                        </div>
                        <div class="tab-pane text-secondary fade" id="pills-contact" role="tabpanel"
                            aria-labelledby="pills-contact-tab" tabindex="0">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Vivamus arcu felis bibendum ut tristique et egestas quis.
                            Viverra

                            ipsum nunc aliquet bibendum enim facilisis. Maecenas ultricies mi eget mauris pharetra et
                            ultrices.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section" id="service">
        <div class="container py-5 px-4" id="featured-3">
            <div class="text-center w-100">
                <span class="py-2 px-5 mx-auto border text-primary title border-primary fw-semibold btn-lg rounded-pill">
                    Services
                </span>
            </div>

            <div class="gap-2 pt-5 mb-2 d-flex">
                <div class="p-4 rounded border feature col col-md-4">
                    <div
                        class="py-2 px-3 mb-3 border border-primary feature-icon d-inline-flex align-items-center justify-content-center rounded-pill text-primary fs-2">
                        <i class="bi bi-capsule"></i>
                    </div>
                    <h3 class="fs-5 text-body-emphasis">Refreshing Design</h3>
                    <p class="text-secondary">
                        Paragraph of text beneath the heading to explain the heading. We'll add onto
                        it with another sentence
                        and
                        probably just keep going until we run out of words.
                    </p>

                </div>
                <div class="p-4 rounded border feature col col-md-4">
                    <div
                        class="py-2 px-3 mb-3 border border-primary feature-icon d-inline-flex align-items-center justify-content-center rounded-pill text-primary fs-2">
                        <i class="bi bi-bootstrap"></i>
                    </div>
                    <h3 class="fs-5 text-body-emphasis">Bootstrap 5</h3>
                    <p class="text-secondary">
                        Paragraph of text beneath the heading to explain the heading. We'll add onto
                        it with another sentence
                        and
                        probably just keep going until we run out of words.
                    </p>

                </div>
                <div class="p-4 rounded border feature col col-md-4">
                    <div
                        class="py-2 px-3 mb-3 border border-primary feature-icon d-inline-flex align-items-center justify-content-center rounded-pill text-primary fs-2">
                        <i class="bi bi-bootstrap"></i>
                    </div>
                    <h3 class="fs-5 text-body-emphasis">Bootstrap 5</h3>
                    <p class="text-secondary">
                        Paragraph of text beneath the heading to explain the heading. We'll add onto
                        it with another sentence
                        and
                        probably just keep going until we run out of words.
                    </p>

                </div>
            </div>


            <div class="gap-2 d-flex">
                <div class="p-4 rounded border feature col col-md-4">
                    <div
                        class="py-2 px-3 mb-3 border border-primary feature-icon d-inline-flex align-items-center justify-content-center rounded-pill text-primary fs-2">
                        <i class="bi bi-capsule"></i>
                    </div>
                    <h3 class="fs-5 text-body-emphasis">Refreshing Design</h3>
                    <p class="text-secondary">
                        Paragraph of text beneath the heading to explain the heading. We'll add onto
                        it with another sentence
                        and
                        probably just keep going until we run out of words.
                    </p>

                </div>
                <div class="p-4 rounded border feature col col-md-4">
                    <div
                        class="py-2 px-3 mb-3 border border-primary feature-icon d-inline-flex align-items-center justify-content-center rounded-pill text-primary fs-2">
                        <i class="bi bi-bootstrap"></i>
                    </div>
                    <h3 class="fs-5 text-body-emphasis">Bootstrap 5</h3>
                    <p class="text-secondary">
                        Paragraph of text beneath the heading to explain the heading. We'll add onto
                        it with another sentence
                        and
                        probably just keep going until we run out of words.
                    </p>

                </div>
                <div class="p-4 rounded border feature col col-md-4">
                    <div
                        class="py-2 px-3 mb-3 border border-primary feature-icon d-inline-flex align-items-center justify-content-center rounded-pill text-primary fs-2">
                        <i class="bi bi-bootstrap"></i>
                    </div>
                    <h3 class="fs-5 text-body-emphasis">Bootstrap 5</h3>
                    <p class="text-secondary">
                        Paragraph of text beneath the heading to explain the heading. We'll add onto
                        it with another sentence
                        and
                        probably just keep going until we run out of words.
                    </p>

                </div>
            </div>



        </div>
    </section>
    <section class="section pricing bg-light" id="pricing">
        <div class="container py-3">

            <div class="text-center w-100">
                <span class="py-2 px-5 mx-auto border text-primary title border-primary fw-semibold btn-lg rounded-pill">
                    Pricing
                </span>
            </div>



            <div class="py-5 mb-3 text-center row row-cols-1 row-cols-md-3">
                <div class="col">
                    <div class="p-4 mb-4 bg-white border border-white-50 card rounded-3">
                        <div class="card-body">

                            <div class="my-4 text-center w-100">
                                <span
                                    class="py-2 px-5 mx-auto border text-primary title border-primary fw-semibold btn-lg rounded-pill">
                                    Starter
                                </span>
                            </div>

                            <p class="py-2 text-secondary">Quickly build an effective pricing table for your potential
                                customers
                            </p>

                            <h1 class="py-3 card-title pricing-card-title fw-bold">$0<small
                                    class="text-body-secondary fw-light">/mo</small></h1>

                            <button type="button"
                                class="px-4 tracking-wider btn-outline-primary fw-semibold fs-6 btn btn-invert text-uppercase btn-lg me-md-2">
                                Start free trial
                            </button>

                            <ul class="py-3 mt-3 mb-4 text-start list-unstyled">
                                <li class="mb-2">
                                    <i class="bi bi-check-circle text-primary"></i>
                                    10 users included
                                </li>
                                <li class="mb-2">
                                    <i class="bi bi-check-circle text-primary"></i>
                                    10 GB of storage
                                </li>
                                <li class="mb-2">
                                    <i class="bi bi-check-circle"></i>
                                    Priority email support
                                </li>
                                <li class="mb-2">
                                    <i class="bi bi-check-circle"></i>
                                    Help center access
                                </li>
                                <li>
                                    <i class="bi bi-check-circle"></i>
                                    10 users included
                                </li>

                            </ul>

                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="p-4 mb-4 bg-white border shadow border-white-50 card rounded-3">
                        <div class="card-body">

                            <div class="my-4 text-center w-100">
                                <span
                                    class="py-2 px-5 mx-auto text-white border bg-primary title border-primary fw-semibold btn-lg rounded-pill">
                                    Exclusive
                                </span>
                            </div>

                            <p class="py-2 text-secondary">Quickly build an effective pricing table for your potential
                                customers
                            </p>

                            <h1 class="py-3 card-title pricing-card-title fw-bold">$99<small
                                    class="text-body-secondary fw-light">/mo</small></h1>

                            <button type="button"
                                class="px-4 tracking-wider btn-primary fw-semibold fs-6 btn btn-invert text-uppercase btn-lg me-md-2">
                                Start free trial
                            </button>

                            <ul class="py-3 mt-3 mb-4 text-start list-unstyled">
                                <li class="mb-2">
                                    <i class="bi bi-check-circle text-primary"></i>
                                    10 users included
                                </li>
                                <li class="mb-2">
                                    <i class="bi bi-check-circle text-primary"></i>
                                    10 GB of storage
                                </li>
                                <li class="mb-2">
                                    <i class="bi bi-check-circle text-primary"></i>
                                    Priority email support
                                </li>
                                <li class="mb-2">
                                    <i class="bi bi-check-circle"></i>
                                    Help center access
                                </li>
                                <li>
                                    <i class="bi bi-check-circle"></i>
                                    10 users included
                                </li>

                            </ul>

                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="p-4 mb-4 bg-white border border-white-50 card rounded-3">
                        <div class="card-body">

                            <div class="my-4 text-center w-100">
                                <span
                                    class="py-2 px-5 mx-auto border text-primary title border-primary fw-semibold btn-lg rounded-pill">
                                    Premium
                                </span>
                            </div>

                            <p class="py-2 text-secondary">Quickly build an effective pricing table for your potential
                                customers
                            </p>

                            <h1 class="py-3 card-title pricing-card-title fw-bold">$150<small
                                    class="text-body-secondary fw-light">/mo</small></h1>

                            <button type="button"
                                class="px-4 tracking-wider btn-outline-primary fw-semibold fs-6 btn btn-invert text-uppercase btn-lg me-md-2">
                                Start free trial
                            </button>

                            <ul class="py-3 mt-3 mb-4 text-start list-unstyled">
                                <li class="mb-2">
                                    <i class="bi bi-check-circle text-primary"></i>
                                    10 users included
                                </li>
                                <li class="mb-2">
                                    <i class="bi bi-check-circle text-primary"></i>
                                    10 GB of storage
                                </li>
                                <li class="mb-2">
                                    <i class="bi bi-check-circle text-primary"></i>
                                    Priority email support
                                </li>
                                <li class="mb-2">
                                    <i class="bi bi-check-circle text-primary"></i>
                                    Help center access
                                </li>
                                <li>
                                    <i class="bi bi-check-circle text-primary"></i>
                                    10 users included
                                </li>

                            </ul>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section bg-primary">

        <div class="container my-5">
            <div class="p-5 text-center rounded-3">
                <h1 class="mx-auto text-white w-50 display-5 fw-bold">
                    We love to make perfect solutions for your business
                </h1>
                <p class="mx-auto text-white col-lg-8 fs-5">
                    When I hear people debate the ROI of design or the value of design, it's like come on Chad, that's not
                    the thing we do here man.
                </p>
                <div class="gap-2 py-3 mb-5 d-inline-flex">
                    <button type="button"
                        class="px-4 tracking-wider text-white border border-white fw-semibold fs-6 btn btn-invert text-uppercase btn-lg me-md-2">
                        Get started
                    </button>
                </div>
            </div>
        </div>
    </section>
@endsection
