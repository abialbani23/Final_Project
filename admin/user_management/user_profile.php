<?php
include '../funsi/db.php';

$id = $_GET['id'];

$sql = "SELECT * FROM users WHERE id=?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $id);
$stmt->execute();
$result = $stmt->get_result();
$user = $result->fetch_assoc();

if ($user) {
    echo "ID: " . $user["id"]. "<br>";
    echo "Name: " . $user["name"]. "<br>";
    echo "Email: " . $user["email"]. "<br>";
    echo "Role: " . $user["role"]. "<br>";
    echo "<img src='" . $user["profile_picture"] . "' alt='Profile Picture'><br>";
} else {
    echo "User not found.";
}
$stmt->close();
$conn->close();
?>
