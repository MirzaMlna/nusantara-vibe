<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title>Nusantara Vibe</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js', 'resources/js/bootstrap.js'])
</head>

<body>
@include('components.nav')
@include('components.heading')

    <main>
        <section class="container my-5">
            <h3 class=" fw-bold">Produk Terbaru </h3>
            <div class="app-line"></div>
            <div class="card mt-3" style="width: 18rem;">
                <img src="https://via.placeholder.com/150" class="card-img-top" alt="Product Image" />
                <div class="card-body">
                    <h5 class="card-title fw-light text-truncate">Lorem, ipsum dolor sit amet consectetur adipisicing
                        elit. Quidem, nam?</h5>
                    <p class="card-text fw-bold">Rp100.000</p>
                    <a href="#" class="btn btn-success">Beli</a>
                    <a href="#" class="btn btn-secondary">Detail</a>
                    <a href="#" class="btn btn-dark"><i class="bi bi-cart-plus-fill"></i></a>
                </div>
            </div>

        </section>
        <section class="container my-5">
            <h3 class=" fw-bold">Kain Batik</h3>
            <div class="app-line"></div>
            <div class="card mt-3" style="width: 18rem;">
                <img src="https://via.placeholder.com/150" class="card-img-top" alt="Product Image" />
                <div class="card-body">
                    <h5 class="card-title fw-light text-truncate">Lorem, ipsum dolor sit amet consectetur adipisicing
                        elit. Quidem, nam?</h5>
                    <p class="card-text fw-bold">Rp100.000 <span class="fw-light">/ meter</span></p>
                    <a href="#" class="btn btn-success">Beli</a>
                    <a href="#" class="btn btn-secondary">Detail</a>
                    <a href="#" class="btn btn-dark"><i class="bi bi-cart-plus-fill"></i></a>
                </div>
            </div>

        </section>
    </main>

    @include('components.footer')
</body>

</html>
