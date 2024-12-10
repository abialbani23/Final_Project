<?php
include '../funsi/db.php';

// Total number of users
$sql = "SELECT COUNT(*) as total_users FROM users";
$stmt = $conn->prepare($sql);
$stmt->execute();
$result = $stmt->get_result();
$row = $result->fetch_assoc();

$total_users = $row['total_users'] ?? 0;

echo "Total Users: " . $total_users . "<br>";

// User with most bookings
$sql = "SELECT user_id, COUNT(*) as bookings_count FROM bookings GROUP BY user_id ORDER BY bookings_count DESC LIMIT 1";
$stmt = $conn->prepare($sql);
$stmt->execute();
$result = $stmt->get_result();
$row = $result->fetch_assoc();

$most_active_user_id = $row['user_id'] ?? 'N/A';
$most_active_user_count = $row['bookings_count'] ?? 0;

echo "Most Active User ID: " . $most_active_user_id . " with " . $most_active_user_count . " bookings<br>";

$stmt->close();
$conn->close();
?>
