<?php
require_once '../model/db.php';

$db = new db();

$action = $_GET['action'] ?? '';

if ($action == 'list') {
    header('Content-Type: application/json');
    $result = $db->getEmployeeIdAndContact($conn);
    echo json_encode($result->fetch_all(MYSQLI_ASSOC));
} elseif ($action == 'delete' && isset($_GET['employee_id'])) {
    header('Content-Type: application/json');
    $employeeId = $_GET['employee_id'];
    $success = $db->deleteEmployee($conn, $employeeId);
    echo json_encode(['success' => $success]);
}

$db->closeConn();
?>