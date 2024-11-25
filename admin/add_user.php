<?php
session_start();
include '../fungsi/db.php';
// Koneksi ke database
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Pengguna - OTO TRACK</title>
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
        <h1>Tambah Pengguna</h1>
        <form action="process_add_user.php" method="POST">
            <div class="form-group">
                <label for="username">Nama Pengguna</label>
                <input type="text" class="form-control" id="username" name="username" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <button type="submit" class="btn btn-success">Simpan Pengguna</button>
            <a href="manage_users.php" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
</body>
</html>
