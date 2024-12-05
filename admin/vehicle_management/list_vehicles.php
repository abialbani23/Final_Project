<?php
include '../funsi/db.php';

$sql = "SELECT * FROM cars";
$stmt = $conn->prepare($sql);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "ID: " . $row["id"]. " - Make: " . $row["make"]. " - Model: " . $row["model"]. " - Year: " . $row["year"]. " - Price per day: " . $row["price_per_day"]. "<br>";
    }
} else {
    echo "No vehicles found.";
}
$stmt->close();
$conn->close();
?>
