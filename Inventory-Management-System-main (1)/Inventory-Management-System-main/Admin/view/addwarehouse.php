<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Add Warehouse</title>
    <link rel="stylesheet" href="../css/addwarehouse.css">
</head>

<body>
    <div class="form-container">
        <h2>Add Warehouse</h2>
        <?php
            if (isset($_GET['success'])) {
                echo "<p class='message success'>Added Successfully.</p>";
            } elseif (isset($_GET['error'])) {
                $errorMessage = $_GET['error'] == "capacity_error" ? "Capacity should be >= 100." : 
                                ($_GET['error'] == "employee_error" ? "Employee should be greater than 5." : 
                                "An error occurred while adding the warehouse.");
                echo "<p class='message error'>$errorMessage</p>";
            }
        ?>
        <form id="addWarehouseForm" method="post" action="../control/processaddwarehouse.php">
            <div class="form-group">
                <label for="warehouse_id">Warehouse ID:</label>
                <input type="text" id="warehouse_id" name="warehouse_id">
            </div>

            <div class="form-group">
                <label for="full_location">Full Location:</label>
                <textarea id="full_location" name="full_location"></textarea>
            </div>

            <div class="form-group">
                <label for="total_capacity">Total Capacity:</label>
                <input type="number" id="total_capacity" name="total_capacity">
            </div>

            <div class="form-group">
                <label for="no_of_employees">No. of Employees:</label>
                <input type="number" id="no_of_employees" name="no_of_employees">
            </div>

            <div class="form-group">
                <label for="location">Location:</label>
                <select id="location" name="location">
                    <option value="">Select Location</option>
                    <option value="Dhaka">Dhaka</option>
                    <option value="Dinajpur">Dinajpur</option>
                    <option value="Barishal">Barishal</option>
                </select>
            </div>

            <div class="buttons">
                <button type="submit">Proceed</button>
                <button type="button" onclick="window.location='../view/warehousemanagement.php';">Back</button>
            </div>
        </form>
    </div>
    <script src="../js/addwarehouse.js"></script>
</body>

</html>