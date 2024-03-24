<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Search Employee</title>
</head>

<body>
    <h2>Search Employee</h2>
    <form action="../control/handlesearchemployee.php" method="post">
        <label for="searchBy">Search By:</label>
        <select name="searchBy" id="searchBy">
            <option value="contact">Phone Number</option>
            <option value="employee_id">Employee ID</option>
        </select>
        <input type="text" name="searchValue" required>
        <input type="submit" value="Search">
    </form>
    <button onclick="window.location.href='employeemanagement.php';">Back</button>
</body>

</html>