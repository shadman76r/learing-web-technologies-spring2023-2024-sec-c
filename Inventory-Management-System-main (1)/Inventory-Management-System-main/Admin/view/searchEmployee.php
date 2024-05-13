<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Search Employee</title>
    <link rel="stylesheet" href="../css/searchEmployee.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body>
    <div class="search-container">
        <h2>Search Employee by Contact Number</h2>
        <form id="searchForm">
            <input type="text" id="contactInput" name="contact" placeholder="Enter contact number" required>
            <input type="submit" value="Search">
            <button onclick="window.location.href='employeemanagement.php';">Back</button>
        </form>
        <div id="searchResults">
            <table id="resultsTable" style="display:none;">
                <thead>
                    <tr>
                        <th>Employee ID</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Age</th>
                        <th>Gender</th>
                        <th>Contact</th>
                        <th>Email</th>
                        <th>Address</th>
                        <th>Section</th>
                    </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
        </div>
    </div>
    <script src="../js/searchEmployee.js"></script>
</body>

</html>