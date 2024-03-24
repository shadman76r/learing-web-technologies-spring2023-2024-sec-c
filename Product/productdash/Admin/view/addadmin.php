<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Add Admin</title>
</head>

<body>
    <h2>Add Admin</h2>
    <form action="../control/processaddadmin.php" method="post">
        <table>
            <tr>
                <td><label for="uname">Username:</label></td>
                <td>
                    <input type="text" id="uname" name="uname">
                    <?php echo isset($_POST['username_error']) ? "<div>" . $_POST['username_error'] . "</div>" : ''; ?>
                </td>
            </tr>
            <tr>
                <td><label for="email">Email:</label></td>
                <td>
                    <input type="text" id="email" name="email">
                    <?php echo isset($_POST['email_error']) ? "<div>" . $_POST['email_error'] . "</div>" : ''; ?>
                </td>
            </tr>
            <tr>
                <td><label for="pass">Password:</label></td>
                <td>
                    <input type="password" id="pass" name="pass">
                    <?php echo isset($_POST['password_error']) ? "<div>" . $_POST['password_error'] . "</div>" : ''; ?>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <input type="submit" value="Add Admin">
                    <input type="reset" value="Clear">
                    <button type="button" onclick="window.location.href='adminmanagement.php';">Back</button>
                </td>
            </tr>
        </table>
    </form>
</body>

</html>