<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap w/ Vite</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:300,400,600,500,700,800,900&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    @vite(['resources/scss/app.scss', 'resources/js/app.js'])
</head>

<body>
    <nav class="bg-primary navbar navbar-expand-lg fixed-top">
        <div class="container">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                <a class="text-white navbar-brand fw-bold fs-3 d-flex align-items-center" href="/">
                    <img src="{{ asset('images/logo.svg') }}" style="width: 35px;" class="w-10 img-fluid">
                    Business
                </a>
                <ul class="mb-2 navbar-nav me-auto mb-lg-0">
                    <li class="nav-item">
                        <a class="text-white nav-link active" aria-current="page" href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="text-white nav-link" href="#service" data-bs-target="#service">Service</a>
                    </li>
                    <li class="nav-item">
                        <a class="text-white nav-link" href="#pricing">Pricing</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    @yield('content')

</body>

</html>
