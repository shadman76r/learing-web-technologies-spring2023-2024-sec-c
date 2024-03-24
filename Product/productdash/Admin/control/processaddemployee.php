<?php
require_once '../model/db.php';

$db = new db();
$conn = $db->openConn();
$errors = [];

if (empty($_POST['fname'])) $errors['fname_error'] = "*";
if (empty($_POST['lname'])) $errors['lname_error'] = "*";
if (empty($_POST['age'])) $errors['age_error'] = "*";
if (!isset($_POST['gender'])) $errors['gender_error'] = "*";
if (empty($_POST['email']) || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) $errors['email_error'] = "Invalid email format.";
if (empty($_POST['contact']) || !preg_match('/^[0-9]{11}$/', $_POST['contact'])) $errors['contact_error'] = "Contact must be 11 digits.";
if (empty($_POST['address'])) $errors['address_error'] = "*";

if (!empty($errors)) {
    $query = http_build_query($errors);
    header("Location: ../view/addemployee.php?$query");
    exit();
}

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$age = $_POST['age'];
$gender = $_POST['gender'];
$email = $_POST['email'];
$contact = $_POST['contact'];
$address = $_POST['address'];
$section = $_POST['section'];

$result = $db->addEmployee($conn, $fname, $lname, $age, $gender, $email, $contact, $address, $section);

if ($result) {
    echo "New employee added successfully.";
} else {
    echo "Error adding the employee.";
}

$db->closeConn($conn);
?>