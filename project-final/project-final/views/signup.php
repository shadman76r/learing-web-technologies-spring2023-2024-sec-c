<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sign Up | OpenCrowd</title>
  <link rel="stylesheet" href="../assets/css/style.css">
</head>

<body>
  <?php include_once('nav.php'); ?>
  <div class="container-body">
    <div class="content">
      <form style="margin: auto; width: 50%;" method="post" action="" enctype="multipart/form-data">
        <legend>Sign Up</legend>
        <label>Name</label> <br> <input type="text" id="name" name="name" placeholder="Full Name">
        <label>Email</label> <br> <input type="email" id="email" name="email" placeholder="username@example.com">
        <label>Username</label> <br> <input type="text" id="username" name="username" placeholder="Username"> <br>
        <label>Password</label> <br> <input type="password" id="password" name="password" placeholder="Password"> <br>
        <label>Confirm Password</label> <br> <input type="password" id="conf-password" name="conf-password" placeholder="Confirm Password"> <br>
        <label>Org</label> <br> <input type="text" id="org" name="org" placeholder="Your organization name"> <br>
        <label>Role</label> <select id="role" name="role">
          <option value="Developer">Developer</option>
          <option value="Investor">Investor</option>
          <option value="Contributor">Contributor</option>
          <option value="Student">Student</option>
        </select> <br>

        <label>Gender</label>
        <fieldset>
          <input type="radio" id="male" name="gender" value="male" />
          <label for="male">Male</label>
          <input type="radio" id="female" name="gender" value="female" />
          <label for="female">Female</label>
          <input type="radio" id="other" name="gender" value="other" />
          <label for="other">Other</label> <br>
        </fieldset>


        <label>Date of Birth</label> <br> <input type="date" id="dob" name="dob" required />

        <label>User Type</label>
        <fieldset>
          <input type="radio" id="admin" name="user-type" value="admin" />
          <label for="admin">Admin</label>
          <input type="radio" id="user" name="user-type" value="user" />
          <label for="user">User</label>
        </fieldset>
        <br>
        <input class="btn" type="submit" name="submit" value="Sign Up" onclick="ajax()">
        <input class="btn" type="reset" name="reset">
      </form>
    </div>
  </div>
  <?php include './footer.php' ?>
  <script src="../assets/js/script.js"></script>
</body>

</html>
