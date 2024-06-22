@extends('app')

@section('content')
    <div class="container py-5 px-4 col-xxl-8">
        <div class="py-5 row flex-lg-row-reverse align-items-center g-5">
            <div class="col-10 col-sm-8 col-lg-6">
                <img src="bootstrap-themes.png" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="700"
                    height="500" loading="lazy">
            </div>
            <div class="col-lg-6">
                <h1 class="mb-3 display-5 fw-bold text-body-emphasis lh-1">
                    Doing things that don't scale at scale
                </h1>
                <p class="lead">
                    Master the art of doing things that don't scale to get your business off the ground without burnout
                </p>
                <div class="gap-2 d-grid d-md-flex justify-content-md-start">
                    <button type="button" class="px-4 btn btn-primary btn-lg me-md-2">
                        Get started
                    </button>
                    <button type="button" class="px-4 btn btn-outline-secondary btn-lg">
                        Watch intro
                    </button>
                </div>
            </div>
        </div>
    </div>
    <section class="bg-secondary">
        <div class="container py-5 px-4 col-xxl-8">
            <div class="py-5 row align-items-center g-5">
                <div class="col-lg-6">
                    <img src="bootstrap-themes.png" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes"
                        width="700" height="500" loading="lazy">
                </div>
                <div class="col-lg-6">
                    <div>
                        <span></span> Our story
                    </div>
                    <h2>Our team comes with experience and knowlege</h2>

                    <ul class="mb-3 nav nav-pills" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home"
                                aria-selected="true">Who we are</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile"
                                aria-selected="false">Our Vision</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact"
                                aria-selected="false">Our History</button>
                        </li>
                    </ul>
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                            aria-labelledby="pills-home-tab" tabindex="0">...</div>
                        <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab"
                            tabindex="0">
                            ...
                        </div>
                        <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab"
                            tabindex="0">
                            ...
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <div class="container py-5 px-4" id="featured-3">
        <h2 class="pb-2 border-bottom">Columns with icons</h2>
        <div class="py-5 row g-5 row-cols-1 row-cols-lg-3">
            <div class="rounded border feature col">
                <div
                    class="mb-3 feature-icon d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-2">
                    <svg class="bi" width="1em" height="1em">
                        <use xlink:href="#collection"></use>
                    </svg>
                </div>
                <h3 class="fs-2 text-body-emphasis">Featured title</h3>
                <p>Paragraph of text beneath the heading to explain the heading. We'll add onto it with another sentence and
                    probably just keep going until we run out of words.</p>
                <a href="#" class="icon-link">
                    Call to action
                    <svg class="bi">
                        <use xlink:href="#chevron-right"></use>
                    </svg>
                </a>
            </div>
            <div class="rounded border feature col">
                <div
                    class="mb-3 feature-icon d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-2">
                    <svg class="bi" width="1em" height="1em">
                        <use xlink:href="#people-circle"></use>
                    </svg>
                </div>
                <h3 class="fs-2 text-body-emphasis">Featured title</h3>
                <p>Paragraph of text beneath the heading to explain the heading. We'll add onto it with another sentence and
                    probably just keep going until we run out of words.</p>
                <a href="#" class="icon-link">
                    Call to action
                    <svg class="bi">
                        <use xlink:href="#chevron-right"></use>
                    </svg>
                </a>
            </div>
            <div class="rounded border feature col">
                <div
                    class="mb-3 feature-icon d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-2">
                    <svg class="bi" width="1em" height="1em">
                        <use xlink:href="#toggles2"></use>
                    </svg>
                </div>
                <h3 class="fs-2 text-body-emphasis">Featured title</h3>
                <p>Paragraph of text beneath the heading to explain the heading. We'll add onto it with another sentence and
                    probably just keep going until we run out of words.</p>
                <a href="#" class="icon-link">
                    Call to action
                    <svg class="bi">
                        <use xlink:href="#chevron-right"></use>
                    </svg>
                </a>
            </div>
        </div>
    </div>

    <div class="container py-3">
        <header>
            <div class="pb-3 mb-4 d-flex flex-column flex-md-row align-items-center border-bottom">
                <a href="/" class="d-flex align-items-center link-body-emphasis text-decoration-none">
                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="32" class="me-2"
                        viewBox="0 0 118 94" role="img">
                        <title>Bootstrap</title>
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M24.509 0c-6.733 0-11.715 5.893-11.492 12.284.214 6.14-.064 14.092-2.066 20.577C8.943 39.365 5.547 43.485 0 44.014v5.972c5.547.529 8.943 4.649 10.951 11.153 2.002 6.485 2.28 14.437 2.066 20.577C12.794 88.106 17.776 94 24.51 94H93.5c6.733 0 11.714-5.893 11.491-12.284-.214-6.14.064-14.092 2.066-20.577 2.009-6.504 5.396-10.624 10.943-11.153v-5.972c-5.547-.529-8.934-4.649-10.943-11.153-2.002-6.484-2.28-14.437-2.066-20.577C105.214 5.894 100.233 0 93.5 0H24.508zM80 57.863C80 66.663 73.436 72 62.543 72H44a2 2 0 01-2-2V24a2 2 0 012-2h18.437c9.083 0 15.044 4.92 15.044 12.474 0 5.302-4.01 10.049-9.119 10.88v.277C75.317 46.394 80 51.21 80 57.863zM60.521 28.34H49.948v14.934h8.905c6.884 0 10.68-2.772 10.68-7.727 0-4.643-3.264-7.207-9.012-7.207zM49.948 49.2v16.458H60.91c7.167 0 10.964-2.876 10.964-8.281 0-5.406-3.903-8.178-11.425-8.178H49.948z"
                            fill="currentColor"></path>
                    </svg>
                    <span class="fs-4">Pricing example</span>
                </a>

                <nav class="mt-2 d-inline-flex mt-md-0 ms-md-auto">
                    <a class="py-2 me-3 link-body-emphasis text-decoration-none" href="#">Features</a>
                    <a class="py-2 me-3 link-body-emphasis text-decoration-none" href="#">Enterprise</a>
                    <a class="py-2 me-3 link-body-emphasis text-decoration-none" href="#">Support</a>
                    <a class="py-2 link-body-emphasis text-decoration-none" href="#">Pricing</a>
                </nav>
            </div>

            <div class="p-3 mx-auto text-center pricing-header pb-md-4">
                <h1 class="display-4 fw-normal text-body-emphasis">Pricing</h1>
                <p class="fs-5 text-body-secondary">Quickly build an effective pricing table for your potential customers
                    with this Bootstrap example. It’s built with default Bootstrap components and utilities with little
                    customization.</p>
            </div>
        </header>

        <main>
            <div class="mb-3 text-center row row-cols-1 row-cols-md-3">
                <div class="col">
                    <div class="mb-4 shadow-sm card rounded-3">
                        <div class="py-3 card-header">
                            <h4 class="my-0 fw-normal">Free</h4>
                        </div>
                        <div class="card-body">
                            <h1 class="card-title pricing-card-title">$0<small
                                    class="text-body-secondary fw-light">/mo</small></h1>
                            <ul class="mt-3 mb-4 list-unstyled">
                                <li>10 users included</li>
                                <li>2 GB of storage</li>
                                <li>Email support</li>
                                <li>Help center access</li>
                            </ul>
                            <button type="button" class="w-100 btn btn-lg btn-outline-primary">Sign up for free</button>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="mb-4 shadow-sm card rounded-3">
                        <div class="py-3 card-header">
                            <h4 class="my-0 fw-normal">Pro</h4>
                        </div>
                        <div class="card-body">
                            <h1 class="card-title pricing-card-title">$15<small
                                    class="text-body-secondary fw-light">/mo</small></h1>
                            <ul class="mt-3 mb-4 list-unstyled">
                                <li>20 users included</li>
                                <li>10 GB of storage</li>
                                <li>Priority email support</li>
                                <li>Help center access</li>
                            </ul>
                            <button type="button" class="w-100 btn btn-lg btn-primary">Get started</button>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="mb-4 shadow-sm card rounded-3 border-primary">
                        <div class="py-3 card-header text-bg-primary border-primary">
                            <h4 class="my-0 fw-normal">Enterprise</h4>
                        </div>
                        <div class="card-body">
                            <h1 class="card-title pricing-card-title">$29<small
                                    class="text-body-secondary fw-light">/mo</small></h1>
                            <ul class="mt-3 mb-4 list-unstyled">
                                <li>30 users included</li>
                                <li>15 GB of storage</li>
                                <li>Phone and email support</li>
                                <li>Help center access</li>
                            </ul>
                            <button type="button" class="w-100 btn btn-lg btn-primary">Contact us</button>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>



    <div class="container my-5">
        <div class="p-5 text-center bg-body-tertiary rounded-3">
            <h1 class="text-body-emphasis">We love to make perfect solutions for your business</h1>
            <p class="mx-auto col-lg-8 fs-5 text-muted">
                This is a custom jumbotron featuring an SVG image at the top, some longer text that wraps early thanks to a
                responsive <code>.col-*</code> class, and a customized call to action.
            </p>
            <div class="gap-2 mb-5 d-inline-flex">
                <button class="px-4 d-inline-flex align-items-center btn btn-primary btn-lg rounded-pill" type="button">
                    Get started
                </button>
            </div>
        </div>
    </div>
@endsection
