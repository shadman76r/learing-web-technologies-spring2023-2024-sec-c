<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Add Employee</title>
</head>

<body>
    <h2>Add Employee</h2>
    <form action="../control/processaddemployee.php" method="post">
        <table>
            <tr>
                <td><label for="fname">First Name:</label></td>
                <td>
                    <input type="text" id="fname" name="fname">
                    <?php echo isset($_GET['fname_error']) ? $_GET['fname_error'] : ''; ?>
                </td>
            </tr>
            <tr>
                <td><label for="lname">Last Name:</label></td>
                <td>
                    <input type="text" id="lname" name="lname">
                    <?php echo isset($_GET['lname_error']) ? $_GET['lname_error'] : ''; ?>
                </td>
            </tr>
            <tr>
                <td><label for="age">Age:</label></td>
                <td>
                    <input type="number" id="age" name="age">
                    <?php echo isset($_GET['age_error']) ? $_GET['age_error'] : ''; ?>
                </td>
            </tr>
            <tr>
                <td>Gender:</td>
                <td>
                    <input type="radio" id="gender_male" name="gender" value="Male"> <label
                        for="gender_male">Male</label>
                    <input type="radio" id="gender_female" name="gender" value="Female"> <label
                        for="gender_female">Female</label>
                    <input type="radio" id="gender_other" name="gender" value="Other"> <label
                        for="gender_other">Other</label>
                    <?php echo isset($_GET['gender_error']) ? $_GET['gender_error'] : ''; ?>
                </td>
            </tr>
            <tr>
                <td><label for="contact">Contact Info:</label></td>
                <td>
                    <input type="text" id="contact" name="contact">
                    <?php echo isset($_GET['contact_error']) ? $_GET['contact_error'] : ''; ?>
                </td>
            </tr>
            <tr>
                <td><label for="email">Email:</label></td>
                <td>
                    <input type="text" id="email" name="email">
                    <?php echo isset($_GET['email_error']) ? $_GET['email_error'] : ''; ?>
                </td>
            </tr>
            <tr>
                <td><label for="address">Address:</label></td>
                <td>
                    <input type="text" id="address" name="address">
                    <?php echo isset($_GET['address_error']) ? $_GET['address_error'] : ''; ?>
                </td>
            </tr>
            <tr>
                <td><label for="section">Department:</label></td>
                <td>
                    <select id="section" name="section">
                        <option value="Logistics">Logistics</option>
                        <option value="Customer Support">Customer Support</option>
                        <option value="Human Resources">Human Resources</option>
                        <option value="Finance">Finance</option>
                    </select>
                </td>
            </tr>
            <td colspan="2" style="text-align: center;">
                <input type="submit" value="Add Employee">
                <input type="reset" value="Clear">
                <button type="button" onclick="window.location.href='employeemanagement.php';">Back</button>
            </td>
        </table>
    </form>
</body>

</html>