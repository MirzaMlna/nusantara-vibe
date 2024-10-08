<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title>Nusantara Vibe</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js', 'resources/js/bootstrap.js'])
</head>

<body>
    <section class="container-fluid align-items-center justify-content-center d-flex batik-bg vh-100">
        <form class="bg-light rounded" data-bs-theme='light' action="home">
            <div class="container bg-app  rounded-top-1">
                <h2 class="fw-bold text-light py-4 ms-2">Masuk ke akun anda</h2>
            </div>
            <div class="m-5">
                <div class="mb-3">
                    <label class="form-label">Alamat Email</label>
                    <input type="email" class="form-control">
                    <div class="form-text">Kami tidak akan pernah membagikan email Anda kepada orang lain.
                    </div>
                </div>
                <div class="mb-3">
                    <label class="form-label">Sandi</label>
                    <input type="password" class="form-control" id="passwordInput">
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <p class="form-text">Belum punya akun? <a href="">Buat akun</a></p>
                    </div>
                    <div class="col-md-6 align-items-end justify-content-end d-flex">
                        <div class="form-check form-text mb-3">
                            <input type="checkbox" class="form-check-input" id="showPassword" />
                            <label class="form-check-label" for="showPassword">Tampilkan Password</label>
                        </div>
                    </div>
                </div>


                <button type="submit" class="btn app-btn bg-app text-light w-100" style="">Masuk</button>
            </div>
        </form>
    </section>
</body>

</html>
