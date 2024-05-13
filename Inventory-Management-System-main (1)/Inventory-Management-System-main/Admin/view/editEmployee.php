<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Edit Employee</title>
    <link rel="stylesheet" href="../css/editEmployee.css">
</head>

<body>
    <div>
        <form id="searchEmployeeForm">
            <input type="text" id="contactSearch" name="contact" placeholder="Enter Contact Number" required>
            <input type="submit" value="Search">
        </form>
    </div>
    <div id="editFormContainer" style="display:none;">
        <h2>Edit Employee Details</h2>
        <form id="editEmployeeForm">
            <input type="hidden" id="employee_id" name="employee_id">
            First Name: <input type="text" id="fname" name="fname"><br>
            Last Name: <input type="text" id="lname" name="lname"><br>
            Email: <input type="email" id="email" name="email"><br>
            Section: <input type="text" id="section" name="section"><br>
            Contact: <input type="text" id="contact" name="contact"><br>
            Age: <input type="number" id="age" name="age"><br>
            Gender: <input type="text" id="gender" name="gender"><br>
            Address: <input type="text" id="address" name="address"><br>
            <button type="submit">Update Employee</button>
        </form>
    </div>
    <script src="../js/editEmployee.js"></script>
</body>

</html>