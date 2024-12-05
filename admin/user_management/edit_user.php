<?php
include '../funsi/db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];

    $sql = "UPDATE users SET name=?, email=? WHERE id=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssi", $name, $email, $id);

    if ($stmt->execute()) {
        echo "User updated successfully.";
    } else {
        echo "Error updating record: " . $stmt->error;
    }
    $stmt->close();
    $conn->close();
} else {
    $id = $_GET['id'];
    $result = $conn->query("SELECT * FROM users WHERE id=$id");
    $user = $result->fetch_assoc();
?>
<form method="post" action="">
    <input type="hidden" name="id" value="<?php echo $user['id']; ?>">
    Name: <input type="text" name="name" value="<?php echo $user['name']; ?>"><br>
    Email: <input type="text" name="email" value="<?php echo $user['email']; ?>"><br>
    <input type="submit" value="Update User">
</form>
<?php
}
?>
