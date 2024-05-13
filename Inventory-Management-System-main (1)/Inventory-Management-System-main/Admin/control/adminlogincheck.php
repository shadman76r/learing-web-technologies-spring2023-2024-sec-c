// ridwan ahmed arman (windows )
<?php
session_start();

require_once '../model/db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $uname = $_POST['uname'];
    $pass = $_POST['pass'];

    $db = new db();

    $result = $db->loginAdmin($uname, $pass);

    if ($result->num_rows > 0) {
        $_SESSION['uname'] = $uname;
        $db->closeConn($conn);
        header("Location: ../view/adminhome.php");
        exit();
    } else {
        $db->closeConn($conn);
        echo "<script>
                alert('Incorrect username or password, please try again.');
                window.location.href='../view/adminlogin.php';
              </script>";
        exit();
    }
} else {
    header("Location: ../view/adminlogin.php");
    exit();
}
?>