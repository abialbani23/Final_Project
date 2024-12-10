<?php
include '../funsi/db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];
    $role = $_POST['role'];

    $sql = "UPDATE users SET role=? WHERE id=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("si", $role, $id);

    if ($stmt->execute()) {
        echo "Role updated successfully.";
    } else {
        echo "Error updating role: " . $stmt->error;
    }
    $stmt->close();
    $conn->close();
} else {
    $result = $conn->query("SELECT id, name, role FROM users");
?>
<form method="post" action="">
    User: <select name="id">
        <?php while ($row = $result->fetch_assoc()) { ?>
            <option value="<?php echo $row['id']; ?>"><?php echo $row['name']; ?> (Current Role: <?php echo $row['role']; ?>)</option>
        <?php } ?>
    </select><br>
    Role: <select name="role">
        <option value="user">User</option>
        <option value="admin">Admin</option>
    </select><br>
    <input type="submit" value="Update Role">
</form>
<?php
}
?>
