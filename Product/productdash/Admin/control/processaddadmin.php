<?php
require_once '../model/db.php'; // Adjust the path as necessary

$db = new db();
$conn = $db->openConn();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $uname = $_POST['uname'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $errors = [];

    // Validate email
    if (strpos($email, '@') === false) {
        $errors['email_error'] = "Invalid email format.";
    }

    // Validate password
    if (!preg_match('/[0-9]/', $pass) || !preg_match('/[\W]/', $pass)) {
        $errors['password_error'] = "Password must contain a number and a special character.";
    }

    // Check for existing username
    $result = $db->searchAdmin($conn, $uname);
    if ($result && $result->num_rows > 0) {
        $errors['username_error'] = "Username already exists.";
    }

    // Redirect back with error messages if there are any errors
    if (!empty($errors)) {
        $query = http_build_query($errors);
        header("Location: addadmin.php?$query");
        exit;
    }

    // If validation passes, add admin
    if ($db->addAdmin($conn, $uname, $pass, $email)) {
        echo "New admin added successfully.";
    } else {
        echo "Error adding admin.";
    }
    
    $db->closeConn($conn);
} else {
    echo "Invalid request method.";
}
?>