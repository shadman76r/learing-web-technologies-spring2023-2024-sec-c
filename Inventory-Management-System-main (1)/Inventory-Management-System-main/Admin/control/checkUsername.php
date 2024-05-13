<?php
require_once '../model/db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['uname'])) {
    $uname = $_POST['uname'];

    $db = new db();
    $conn = $db->openConn();
    
    $stmt = $conn->prepare("SELECT uname FROM admin WHERE uname = ?");
    $stmt->bind_param("s", $uname);
    $stmt->execute();
    $result = $stmt->get_result();
    $db->closeConn($conn);

    echo $result->num_rows;
}
?>