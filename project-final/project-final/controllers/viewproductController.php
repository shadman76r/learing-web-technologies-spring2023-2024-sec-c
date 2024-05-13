<?php
require_once '../model/userModel.php';
require_once '../models/productModel.php';

$category = isset($_GET['category']) ? $_GET['category'] : null;

$products = getProductByCategory($category);

if (!empty($products) && isset($products['prod_owner'])) {
    $ownerId = $products['prod_owner'];
    $owner = getProductOwner($ownerId);
} else {
    $owner = null;
}

?>
