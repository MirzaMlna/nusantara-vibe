<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title>Nusantara Vibe</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-app" data-bs-theme="dark">
        <div class="container">
            <a class="navbar-brand mx-auto fw-bold">Nusatara <span
                    class="bg-light text-app px-2 rounded-1">Vibe</span></a>
        </div>
    </nav>
    <main>
        <section class="container mt-5">
            <h3 class="text-app fw-bold">Produk Teratas <i class="bi bi-bag-check-fill"></i></h3>
            <div class="app-line"></div>
            <div class="card my-3" style="width: 18rem;">
                <img src="https://via.placeholder.com/150" class="card-img-top" alt="Product Image" />
                <div class="card-body">
                    <h5 class="card-title fw-light text-truncate">Batik Anjay Banar Banar Banar</h5>
                    <p class="card-text fw-bold">Rp100.000</p>
                    <a href="#" class="btn btn-success">Beli</a>
                    <a href="#" class="btn btn-secondary">Selengkapnya</a>
                </div>
            </div>
        </section>
    </main>


</body>

</html>
