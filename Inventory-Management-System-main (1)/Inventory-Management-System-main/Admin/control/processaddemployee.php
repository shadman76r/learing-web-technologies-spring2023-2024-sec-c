<?php
session_start();
require_once '../model/db.php'; 

$db = new db();

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $fname = trim($_POST['fname']);
    $lname = trim($_POST['lname']);
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $contact = trim($_POST['contact']);
    $email = trim($_POST['email']);
    $address = trim($_POST['address']);
    $section = $_POST['section'];

    if ($age < 18) {
        $_SESSION['error_message'] = 'Age must be at least 18.';
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $_SESSION['error_message'] = 'Invalid email format.';
    } elseif (strlen($contact) != 11) {
        $_SESSION['error_message'] = 'Contact must be 11 digits.';
    } elseif ($db->contactExists($contact)) {
        $_SESSION['error_message'] = 'Duplicate contact number.';
    } else {
        $result = $db->addEmployee($conn, $fname, $lname, $age, $gender, $email, $contact, $address, $section);
        if ($result) {
            $_SESSION['success_message'] = 'Employee added successfully!';
        } else {
            $_SESSION['error_message'] = 'There was a problem adding the employee.';
        }
    }

    header("Location: ../view/addemployee.php");
    exit();
}

$db->closeConn();
?>