<?php
session_start();
include '../fungsi/db.php'; // Koneksi ke database

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $vehicleName = $_POST['vehicleName'];
    $price = $_POST['price'];

    $sql = "INSERT INTO vehicles (name, price) VALUES ('$vehicleName', '$price')";
    if (mysqli_query($conn, $sql)) {
        header("Location: manage_vehicles.php");
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}
?>