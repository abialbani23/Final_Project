<?php
include '../funsi/db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];

    $sql = "DELETE FROM bookings WHERE id=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);

    if ($stmt->execute()) {
        echo "Booking deleted successfully.";
    } else {
        echo "Error deleting booking: " . $stmt->error;
    }
    $stmt->close();
    $conn->close();
}
?>

<form method="post" action="">
    Booking ID: <input type="text" name="id"><br>
    <input type="submit" value="Delete Booking">
</form>
