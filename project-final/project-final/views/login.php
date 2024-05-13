<!DOCTYPE html>
<html land="en">

<head>
  <meta charset="UTF=8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../assets/css/style.css" />
  <title>Signin | OpenCrowd</title>
</head>

<body>
  <?php include './nav.php' ?>
  <div class="container-body">
    <div class="content">
      <form style="margin: auto; width: 50%;" method="POST" action="../controllers/auth.php">
        <legend>Login</legend>
        <label for="username">Username</label> <br>
        <input type="text" name="username"> <br>
        <label for="password">Password</label> <br>
        <input type="password" name="password">
        <input type="checkbox" name="remember">
        <label for="remember">Remember me for 7 days</label> <br> <br>
        <input class="btn" type="submit" name="submit">
        <a class="btn" href="forgot_password.php">Forgot Password?</a>
        <span style="font-weight: bold;">or</span>
        <a class="btn" href="signup.php">Sign Up</a>
      </form>
    </div>
  </div>
  <?php include './footer.php' ?>
</body>

</html>
