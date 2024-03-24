<?php
require_once '../model/db.php'; 

$db = new db();
$conn = $db->openConn();

$result = $db->getAllAdmins($conn);

$db->closeConn($conn); 
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>List of Admins</title>
</head>

<body>
    <h2>List of Admins</h2>
    <?php if ($result && $result->num_rows > 0): ?>
    <table border="1">
        <thead>
            <tr>
                <th>Admin ID</th>
                <th>Username</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($row = $result->fetch_assoc()): ?>
            <tr>
                <td><?php echo htmlspecialchars($row['adminid']); ?></td>
                <td><?php echo htmlspecialchars($row['uname']); ?></td>
                <td><?php echo htmlspecialchars($row['email']); ?></td>
            </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
    <?php else: ?>
    <p>No admin records found.</p>
    <?php endif; ?>
</body>

</html>