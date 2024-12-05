<?php
include '../funsi/db.php';

// Total number of bookings
$sql = "SELECT COUNT(*) as total_bookings FROM bookings";
$stmt = $conn->prepare($sql);
$stmt->execute();
$result = $stmt->get_result();
$row = $result->fetch_assoc();

$total_bookings = $row['total_bookings'] ?? 0;

echo "Total Bookings: " . $total_bookings . "<br>";

// Most booked car
$sql = "SELECT car_id, COUNT(*) as bookings_count FROM bookings GROUP BY car_id ORDER BY bookings_count DESC LIMIT 1";
$stmt = $conn->prepare($sql);
$stmt->execute();
$result = $stmt->get_result();
$row = $result->fetch_assoc();

$most_booked_car_id = $row['car_id'] ?? 'N/A';
$most_booked_car_count = $row['bookings_count'] ?? 0;

echo "Most Booked Car ID: " . $most_booked_car_id . " with " . $most_booked_car_count . " bookings<br>";

$stmt->close();
$conn->close();
?>
