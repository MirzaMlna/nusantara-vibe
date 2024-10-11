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
                        <a class="nav-link" aria-current="page" href="home">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="cart">Keranjang</a>
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
                        <ul class="dropdown-menu " aria-labelledby="userDropdown">
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
