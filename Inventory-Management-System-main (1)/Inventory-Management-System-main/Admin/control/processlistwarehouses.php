<?php
require_once '../model/db.php'; 

function getWarehouseData() {
    $db = new db();

    $result = $db->getAllWarehouse($conn);

    $db->closeConn($conn);

    return $result;
}