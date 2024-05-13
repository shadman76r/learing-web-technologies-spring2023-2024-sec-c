<?php
require_once '../model/db.php';

$db = new db();


$action = $_GET['action'] ?? '';

if ($action == 'list') {
    header('Content-Type: application/json');
    $result = $db->getAdminIdAndUname($conn);
    echo json_encode($result->fetch_all(MYSQLI_ASSOC));
} elseif ($action == 'delete' && isset($_GET['admin_id'])) {
    header('Content-Type: application/json');
    $adminId = $_GET['admin_id'];
    $success = $db->deleteAdmin($conn, $adminId);
    echo json_encode(['success' => $success]);
}

$db->closeConn();
?>