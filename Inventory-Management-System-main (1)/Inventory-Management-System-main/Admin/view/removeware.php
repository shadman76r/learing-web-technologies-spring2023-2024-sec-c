<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Remove Warehouse</title>
    <link rel="stylesheet" href="../css/removeware.css">
</head>

<body>
    <div class="container">
        <h2>Remove Warehouse</h2>
        <table>
            <thead>
                <tr>
                    <th>Warehouse ID</th>
                    <th>Full Location</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody id="warehouse-list">
                <!-- The list will be populated by removeware.js -->
            </tbody>
        </table>
        <button onclick="window.location.href='warehousemanagement.php';">Back</button>
    </div>
    <script src="../js/removeware.js"></script>
</body>

</html>