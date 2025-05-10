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
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
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
                        <img src="{{ asset('images/profile1.jpg') }}" class="profile-img mb-3" alt="Profil 1">
                        <h5>Andi Mahasiswa</h5>
                        <span class="badge bg-success">Frontend Developer</span>
                    </div>
                    <ul class="list-group list-group-flush mt-3">
                        <li class="list-group-item"><strong>NIM:</strong> 123456789</li>
                        <li class="list-group-item"><strong>Email:</strong> andi@example.com</li>
                        <li class="list-group-item"><strong>Keahlian:</strong> Laravel, JavaScript, SQL</li>
                        <li class="list-group-item"><strong>Pendidikan:</strong> S1 Teknik Informatika - Universitas Contoh</li>
                        <li class="list-group-item"><strong>Proyek:</strong>
                            <ul>
                                <li>Penjadwalan Otomatis</li>
                                <li>Web Kegiatan Mahasiswa</li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Anggota 2 -->
            <div class="col-md-4">
                <div class="card shadow-sm p-3 h-100">
                    <div class="text-center">
                        <img src="{{ asset('images/profile2.jpg') }}" class="profile-img mb-3" alt="Profil 2">
                        <h5>Budi Mahasiswa</h5>
                        <span class="badge bg-primary">Backend Developer</span>
                    </div>
                    <ul class="list-group list-group-flush mt-3">
                        <li class="list-group-item"><strong>NIM:</strong> 987654321</li>
                        <li class="list-group-item"><strong>Email:</strong> budi@example.com</li>
                        <li class="list-group-item"><strong>Keahlian:</strong> PHP, MySQL, API Development</li>
                        <li class="list-group-item"><strong>Pendidikan:</strong> S1 Teknik Informatika - Universitas Contoh</li>
                        <li class="list-group-item"><strong>Proyek:</strong>
                            <ul>
                                <li>API Penjadwalan</li>
                                <li>Sistem Informasi Akademik</li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Anggota 3 -->
            <div class="col-md-4">
                <div class="card shadow-sm p-3 h-100">
                    <div class="text-center">
                        <img src="{{ asset('images/profile3.jpg') }}" class="profile-img mb-3" alt="Profil 3">
                        <h5>Citra Mahasiswi</h5>
                        <span class="badge bg-warning text-dark">UI/UX Designer</span>
                    </div>
                    <ul class="list-group list-group-flush mt-3">
                        <li class="list-group-item"><strong>NIM:</strong> 112233445</li>
                        <li class="list-group-item"><strong>Email:</strong> citra@example.com</li>
                        <li class="list-group-item"><strong>Keahlian:</strong> Figma, HTML/CSS, Bootstrap</li>
                        <li class="list-group-item"><strong>Pendidikan:</strong> S1 Teknik Informatika - Universitas Contoh</li>
                        <li class="list-group-item"><strong>Proyek:</strong>
                            <ul>
                                <li>Desain Antarmuka Jadwal</li>
                                <li>Aplikasi UI Mahasiswa</li>
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
