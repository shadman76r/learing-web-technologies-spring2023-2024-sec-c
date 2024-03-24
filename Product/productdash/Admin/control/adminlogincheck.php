<?php
session_start(); 

require_once '../model/db.php'; 

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $uname = $_POST['uname'];
    $pass = $_POST['pass'];

    $db = new db();
    $conn = $db->openConn();

    $result = $db->loginAdmin($conn, $uname, $pass);
    
    if ($result->num_rows > 0) {
        $_SESSION['uname'] = $uname; 
        
        // Set cookie to expire in 1 hour
        setcookie('admin_logged_in', 'true', time() + 3600, '/'); 
        
        $db->closeConn($conn); 
        header("Location: ../view/adminhome.php"); 
        exit();
    } else {
        $db->closeConn($conn); 
        //header("Location: ../view/adminlogin.php?error=Invalid%20Credentials"); 
        echo "Incorrect, Try again";
        exit();
    }
} else {
    header("Location: ../view/adminlogin.php");
    exit();
}
?>
