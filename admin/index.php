<?php
session_start();
include '../fungsi/db.php'; // Koneksi ke database
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin - OTO TRACK</title>
    <link rel="icon" type="image/png" href="../img/oto track.png" />
    <link rel="stylesheet" href="www/styles.css" >
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-light bg-light">
        <a class="navbar-brand" href="#">
            <img src="../img/Logo_Web-removebg-preview.png" alt="Logo" class="logo" />
        </a>
        <div class="login-container">
            <a href="../login.html" class="btn btn-danger btn-sm logout-button">Logout</a>
        </div>
    </nav>

    <div class="container mt-4">
        <h1>Selamat Datang di Dashboard Admin</h1>
        <p>Ini adalah halaman utama untuk mengelola sistem OTO TRACK.</p>
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Kelola Kendaraan</h5>
                        <p class="card-text">Tambah, edit, atau hapus kendaraan.</p>
                        <a href="manage_vehicles.php" class="btn btn-primary">Kelola Kendaraan</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Kelola Pengguna</h5>
                        <p class="card-text">Kelola pengguna sistem.</p>
                        <a href="manage_users.php" class="btn btn-primary">Kelola Pengguna</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Statistik</h5>
                        <p class="card-text">Lihat statistik penggunaan kendaraan.</p>
                        <a href="statistics.php" class="btn btn-primary">Lihat Statistik</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer id="foot" class="text-center mt-4">
        <p>&copy; 2023 OTO TRACK. All Rights Reserved.</p>
        <a class="whatsapp-button" href="https://wa.me/6281511208316">
            <i class="fab fa-whatsapp"></i>
            Hubungi Kami
        </a>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>