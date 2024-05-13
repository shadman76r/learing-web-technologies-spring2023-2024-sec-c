<?php
    session_start();
    session_destroy();
    setcookie('opencrowd_cur_user_cookie', '', time() - 60, '/');
    setcookie('cur_user_role', '', time() - 60, '/');
    header('location: ../views/login.php');
?>
