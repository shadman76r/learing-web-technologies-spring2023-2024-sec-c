<?php
require_once '../control/processlistemployee.php';
$employeeData = fetchAllEmployees();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>List of Employees</title>
    <link rel="stylesheet" href="../css/listemployee.css">
</head>

<body>
    <div class="container">
        <h2>List of Employees</h2>
        <?php if ($employeeData && $employeeData->num_rows > 0): ?>
        <table class="employee-table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Age</th>
                    <th>Gender</th>
                    <th>Email</th>
                    <th>Contact</th>
                    <th>Address</th>
                    <th>Section</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = $employeeData->fetch_assoc()): ?>
                <tr>
                    <td><?php echo htmlspecialchars($row['employee_id']); ?></td>
                    <td><?php echo htmlspecialchars($row['fname']); ?></td>
                    <td><?php echo htmlspecialchars($row['lname']); ?></td>
                    <td><?php echo htmlspecialchars($row['age']); ?></td>
                    <td><?php echo htmlspecialchars($row['gender']); ?></td>
                    <td><?php echo htmlspecialchars($row['email']); ?></td>
                    <td><?php echo htmlspecialchars($row['contact']); ?></td>
                    <td><?php echo htmlspecialchars($row['address']); ?></td>
                    <td><?php echo htmlspecialchars($row['section']); ?></td>
                </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
        <?php else: ?>
        <p>No employee records found.</p>
        <?php endif; ?>
        <button onclick="window.location.href='employeemanagement.php';">Back</button>
    </div>
</body>

</html>