<div class="header">
  <div class="container">
    <div class="logo"><a href="./home.php">OpenCrowd</a></div>
    <div class="nav">
      <a href="./leaderboard.php">Leaderboard</a>
      <a href="./products.php">Products</a>
      <a href="./category.php">Category</a>
      <a href="./discussion.php">Discussion</a>
    </div>
    
    <?php if (isset($_SESSION['opencrowd_cur_session']) || isset($_COOKIE['opencrowd_cur_user_cookie'])) { ?>
        <div class="nav">
            <a style="padding: 8px;" href="dashboard.php"><?= isset($_SESSION['opencrowd_cur_session']) ? $_SESSION['opencrowd_cur_session'] : $_COOKIE['opencrowd_cur_user_cookie'] ?></a>
            <a style="padding: 8px;" href="../controllers/logout.php">Logout</a>
        </div>
    <?php } else { ?>
        <a href="./login.php" class="btn">Login</a>
    <?php } ?>
  </div>
</div>
