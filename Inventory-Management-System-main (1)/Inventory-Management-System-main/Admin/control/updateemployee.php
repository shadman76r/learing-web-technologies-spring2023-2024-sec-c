<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

require_once '../model/db.php';

$db = new db();
$conn = $db->openConn();

$employee_id = $_POST['employee_id'];
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$section = $_POST['section'];
$contact = $_POST['contact'];
$age = $_POST['age'];
$gender = $_POST['gender'];
$address = $_POST['address'];

if (empty($employee_id) || empty($fname) || empty($lname) || empty($email) || empty($section) || empty($contact) || empty($age) || empty($gender) || empty($address)) {
    header("Location: ../view/editemployee.php?error=Missing required information&employee_id=$employee_id");
    exit();
}

$updateResult = $db->updateEmployee($conn, $employee_id, $fname, $lname, $email, $section, $contact, $age, $gender, $address);

if ($updateResult) {
    echo "Employee updated successfully.";
} else {
    echo "Error updating the employee.";
}

$db->closeConn($conn);
?>