<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Edit Employee</title>
</head>

<body>
    <h2>Edit Employee</h2>
    <form action="../control/updateemployee.php" method="post">
        <table>
            <tr>
                <td><label for="fname">First Name:</label></td>
                <td><input type="text" id="fname" name="fname" value="<?php echo $_GET['fname']; ?>"></td>
            </tr>
            <tr>
                <td><label for="lname">Last Name:</label></td>
                <td><input type="text" id="lname" name="lname" value="<?php echo $_GET['lname']; ?>"></td>
            </tr>
            <tr>
                <td><label for="age">Age:</label></td>
                <td><input type="number" id="age" name="age" value="<?php echo $_GET['age']; ?>"></td>
            </tr>
            <tr>
                <td>Gender:</td>
                <td>
                    <input type="radio" id="gender_male" name="gender" value="Male"
                        <?php echo $_GET['gender'] == 'Male' ? 'checked' : ''; ?>>
                    <label for="gender_male">Male</label>
                    <input type="radio" id="gender_female" name="gender" value="Female"
                        <?php echo $_GET['gender'] == 'Female' ? 'checked' : ''; ?>>
                    <label for="gender_female">Female</label>
                    <input type="radio" id="gender_other" name="gender" value="Other"
                        <?php echo $_GET['gender'] == 'Other' ? 'checked' : ''; ?>>
                    <label for="gender_other">Other</label>
                </td>
            </tr>
            <tr>
                <td><label for="email">Email:</label></td>
                <td><input type="text" id="email" name="email" value="<?php echo $_GET['email']; ?>"></td>
            </tr>
            <tr>
                <td><label for="contact">Contact Info:</label></td>
                <td><input type="text" id="contact" name="contact" value="<?php echo $_GET['contact']; ?>"></td>
            </tr>
            <tr>
                <td><label for="address">Address:</label></td>
                <td><input type="text" id="address" name="address" value="<?php echo $_GET['address']; ?>"></td>
            </tr>
            <tr>
                <td><label for="section">Department:</label></td>
                <td>
                    <select id="section" name="section">
                        <option value="Logistics" <?php echo $_GET['section'] == 'Logistics' ? 'selected' : ''; ?>>
                            Logistics</option>
                        <option value="Customer Support"
                            <?php echo $_GET['section'] == 'Customer Support' ? 'selected' : ''; ?>>Customer Support
                        </option>
                        <!-- Add more options as needed -->
                    </select>
                </td>
            </tr>
            <tr>
                <td colspan="2" style="text-align: center;">
                    <input type="hidden" name="employee_id" value="<?php echo $_GET['employee_id']; ?>">
                    <input type="submit" value="Update Employee">
                </td>
            </tr>
        </table>
    </form>
    <button onclick="window.location.href='employeemanagement.php';">Back to Employee Management</button>
</body>

</html>