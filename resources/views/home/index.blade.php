<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title>Nusantara Vibe</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-app sticky-top" data-bs-theme="dark">
        <div class="container">
            <a class="navbar-brand mx-auto fw-bold">Nusatara <span
                    class="bg-light text-app px-2 rounded-1">Vibe</span></a>
        </div>
    </nav>
    <main>
        <section class="container my-5">
            @include('home.new_product.index')
        </section>
        <section class="container my-5">
            @include('home.fabric_product.index')

        </section>
    </main>

    @include('components.footer')
</body>

</html>
