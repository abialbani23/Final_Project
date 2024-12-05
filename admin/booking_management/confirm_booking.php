<?php
include '../funsi/db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];

    $sql = "UPDATE bookings SET status='confirmed' WHERE id=?";
    $stmt = $conn->prepare($sql);
$stmt->bind_param("i", $id);

    if ($stmt->execute()) {
        echo "Booking confirmed successfully.";
    } else {
        echo "Error confirming booking: " . $stmt->error;
    }
    $stmt->close();
    $conn->close();
}
?>

<form method="post" action="">
    Booking ID: <input type="text" name="id"><br>
    <input type="submit" value="Confirm Booking">
</form>
