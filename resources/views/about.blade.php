<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Tentang Kami - KoTA</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .cv-header {
            background: linear-gradient(to right, #6610f2, #0d6efd);
            color: white;
            padding: 40px 30px;
            border-radius: 15px;
            text-align: center;
            margin-bottom: 30px;
        }

        .profile-img {
            max-width: 150px;
            border-radius: 50%;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
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
            <a class="navbar-brand" href="/">KoTA Informatika</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarContent">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="/">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="/about">Tentang Kami</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Header -->
    <div class="cv-header">
        <h1 class="display-5 fw-bold">Curriculum Vitae</h1>
        <p class="lead">Anggota Kelompok Tugas Akhir</p>
    </div>

    <!-- Anggota KoTA -->
    <div class="container">
        <div class="row g-4">

            <!-- Anggota 1 -->
            <div class="col-md-4">
                <div class="card shadow-sm p-3 h-100">
                    <div class="text-center">
                        <img src="{{ asset('images/Picture1.png') }}" class="profile-img mb-3" alt="Profil 1">
                        <h5>Hasby Raihan</h5>
                        <span class="badge bg-success">Flutter Mobile Developer</span>
                    </div>
                    <ul class="list-group list-group-flush mt-3">
                        <li class="list-group-item"><strong>NIM:</strong> 221511014</li>
                        <li class="list-group-item"><strong>Email:</strong> hasby.raihan.tif22@polban.ac.id</li>
                        <li class="list-group-item"><strong>Keahlian:</strong> Flutter, FlutterFlow</li>
                        <li class="list-group-item"><strong>Pendidikan:</strong> D3 Teknik Informatika - Politeknik
                            Negeri Bandung (ongoing)</li>
                        <li class="list-group-item"><strong>Proyek:</strong>
                            <ul>
                                <li>Desain Antar Muka Mobile</li>
                                <li>Implementasi Mobile</li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Anggota 2 -->
            <div class="col-md-4">
                <div class="card shadow-sm p-3 h-100">
                    <div class="text-center">
                        <img src="{{ asset('images/Picture2.png') }}" class="profile-img mb-3" alt="Profil 2">
                        <h5>Adrian Eka Saputra</h5>
                        <span class="badge bg-primary">Back-End Developer</span>
                    </div>
                    <ul class="list-group list-group-flush mt-3">
                        <li class="list-group-item"><strong>NIM:</strong> 221511036</li>
                        <li class="list-group-item"><strong>Email:</strong> adrian.eka.tif22@polban.ac.id</li>
                        <li class="list-group-item"><strong>Keahlian:</strong> PHP, MySQL, API Development</li>
                        <li class="list-group-item"><strong>Pendidikan:</strong> D3 Teknik Informatika - Politeknik
                            Negeri Bandung (ongoing)</li>
                        <li class="list-group-item"><strong>Proyek:</strong>
                            <ul>
                                <li>Pembuatan API</li>
                                <li>Deployment Aplikasi </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Anggota 3 -->
            <div class="col-md-4">
                <div class="card shadow-sm p-3 h-100">
                    <div class="text-center">
                        <img src="{{ asset('images/Picture3.jpg') }}" class="profile-img mb-3" alt="Profil 3">
                        <h5>Muhammad Adi Saputera</h5>
                        <span class="badge bg-warning text-dark">Front-End Developer</span>
                    </div>
                    <ul class="list-group list-group-flush mt-3">
                        <li class="list-group-item"><strong>NIM:</strong> 221511056</li>
                        <li class="list-group-item"><strong>Email:</strong> muhammad.adi.tif22@polban.ac.id</li>
                        <li class="list-group-item"><strong>Keahlian:</strong> Figma, HTML/CSS, Bootstrap</li>
                        <li class="list-group-item"><strong>Pendidikan:</strong> D3 Teknik Informatika - Politeknik
                            Negeri Bandung (ongoing)</li>
                        <li class="list-group-item"><strong>Proyek:</strong>
                            <ul>
                                <li>Desain Antarmuka Web</li>
                                <li>Implementasi Web</li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>

        </div>
    </div>

    <!-- Footer -->
    <footer class="mt-5">
        <p>&copy; 2025 Kelompok TA Informatika. All rights reserved.</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>