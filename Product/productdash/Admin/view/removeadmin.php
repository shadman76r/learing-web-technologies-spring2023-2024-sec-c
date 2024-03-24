<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Remove Admin</title>
</head>

<body>
    <h2>Remove Admin</h2>
    <form action="../control/confirmremoveadmin.php" method="post">
        <label for="uname">Admin Username:</label>
        <input type="text" id="uname" name="uname">
        <input type="submit" value="Proceed">
    </form>
    <button onclick="window.location.href='adminmanagement.php';">Back</button>
</body>

</html>