<?php
require_once '../model/db.php';
$db = new db();
$conn = $db->openConn();

if (isset($_POST['contact'])) {
    $contact = $_POST['contact'];
    echo json_encode(['exists' => $db->contactExists($conn, $contact)]);
}

$db->closeConn();
?>