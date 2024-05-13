<?php
require_once '../model/db.php';

$db = new db();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $warehouseId = $_POST['warehouse_id'];
    $fullLocation = $_POST['full_location'];
    $totalCapacity = $_POST['total_capacity'];
    $noOfEmployees = $_POST['no_of_employees'];
    $location = $_POST['location'];

    if ($totalCapacity < 100 || $noOfEmployees < 5) {
        $error = $totalCapacity < 100 ? "capacity_error" : "employee_error";
        header("Location: ../view/addwarehouse.php?error=$error");
        exit();
    } else {
        $result = $db->addWarehouse($conn, $warehouseId, $location, $fullLocation, $totalCapacity, $noOfEmployees);

        if ($result) {
            header("Location: ../view/addwarehouse.php?success=1");
        } else {
            header("Location: ../view/addwarehouse.php?error=general");
        }
        exit();
    }
}