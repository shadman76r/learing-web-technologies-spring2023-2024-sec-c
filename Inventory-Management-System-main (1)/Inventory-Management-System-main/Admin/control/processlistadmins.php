<?php
require_once '../model/db.php';

function fetchAllAdmins() {
    $db = new db();
    $admins = $db->getAllAdmins($conn);
    $db->closeConn($conn);
    return $admins;
}