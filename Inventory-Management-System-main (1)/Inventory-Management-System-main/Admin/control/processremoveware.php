<?php
require_once '../model/db.php';

$db = new db();

$action = $_GET['action'] ?? '';

if ($action == 'list') {
    header('Content-Type: application/json');
    $result = $db->getWarehouseIdAndLocation($conn);
    echo json_encode($result->fetch_all(MYSQLI_ASSOC));
} elseif ($action == 'delete' && isset($_GET['warehouse_id'])) {
    header('Content-Type: application/json');
    $warehouseId = $_GET['warehouse_id'];
    $success = $db->deleteWarehouse($conn, $warehouseId);
    echo json_encode(['success' => $success]);
}

$db->closeConn();
?>