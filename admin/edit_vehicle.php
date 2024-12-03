<?php
session_start();
include '../fungsi/db.php'; // Koneksi ke database

// Mengambil data kendaraan berdasarkan ID
$id = $_GET['id'];
$query = "SELECT * FROM vehicles WHERE id='$id'";
$result = mysqli_query($conn, $query);
$vehicle = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Kendaraan - OTO TRACK</title>
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
        <h1>Edit Kendaraan</h1>
        <form action="process_edit_vehicle.php?id=<?php echo $vehicle['id']; ?>" method="POST">
            <div class="form-group">
                <label for="vehicleName">Nama Kendaraan</label>
                <input type="text" class="form-control" id="vehicleName" name="vehicleName" value="<?php echo $vehicle['name']; ?>" required>
            </div>
            <div class="form-group">
                <label for="price">Harga</label>
                <input type="number" class="form-control" id="price" name="price" value="<?php echo $vehicle['price']; ?>" required>
            </div>
            <button type="submit" class="btn btn-warning">Update Kendaraan</button>
            <a href="manage_vehicles.php" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
</body>
</html>