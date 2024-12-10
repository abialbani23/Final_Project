<?php
include '../funsi/db.php';

// Total income from all bookings
$sql = "SELECT SUM(total_price) as total_income FROM bookings WHERE status = 'completed'";
$stmt = $conn->prepare($sql);
$stmt->execute();
$result = $stmt->get_result();
$row = $result->fetch_assoc();

$total_income = $row['total_income'] ?? 0;

echo "Total Income: $" . number_format($total_income, 2);
$stmt->close();
$conn->close();
?>
