<?php
session_start();
require_once '../model/db.php';

$db = new db();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $uname = $_POST['uname'];
    $pass = password_hash($_POST['pass'], PASSWORD_DEFAULT); 
    $email = $_POST['email'];

    $userCheck = $db->query("SELECT uname FROM admin WHERE uname = '$uname'");
    if ($userCheck->num_rows > 0) {

        $_SESSION['error_message'] = 'Duplicate username.';
        header("Location: ../view/addadmin.php");
        exit();
    }

    $result = $db->addAdmin($conn, $uname, $pass, $email);
    if ($result) {
        setcookie('admin_added', 'true', time() + 10, '/');
        $_SESSION['success_message'] = 'Admin added successfully!';
    } else {
        $_SESSION['error_message'] = 'There was a problem adding the admin.';
    }
    $db->closeConn($conn);
    header("Location: ../view/addadmin.php");
    exit();
}
?>