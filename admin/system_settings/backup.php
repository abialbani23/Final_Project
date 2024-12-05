<?php
include '../funsi/db.php';

// Fungsi untuk membuat backup database
function backupDatabase($conn, $backupFilePath) {
    $tables = [];
    $sql = "SHOW TABLES";
    $result = $conn->query($sql);
    while ($row = $result->fetch_row()) {
        $tables[] = $row[0];
    }

    $backupSQL = "";
    foreach ($tables as $table) {
        $result = $conn->query("SELECT * FROM $table");
        $numFields = $result->field_count;

        $backupSQL .= "DROP TABLE IF EXISTS $table;";
        $createTableResult = $conn->query("SHOW CREATE TABLE $table");
        $createTableRow = $createTableResult->fetch_row();
        $backupSQL .= "\n\n" . $createTableRow[1] . ";\n\n";

        while ($row = $result->fetch_row()) {
            $backupSQL .= "INSERT INTO $table VALUES(";
            for ($i = 0; $i < $numFields; $i++) {
                $row[$i] = addslashes($row[$i]);
                $backupSQL .= '"' . $row[$i] . '"';
                if ($i < ($numFields - 1)) {
                    $backupSQL .= ',';
                }
            }
            $backupSQL .= ");\n";
        }
        $backupSQL .= "\n\n\n";
    }

    file_put_contents($backupFilePath, $backupSQL);
    echo "Database backup created successfully.";
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $backupFilePath = 'db_backup_' . date("Y-m-d_H-i-s") . '.sql';
    backupDatabase($conn, $backupFilePath);
}

$conn->close();
?>

<form method="post" action="">
    <input type="submit" value="Backup Database">
</form>
