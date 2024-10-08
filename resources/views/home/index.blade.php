<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title>Nusantara Vibe</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js', 'resources/js/bootstrap.js'])
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-app sticky-top" data-bs-theme="dark">
        <div class="container">
            <a class="navbar-brand fw-bold">Nusatara <span class="bg-light text-app px-2 rounded-1">Vibe</span></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="auth">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="auth">Keranjang</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="auth">Riwayat</a>
                    </li>
                </ul>
                <!-- Avatar dan Nama Pengguna -->
                <div class="d-flex align-items-center ms-auto">
                    <div class="dropdown">
                        <a href="#"
                            class="d-flex align-items-center text-light text-decoration-none dropdown-toggle"
                            id="userDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="https://via.placeholder.com/40" alt="avatar" class="rounded-circle"
                                width="40" height="40" />
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="userDropdown">
                            <li><a class="dropdown-item" href="#">Profil</a></li>
                            <li><a class="dropdown-item" href="#">Pengaturan</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Keluar</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </nav>


    <div class="container-fluid bg-secondary-subtle py-3 vw-100">
        <div class="container">
            <h3 class="fw-bold text-app"><i class="bi bi-house-fill"></i> Beranda</h3>

        </div>
    </div>

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
