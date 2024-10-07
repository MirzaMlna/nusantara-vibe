<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title>Nusantara Vibe</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>
    <section class="container-fluid align-items-center justify-content-center d-flex batik-bg vh-100">
        <form class="bg-light rounded" data-bs-theme='light'>
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
                <div class="form-check mb-3">
                    <input type="checkbox" class="form-check-input" id="showPassword" />
                    <label class="form-check-label" for="showPassword">Tampilkan Password</label>
                </div>
                <p class="form-text">Belum punya akun? <a href="">Buat akun</a></p>
                <button type="submit" class="btn bg-app text-light">Masuk</button>
            </div>
        </form>
    </section>
</body>

</html>
