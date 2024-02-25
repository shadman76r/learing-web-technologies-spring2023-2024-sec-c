<?php 
    session_start();
    $Home  =  $_REQUEST['Home'];
    $Login  =  $_REQUEST['Login'];
    $Register = $_REQUEST['Register'];

    if($Home == "" || $Login == "" || $Register==""){
        echo "null username or password!";
    }else if ($Home == $Login){
        $_SESSION['flag'] = "true";
        $_SESSION['username'] = $username;
        header('location: home.php');
    }else{
        echo "invalid user!";
    }
?>