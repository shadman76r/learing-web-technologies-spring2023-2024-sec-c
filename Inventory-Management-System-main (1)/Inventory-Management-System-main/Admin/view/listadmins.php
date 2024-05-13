<?php
require_once '../control/processlistadmins.php';
$adminsData = fetchAllAdmins();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>List of Admins</title>
    <link rel="stylesheet" href="../css/listadmin.css">
</head>

<body>
    <div class="container">
        <h2>List of Admins</h2>
        <?php if ($adminsData && $adminsData->num_rows > 0): ?>
        <table>
            <thead>
                <tr>
                    <th>Admin ID</th>
                    <th>Username</th>
                    <th>Email</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = $adminsData->fetch_assoc()): ?>
                <tr>
                    <td><?php echo htmlspecialchars($row['admin_id']); ?></td>
                    <td><?php echo htmlspecialchars($row['uname']); ?></td>
                    <td><?php echo htmlspecialchars($row['email']); ?></td>
                </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
        <?php else: ?>
        <p>No admin records found.</p>
        <?php endif; ?>
        <button onclick="window.location.href='adminmanagement.php';">Back</button>
    </div>
</body>

</html>