<?php
include '../funsi/db.php';

$id = $_GET['id'];

$sql = "SELECT * FROM bookings WHERE id=?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $id);
$stmt->execute();
$result = $stmt->get_result();
$booking = $result->fetch_assoc();

if ($booking) {
    echo "ID: " . $booking["id"]. "<br>";
    echo "User ID: " . $booking["user_id"]. "<br>";
    echo "Car ID: " . $booking["car_id"]. "<br>";
    echo "Start Date: " . $booking["start_date"]. "<br>";
    echo "End Date: " . $booking["end_date"]. "<br>";
    echo "Total Price: " . $booking["total_price"]. "<br>";
    echo "Status: " . $booking["status"]. "<br>";
} else {
    echo "Booking not found.";
}
$stmt->close();
$conn->close();
?>
