<?php
include '../funsi/db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Misalkan ada beberapa pengaturan umum seperti 'site_name' dan 'admin_email'
    $site_name = $_POST['site_name'];
    $admin_email = $_POST['admin_email'];

    $sql = "UPDATE settings SET value=? WHERE name='site_name'";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $site_name);
    $stmt->execute();

    $sql = "UPDATE settings SET value=? WHERE name='admin_email'";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $admin_email);
    $stmt->execute();

    echo "General settings updated successfully.";
    $stmt->close();
    $conn->close();
} else {
    // Ambil pengaturan umum dari database
    $result = $conn->query("SELECT * FROM settings WHERE name IN ('site_name', 'admin_email')");
    $settings = [];
    while($row = $result->fetch_assoc()) {
        $settings[$row['name']] = $row['value'];
    }
?>
<form method="post" action="">
    Site Name: <input type="text" name="site_name" value="<?php echo $settings['site_name']; ?>"><br>
    Admin Email: <input type="text" name="admin_email" value="<?php echo $settings['admin_email']; ?>"><br>
    <input type="submit" value="Update Settings">
</form>
<?php
}
?>
