<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Add Admin</title>
    <link rel="stylesheet" href="../css/addadmin.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js"></script>
</head>

<body>
    <div class="form-container">

        <form id="addAdminForm" action="../control/processaddadmin.php" method="post">
            <label for="uname">Username:</label>
            <input type="text" id="uname" name="uname" required>
            <span id="unameError" class="error-message"></span>

            <label for="pass">Password:</label>
            <input type="password" id="pass" name="pass" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            <span id="emailError" class="error-message"></span>

            <input type="submit" value="Proceed">
            <input type="reset" value="Reset">
            <button type="button" onclick="window.location.href='adminmanagement.php'">Back</button>
        </form>
        <div id="successMessage" class="alert alert-success" style="display:none;">
            Admin added successfully!
        </div>
    </div>
    <script>
    $(document).ready(function() {
        if ($.cookie('admin_added')) {

            $('#successMessage').show();

            $.removeCookie('admin_added', {
                path: '/'
            });
        }
    });
    </script>
    <script src="../js/addadmin.js"></script>
</body>

</html>