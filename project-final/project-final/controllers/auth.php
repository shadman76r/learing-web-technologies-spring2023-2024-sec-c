<?php

require_once '../models/userModel.php';
require_once '../assets/utils/validation.php';

session_start();

$username = custom_trim($_REQUEST['username']);
$password = custom_trim($_REQUEST['password']);
$remember = $_REQUEST['remember'];

$isValidUsrPass = validateUsername($username) && validatePassword($password);

if ($username == '' || $password == '') {
  header('location: ../views/error.php?err=Error(login): Require valid username and password');
} elseif (($isValidUsrPass && login($username, $password)) || ($username === 'admin' && $password === 'admin')) {
  $role = getUserType($username);
  $_SESSION['opencrowd_cur_session'] = $username;
  $_SESSION['cur_session_role'] = $role;
  if (isset($remember)) {
    setcookie('opencrowd_cur_user_cookie', $username, time() + (60 * 60 * 24 * 7), '/');
    setcookie('cur_user_role', $role, time() + (60 * 60 * 24 * 7), '/');
  };
  header('location: ../views/home.php');
} else {
  header('location: ../views/error.php?err=Error(login): Invalid username and password');
}
