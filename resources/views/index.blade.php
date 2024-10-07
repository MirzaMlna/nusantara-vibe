<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title>Nusantara Vibe</title>
    {{-- Bootstrap & Css --}}
    @vite(['resources/sass/app.scss'])
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-app sticky-top" data-bs-theme="dark">
        <div class="container">
            <a class="navbar-brand">Nusatara <span class="bg-light text-app px-2 rounded-1">Vibe</span></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Masuk</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <section
        class="container-fluid position-relative vh-100 overflow-hidden text-light align-items-center justify-content-center d-flex">
        <video autoplay muted loop class="position-absolute top-50 start-50 translate-middle vw-100 vh-100"
            style="object-fit: cover;">
            <source src="{{ asset('assets/landing-page/hero-bg.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>

        <div class="container position-relative mx-auto my-5 text-center ">
            <div class="mb-5 mb-md-0">
                <h1 class="display-2 fw-bold ">
                    Nusantara <span class="bg-light text-app px-2 rounded-1">Vibe</span>
                </h1>
                <p class="fs-2 fst-italic">Gaya Otentik Khas Nusantara</p>
                <button type="button" class="btn bg-app text-light btn-lg "> <i class="bi bi-bag-check"></i>
                    Belanja
                    Sekarang</button>
            </div>
        </div>

    </section>

</body>

</html>
