<?php
require_once '../model/db.php';
header('Content-Type: application/json');

$db = new db(); 

$action = $_POST['action'] ?? '';
if ($action === 'search') {
    $contact = $_POST['contact'] ?? '';
    $result = $db->searchEmployeeByContact($contact);

    if ($result && $result->num_rows > 0) {
        $employee = $result->fetch_assoc();
        echo json_encode(['success' => true, 'employee' => $employee]);
        exit;
    } else {
        echo json_encode(['success' => false, 'message' => 'No employee found with that contact number.']);
        exit;
    }
} elseif ($action === 'update') {
    $employee_id = $_POST['employee_id'] ?? '';
    $fname = $_POST['fname'] ?? '';
    $lname = $_POST['lname'] ?? '';
    $email = $_POST['email'] ?? '';
    $section = $_POST['section'] ?? '';
    $contact = $_POST['contact'] ?? '';
    $age = $_POST['age'] ?? '';
    $gender = $_POST['gender'] ?? '';
    $address = $_POST['address'] ?? '';

    $result = $db->updateEmployee($employee_id, $fname, $lname, $age, $gender, $contact, $email, $address, $section);

    if ($result) {
        echo json_encode(['success' => true, 'message' => 'Employee updated successfully.']);
        exit; 
    } else {
        echo json_encode(['success' => false, 'message' => 'Failed to update employee.']);
        exit; 
    }
} else {
    echo json_encode(['success' => false, 'message' => 'Invalid action specified.']);
    exit; 
}

$db->closeConn();