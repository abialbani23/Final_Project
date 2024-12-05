<?php
include '../funsi/db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $make = $_POST['make'];
    $model = $_POST['model'];
    $year = $_POST['year'];
    $plate_number = $_POST['plate_number'];
    $price_per_day = $_POST['price_per_day'];
    $price_per_12_hours = $_POST['price_per_12_hours'];

    $sql = "INSERT INTO cars (make, model, year, plate_number, price_per_day, price_per_12_hours) VALUES (?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssisdd", $make, $model, $year, $plate_number, $price_per_day, $price_per_12_hours);

    if ($stmt->execute()) {
        echo "New vehicle added successfully.";
    } else {
        echo "Error: " . $stmt->error;
    }
    $stmt->close();
    $conn->close();
}
?>

<form method="post" action="">
    Make: <input type="text" name="make"><br>
    Model: <input type="text" name="model"><br>
    Year: <input type="text" name="year"><br>
    Plate Number: <input type="text" name="plate_number"><br>
    Price per Day: <input type="text" name="price_per_day"><br>
    Price per 12 Hours: <input type="text" name="price_per_12_hours"><br>
    <input type="submit" value="Add Vehicle">
</form>
