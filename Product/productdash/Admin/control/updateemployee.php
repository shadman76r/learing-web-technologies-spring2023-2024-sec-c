<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

require_once '../model/db.php';

// Instantiate database connection
$db = new db();
$conn = $db->openConn();

// Collect input data
$employee_id = $_POST['employee_id'];
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$age = $_POST['age']; // Ensure age is being handled appropriately in your form and database
$gender = $_POST['gender'];
$email = $_POST['email'];
$contact = $_POST['contact'];
$address = $_POST['address'];
$section = $_POST['section'];

// Basic validation (expand according to your needs)
if (empty($employee_id) || empty($fname) || empty($lname) || empty($email) || empty($section) || empty($contact)) {
    // Redirect back with error message
    header("Location: ../view/editemployee.php?error=Missing required information&employee_id=$employee_id");
    exit();
}

// Assuming your database table column for phone numbers is 'contact'
$updateResult = $db->updateEmployee($conn, $employee_id, $fname, $lname, $email, $section, $contact);

if ($updateResult) {
    echo "Employee updated successfully.";
    // Optionally, redirect to a confirmation page or back to the employee list
    // header("Location: ../view/employeemanagement.php");
} else {
    echo "Error updating the employee.";
    // Optionally, include a retry or back link here
}

$db->closeConn($conn);
?>