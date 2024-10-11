<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title>Nusantara Vibe</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js', 'resources/js/bootstrap.js'])
</head>

<body>
    @include('layout.nav')

    <div class="container-fluid bg-secondary-subtle py-3">
        <div class="container">
            <h3 class="fw-bold text-app"> @yield('heading')</h3>
        </div>
    </div>

    <main class="container my-5 min-vh-100">
        @yield('content')
    </main>

    @include('layout.footer')
</body>

</html>
