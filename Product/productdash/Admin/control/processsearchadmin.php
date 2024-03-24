<?php
require_once '../model/db.php'; 

if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST['uname'])) {
    $uname = $_POST['uname'];

    $db = new db();
    $conn = $db->openConn();

    $result = $db->searchAdmin($conn, $uname);

    if ($result->num_rows > 0) {

        echo "<table border='1'><tr><th>Admin ID</th><th>Username</th><th>Email</th></tr>";
        while($row = $result->fetch_assoc()) {
            echo "<tr><td>" . htmlspecialchars($row['admin_id']) . "</td><td>" . htmlspecialchars($row['uname']) . "</td><td>" . htmlspecialchars($row['email']) . "</td></tr>";
        }
        echo "</table>";
    } else {
        echo "No admin found with the username: " . htmlspecialchars($uname);
    }

    $db->closeConn($conn);
} else {
    echo "Username is required.";
    header("Refresh: 2; url=searchadmin.php");
}
?>