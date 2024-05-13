<?php
require_once '../model/db.php';

function fetchAllEmployees() {
    $db = new db();
    $result = $db->getAllEmployees($conn);
    $db->closeConn($conn);
    
    return $result;
}