<?php
require_once '../model/db.php';
$db = new db();

header('Content-Type: application/json');

if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST['contact'])) {
    $contact = $db->escape($_POST['contact']);  
    $result = $db->searchEmployeeByContact($contact);

    if ($result && $result->num_rows > 0) {
        $employeeData = $result->fetch_assoc();
        echo json_encode(['success' => true, 'data' => $employeeData]);
    } else {
        echo json_encode(['success' => false, 'message' => 'No employee found with that contact number.']);
    }
} else {
    echo json_encode(['success' => false, 'message' => 'Invalid request.']);
}

$db->closeConn();
?>