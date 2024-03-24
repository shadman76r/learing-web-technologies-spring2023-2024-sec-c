<?php
require_once '../model/db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST['uname'])) {
    $db = new db();
    $conn = $db->openConn();
    $uname = $_POST['uname'];

    if ($db->deleteAdmin($conn, $uname)) {
        echo "Admin successfully removed.";
    } else {
        echo "Error removing admin.";
    }

    $db->closeConn($conn);
} else {
    echo "Invalid request.";
}
?>