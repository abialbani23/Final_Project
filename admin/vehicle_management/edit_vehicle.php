<?php
include '../funsi/db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];
    $make = $_POST['make'];
    $model = $_POST['model'];
    $year = $_POST['year'];
    $plate_number = $_POST['plate_number'];
    $price_per_day = $_POST['price_per_day'];
    $price_per_12_hours = $_POST['price_per_12_hours'];

    $sql = "UPDATE cars SET make=?, model=?, year=?, plate_number=?, price_per_day=?, price_per_12_hours=? WHERE id=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssisddi", $make, $model, $year, $plate_number, $price_per_day, $price_per_12_hours, $id);

    if ($stmt->execute()) {
        echo "Vehicle updated successfully.";
    } else {
        echo "Error updating record: " . $stmt->error;
    }
    $stmt->close();
    $conn->close();
} else {
    $id = $_GET['id'];
    $result = $conn->query("SELECT * FROM cars WHERE id=$id");
    $car = $result->fetch_assoc();
?>
<form method="post" action="">
    <input type="hidden" name="id" value="<?php echo $car['id']; ?>">
    Make: <input type="text" name="make" value="<?php echo $car['make']; ?>"><br>
    Model: <input type="text" name="model" value="<?php echo $car['model']; ?>"><br>
    Year: <input type="text" name="year" value="<?php echo $car['year']; ?>"><br>
    Plate Number: <input type="text" name="plate_number" value="<?php echo $car['plate_number']; ?>"><br>
    Price per Day: <input type="text" name="price_per_day" value="<?php echo $car['price_per_day']; ?>"><br>
    Price per 12 Hours: <input type="text" name="price_per_12_hours" value="<?php echo $car['price_per_12_hours']; ?>"><br>
    <input type="submit" value="Update Vehicle">
</form>
<?php
}
?>
