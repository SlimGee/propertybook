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
                        {{ $title }}
                    </h1>
                    {!! $subtitle !!}
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
    @foreach ($panels as $panel)
        <section class="bg-light section about">
            <div class="container py-5 col-xxl-8">
                <div class="py-5 row align-items-center g-5">
                    <div class="col-lg-6 position-relative">
                        <svg viewBox="0 0 52 24" fill="currentColor" class="icon">
                            <defs>
                                <pattern id="700c93bf-0068-4e32-aafe-ef5b6a647708" x="0" y="0" width=".135"
                                    height=".30">
                                    <circle cx="1" cy="1" r=".7"></circle>
                                </pattern>
                            </defs>
                            <rect fill="url(#700c93bf-0068-4e32-aafe-ef5b6a647708)" width="52" height="24"></rect>
                        </svg>
                        <img src="{{ $panel->panel_image }}" class="z-10 position-relative d-block mx-lg-auto img-fluid"
                            alt="Bootstrap Themes" width="700" height="500" loading="lazy">
                    </div>
                    <div class="col-lg-6">
                        <div class="gap-2 mb-3 text-uppercase fw-semibold fs-5 subtitle w-100">
                            <span class="mr-2"></span>
                            {{ $panel->teaser }}
                        </div>
                        <h2 class="mb-5 w-80 fw-bold display-6">
                            {{ $panel->header }}
                        </h2>
                        @if ($panel->has_tabs)
                            <ul class="gap-2 p-3 mb-3 rounded nav nav-pills bg-body-secondary about-tabs" id="pills-tab"
                                role="tablist">
                                @foreach ($panel->tabs as $tab)
                                    <li class="nav-item" role="presentation">
                                        <button @class([
                                            'bg-white text-dark nav-link text-capitalize fw-semibold',
                                            'active' => $loop->first,
                                        ])
                                            aria-selected="{{ $loop->first ? 'true' : 'false' }}" id="pills-home-tab"
                                            data-bs-toggle="pill" data-bs-target="#pills{{ $tab->id }}" type="button"
                                            role="tab" aria-controls="pills-home">
                                            {{ $tab->title }}
                                        </button>
                                    </li>
                                @endforeach
                            </ul>
                            <div class="tab-content" id="pills-tabContent">
                                @foreach ($panel->tabs as $tab)
                                    <div @class([
                                        'tab-pane fade show text-secondary',
                                        'active' => $loop->first,
                                    ]) id="pills{{ $tab->id }}" role="tabpanel"
                                        aria-labelledby="pills-home-tab" tabindex="{{ $loop->index }}">
                                        {!! $tab->content !!}
                                    </div>
                                @endforeach
                            </div>
                        @else
                            <div>
                                {!! $panel->content !!}
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </section>
    @endforeach

    <section class="section services" id="service">
        <div class="container py-5 px-4" id="featured-3">
            <div class="text-center w-100">
                <span class="py-2 px-5 mx-auto border text-primary title border-primary fw-semibold btn-lg rounded-pill">
                    Services
                </span>
            </div>

            @foreach (collect($service_items)->chunk(3) as $chunk)
                <div class="gap-2 pt-5 mb-2 d-flex">

                    @foreach ($chunk as $service)
                        <div class="p-4 rounded border feature col col-md-4 service">
                            <div
                                class="py-2 px-3 mb-3 border border-primary feature-icon d-inline-flex align-items-center justify-content-center rounded-pill text-primary fs-2">
                                <i class="bi {{ $service->icon }}"></i>
                            </div>
                            <h3 class="fs-5 text-body-emphasis">{{ $service->title }}</h3>
                            {!! $service->content !!}
                        </div>
                    @endforeach

                </div>
            @endforeach

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
                @foreach ($pricing_items as $pricing)
                    <div class="col pricing-item">
                        <div @class([
                            'p-4 mb-4 bg-white border border-white-50 card rounded-3',
                            'shadow' => $pricing->recommended,
                        ])>
                            <div class="card-body">

                                <div class="my-4 text-center w-100">
                                    <span @class([
                                        'py-2 px-5 mx-auto border text-primary title border-primary fw-semibold btn-lg rounded-pill',
                                        'bg-primary text-white' => $pricing->recommended,
                                    ])>
                                        {{ $pricing->name }}
                                    </span>
                                </div>

                                <p class="">
                                </p>
                                {!! $pricing->subtitle !!}

                                <h1 class="py-3 card-title pricing-card-title fw-bold">${{ $pricing->price }}<small
                                        class="text-body-secondary fw-light">/mo</small></h1>

                                <button type="button" @class([
                                    'px-4 tracking-wider btn-outline-primary fw-semibold fs-6 btn btn-invert text-uppercase btn-lg me-md-2',
                                    'bg-primary text-white' => $pricing->recommended,
                                ])>
                                    {{ $pricing->cta_text }}
                                </button>

                                <ul class="py-3 mt-3 mb-4 text-start list-unstyled">
                                    @foreach ($pricing->features as $feature)
                                        <li class="mb-2">
                                            <i class="bi bi-check-circle text-primary"></i>
                                            {{ $feature->entry }}
                                        </li>
                                    @endforeach
                                </ul>

                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </section>

    <section class="section bg-primary cta">

        <div class="container my-5">
            <div class="p-5 text-center rounded-3">
                <h1 class="mx-auto text-white w-50 display-5 fw-bold">
                    {{ $cta_title }}
                </h1>
                {!! $cta_subtitle !!}
                <div class="gap-2 py-3 mb-5 d-inline-flex">
                    <button type="button"
                        class="px-4 tracking-wider text-white border border-white fw-semibold fs-6 btn btn-invert text-uppercase btn-lg me-md-2">
                        {{ $cta_cta_text }}
                    </button>
                </div>
            </div>
        </div>
    </section>
@endsection
