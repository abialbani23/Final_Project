<?php
session_start();
include '../fungsi/db.php'; // Koneksi ke database

// Mengambil data kendaraan dari database
$query = "SELECT * FROM vehicles";
$result = mysqli_query($conn, $query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kelola Kendaraan - OTO TRACK</title>
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
        <h1>Kelola Kendaraan</h1>
        <a href="add_vehicle.php" class="btn btn-success">Tambah Kendaraan</a>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama Kendaraan</th>
                    <th>Harga</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['name']; ?></td>
                    <td><?php echo $row['price']; ?></td>
                    <td>
                        <a href="edit_vehicle.php?id=<?php echo $row['id']; ?>" class="btn btn-warning">Edit </a>
                        <a href="delete_vehicle.php?id=<?php echo $row['id']; ?>" class="btn btn-danger">Hapus</a>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</body>
</html>