<?php 
$firstName = $_POST["firstName"];
$lastname = $_POST["lastName"];
 
$firstnamecheck=true;
$lastnamecheck=true;
 
function isfirstValidName($firstName) {
    global $firstnamecheck;
 
    $validChars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ.- ';
 
for ($i = 0; $i < strlen($firstName); $i++) {
if (strpos($validChars, $firstName[$i]) === false) {
    $firstnamecheck=false;
}
}
if(strlen($firstName)<2){
    $firstnamecheck=false;
}
 
}
 
function islastValidName($lastname) {
    global $lastnamecheck;
 
    $validChars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ.- ';
 
for ($i = 0; $i < strlen($lastname); $i++) {
if (strpos($validChars, $lastname[$i]) === false) {
    $lastnamecheck=false;
}
}
 
if(strlen($lastname)<2){
    $lastnamecheck=false;
}
 
}  
 
if($firstnamecheck && $lastnamecheck){
    session_start();
    $_SESSION['firstname']=$firstName;
    $_SESSION['lastname']=$lastname;
    header("Location:topic-1.php");
}
else{
    header("Location:topic-1.php");
}
?>