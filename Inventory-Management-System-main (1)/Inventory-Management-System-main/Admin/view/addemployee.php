<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Add Employee</title>
    <link rel="stylesheet" href="../css/addemployee.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body>
    <?php session_start(); ?>
    <div class="form-container">
        <h2>Add Employee</h2>
        <?php
        if (isset($_SESSION['success_message'])) {
            echo "<div class='success-message'>" . $_SESSION['success_message'] . "</div>";
            unset($_SESSION['success_message']);
        }
        
        if (isset($_SESSION['error_message'])) {
            echo "<div class='error-message'>" . $_SESSION['error_message'] . "</div>";
            unset($_SESSION['error_message']);
        }
        ?>
        <form id="addEmployeeForm" action="../control/processaddemployee.php" method="post">
            <label for="fname">First Name:</label>
            <input type="text" id="fname" name="fname" required>
            <label for="lname">Last Name:</label>
            <input type="text" id="lname" name="lname" required>
            <label for="age">Age:</label>
            <input type="number" id="age" name="age" required>
            <div class="gender-selection">
                <span>Gender:</span>
                <label for="gender_male"><input type="radio" id="gender_male" name="gender" value="Male" required>
                    Male</label>
                <label for="gender_female"><input type="radio" id="gender_female" name="gender" value="Female" required>
                    Female</label>
                <label for="gender_other"><input type="radio" id="gender_other" name="gender" value="Other" required>
                    Other</label>
            </div>
            <label for="contact">Contact:</label>
            <input type="text" id="contact" name="contact" required>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            <label for="address">Address:</label>
            <input type="text" id="address" name="address" required>
            <label for="section">Section:</label>
            <select id="section" name="section" required>
                <option value="Logistics">Logistics</option>
                <option value="Customer Support">Customer Support</option>
                <option value="Finance">Finance</option>
                <option value="Others">Others</option>
            </select>
            <div class="form-actions">
                <input type="submit" value="Add Employee">
                <input type="reset" value="Reset">
                <button type="button" onclick="window.location.href='employeemanagement.php';">Back</button>
            </div>
        </form>
    </div>
    <script src="../js/addemployee.js"></script>
</body>

</html>