<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard | OpenCrowd</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
  <link rel="stylesheet" href="../assets/css/style.css">
</head>

<body>
  <?php include_once('nav.php'); ?>

  <div class="container-body">
    <div class="content">
    <?php if ((isset($_COOKIE['cur_user_role']) && $_COOKIE['cur_user_role'] === 'admin') ||
      (isset($_SESSION['cur_session_role']) && $_SESSION['cur_session_role'] === 'admin')
    ) { ?>
      <?php include_once('adminDashboard.php') ?>
    <?php } else { ?>
      <?php include_once('userDashboard.php') ?>
    <?php } ?>
    </div>
  </div>

  <?php include_once('footer.php'); ?>
</body>
</html>
