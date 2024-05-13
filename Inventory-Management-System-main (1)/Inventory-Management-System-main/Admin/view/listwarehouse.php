<?php
require_once '../control/processlistwarehouses.php'; 
$warehouseData = getWarehouseData();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>List of Warehouses</title>
    <link rel="stylesheet" href="../css/listwarehouse.css">
</head>

<body>
    <div class="container">
        <h2>List of Warehouses</h2>
        <?php if ($warehouseData && $warehouseData->num_rows > 0): ?>
        <table>
            <thead>
                <tr>
                    <th>Warehouse ID</th>
                    <th>Location</th>
                    <th>Full Location</th>
                    <th>Capacity</th>
                    <th>Number of Employees</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = $warehouseData->fetch_assoc()): ?>
                <tr>
                    <td><?php echo htmlspecialchars($row['warehouse_id']); ?></td>
                    <td><?php echo htmlspecialchars($row['location']); ?></td>
                    <td><?php echo htmlspecialchars($row['full_location']); ?></td>
                    <td><?php echo htmlspecialchars($row['capacity']); ?></td>
                    <td><?php echo htmlspecialchars($row['no_of_employee']); ?></td>
                </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
        <?php else: ?>
        <p>No warehouse records found.</p>
        <?php endif; ?>
        <button onclick="window.location.href='warehousemanagement.php';">Back</button>
    </div>
</body>

</html>