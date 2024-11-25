<?php
session_start();
include '../fungsi/db.php'; // Koneksi ke database

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_GET['id'];
    $vehicleName = $_POST['vehicleName'];
    $price = $_POST['price'];

    $sql = "UPDATE vehicles SET name='$vehicleName', price='$price' WHERE id='$id'";
    if (mysqli_query($conn, $sql)) {
        header("Location: manage_vehicles.php");
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}
?>