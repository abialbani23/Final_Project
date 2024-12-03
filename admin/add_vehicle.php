<?php
session_start();
include '../fungsi/db.php'; // Koneksi ke database
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Kendaraan - OTO TRACK</title>
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <nav class="navbar navbar-light bg-light">
        <a class="navbar-brand" href="index.php">Dashboard Admin</a>
        <div class="login-container">
            <a href="../login.html" class="btn btn-primary">Logout</a>
 </div>
    </nav>

    <div class="container">
        <h1>Tambah Kendaraan</h1>
        <form action="process_add_vehicle.php" method="POST">
            <div class="form-group">
                <label for="vehicleName">Nama Kendaraan</label>
                <input type="text" class="form-control" id="vehicleName" name="vehicleName" required>
            </div>
            <div class="form-group">
                <label for="price">Harga</label>
                <input type="number" class="form-control" id="price" name="price" required>
            </div>
            <button type="submit" class="btn btn-success">Simpan Kendaraan</button>
            <a href="manage_vehicles.php" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
</body>
</html>