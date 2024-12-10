<?php
include '../funsi/db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];
    $available = $_POST['available'];

    $sql = "UPDATE cars SET available=? WHERE id=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ii", $available, $id);

    if ($stmt->execute()) {
        echo "Vehicle availability updated successfully.";
    } else {
        echo "Error updating availability: " . $stmt->error;
    }
    $stmt->close();
    $conn->close();
}
?>

<form method="post" action="">
    ID: <input type="text" name="id"><br>
    Available: <input type="text" name="available"><br>
    <input type="submit" value="Update Availability">
</form>
