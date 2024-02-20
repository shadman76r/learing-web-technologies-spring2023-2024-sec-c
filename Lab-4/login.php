<?php
$user_name = $pass = "";
$Remember_me = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user_name = $_POST["username"];
    $pass = $_POST["password"];
    $Remember_me = ($_POST["remember"] === null) ? $_POST["remember"] : "";

    if (validateUsername($user_name) && validatePassword($pass)) {
        echo "Login successful, $user_name <br>";
    } else {
        echo "Invalid username or password please check it again<br>";
    }
}

function validateUsername($user_name) {
    $isValid = true;
    $user_name = trim($user_name);
    $len = strlen($user_name);
    if ($len < 3) {
        $isValid = false;
    } else {
        for ($i = 0; $i < $len; $i++) {
            $ch = $user_name[$i];
            if (!(($ch >= 'A' && $ch <= 'Z') ||
                ($ch >= 'a' && $ch <= 'z') ||
                ($ch >= '0' && $ch <= '9') ||
                ($user_name[$i] == '.') || ($user_name[$i] == '-') || ($user_name[$i] == '_'))) {
                $isValid = false;
                break;
            }
        }
    }
    return $isValid;
}

function validatePassword($pass) {
    $isValid = true;
    $pass = trim($pass); 
    $len = strlen($pass);
    if ($len < 8) {
        $isValid = false;
    } else {
        $containsSpecialChar = false;
        for ($i = 0; $i < $len; $i++) {
            if ($pass[$i] == '@' || $pass[$i] == '#' || $pass[$i] == '$' || $pass[$i] == '%') {
                $containsSpecialChar = true;
                break;
            }
        }
        if (!$containsSpecialChar) $isValid = false;
    }
    return $isValid;
}
?>
