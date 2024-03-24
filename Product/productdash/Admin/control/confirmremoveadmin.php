<?php
require_once '../model/db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST['uname'])) {
    $uname = $_POST['uname'];

    $db = new db();
    $conn = $db->openConn();

    // Attempt to find the admin by username
    $result = $db->searchAdmin($conn, $uname);

    if ($result->num_rows > 0) {
        // Admin found, display confirmation form
        $admin = $result->fetch_assoc();
        echo "<h2>Confirm Removal of Admin</h2>";
        echo "<p>Are you sure you want to remove the following admin?</p>";
        echo "<p>Username: " . htmlspecialchars($admin['uname']) . "</p>";
        echo "<p>Email: " . htmlspecialchars($admin['email']) . "</p>";

        // Confirmation form
        echo "<form action='deleteremoveadmin.php' method='post'>";
        echo "<input type='hidden' name='uname' value='" . htmlspecialchars($admin['uname']) . "'>";
        echo "<input type='submit' value='Confirm Removal'>";
        echo "</form>";
    } else {
        echo "<p>No admin found with the username: " . htmlspecialchars($uname) . "</p>";
    }

    $db->closeConn($conn);
} else {
    echo "Invalid request method.";

}
?>