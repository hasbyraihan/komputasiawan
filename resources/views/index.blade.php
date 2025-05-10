<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>KoTA - Sistem Penjadwalan Mata Kuliah</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .hero {
            background: linear-gradient(to right, #0d6efd, #6610f2);
            color: white;
            padding: 60px 30px;
            border-radius: 15px;
        }

        .gallery-img {
            height: 200px;
            object-fit: cover;
        }

        footer {
            margin-top: 60px;
            padding: 20px 0;
            background: #f8f9fa;
            text-align: center;
            border-top: 1px solid #ddd;
        }
    </style>
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="/">KoTA 210</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarContent">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="/">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/about">Tentang Kami</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="container py-4">
        <!-- Hero Section -->
        <div class="hero mb-5 text-center shadow-sm">
            <h1 class="display-5 fw-bold">Komputasi Awan Praktek</h1>
            <p class="lead mt-3">Project ini dibuat untuk kebutuhan tugas Mata Kuliah Komputasi Awan Praktek.</p>
        </div>

        <!-- Informasi KoTA -->
        <div class="row justify-content-center mb-5">
            <div class="col-md-8">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h4 class="card-title">Informasi Kelompok Tugas Akhir</h4>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><strong>Nomor KoTA:</strong> 201</li>
                            <li class="list-group-item"><strong>Judul TA:</strong> PENGEMBANGAN SISTEM POINT OF SALES
                                BERBASIS WEB DAN MOBILE UNTUK MENDUKUNG OPERASIONAL PENJUALAN DI TOKO NUR’AFIE</li>
                            <li class="list-group-item"><strong>Deskripsi:</strong> Proyek ini bertujuan untuk membangun
                                aplikasi berbasis web dan mobile yang mampu meningkatakn operasional toko secara optimal
                                dengan tambahan metode algoritma Reorder Point dan Economic Order Quantity
                                .</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- Galeri -->
        <h3 class="text-center mb-4">Galeri Proyek</h3>
        <div class="row g-3">
            <div class="col-md-4">
                <div class="card shadow-sm">
                    <img src="{{ asset('images/web.png') }}" class="card-img-top gallery-img" alt="Ilustrasi 1">
                    <div class="card-body">
                        <p class="card-text text-center">Aplikasi Web</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card shadow-sm">
                    <img src="{{ asset('images/mitra.jpg') }}" class="card-img-top gallery-img" alt="Ilustrasi 2">
                    <div class="card-body">
                        <p class="card-text text-center">Mitra Kami</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card shadow-sm">
                    <img src="{{ asset('images/mobile.png') }}" class="card-img-top gallery-img" alt="Ilustrasi 3">
                    <div class="card-body">
                        <p class="card-text text-center">Aplikasi Mobile</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Footer -->
        <footer class="mt-5">
            <p>&copy; 2025 Kelompok TA Informatika. All rights reserved.</p>
        </footer>
    </div>

    <!-- Bootstrap JS (opsional, untuk navbar toggle di mobile) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>