<?php
require_once '../model/db.php';

$db = new db();
$conn = $db->openConn();

$searchBy = $_POST['searchBy'];
$searchValue = $_POST['searchValue'];

// Determine search type and execute
if ($searchBy == 'phone') {
    $result = $db->searchEmployeeByPhone($conn, $searchValue);
} else {
    // Assuming you have a similar function for searching by employee_id
    $result = $db->searchEmployeeById($conn, $searchValue);
}

if ($result->num_rows > 0) {
    $employee = $result->fetch_assoc();
    // Assuming you have a form for editing employee details
    // You would populate the form fields with the $employee data
    // For simplicity, redirecting to an edit form with employee data as query parameters
    header("Location: ../view/editemployee.php?employee_id=" . $employee['employee_id'] . "&fname=" . urlencode($employee['fname']) . "&lname=" . urlencode($employee['lname']) . "&email=" . urlencode($employee['email']) . "&section=" . urlencode($employee['section']) . "&phone=" . urlencode($employee['phone']));
} else {
    echo "No employee found.";
    // Include a back link or button here
    echo "<button onclick=\"window.location.href='searchemployee.php';\">Back</button>";
}

$db->closeConn($conn);
?>