<?php
include '../funsi/db.php';

$sql = "SELECT * FROM bookings";
$stmt = $conn->prepare($sql);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "ID: " . $row["id"]. " - User ID: " . $row["user_id"]. " - Car ID: " . $row["car_id"]. " - Start Date: " . $row["start_date"]. " - End Date: " . $row["end_date"]. " - Total Price: " . $row["total_price"]. " - Status: " . $row["status"]. "<br>";
    }
} else {
    echo "No bookings found.";
}
$stmt->close();
$conn->close();
?>