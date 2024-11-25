<?php
session_start();
include '../fungsi/db.php'; // Koneksi ke database
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin - OTO TRACK</title>
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <nav class="navbar navbar-light bg-light">
        <a class="navbar-brand" href="#">Dashboard Admin</a>
        <div class="login-container">
            <a href="../login.html" class="btn btn-primary">Logout</a>
        </div>
    </nav>

    <div class="container">
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
</body>
</html>