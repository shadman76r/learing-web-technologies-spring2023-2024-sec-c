<?php
    session_start();

    require_once '../models/productModel.php';

    if (!isset($_SESSION['opencrowd_cur_session']) && $_SESSION['cur_session_role'] === 'admin') {
        header('location: ../views/error.php?err=Error(user manager): Please login as admin to manage users');
    }

    $products = getAllProduct();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Manager | OpenCrowd</title>
    <link rel="stylesheet" href="../assets/css/style.css">
    <style>
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
            padding: 5px;
        }
    </style>
</head>
<body>
    <?php include_once('nav.php'); ?>

    <div style="margin: auto; width: 50%;">
    <h2>Manage Products</h2>
    <table>
        <tr>
            <th>Name</th>
            <th>Description</th>
            <th>Votes</th>
            <th>Launch Date</th>
            <th colspan=2>Action</th>
        </tr>
        <?php foreach ($products as $product) { ?>
            <tr>
                <td><?= $product['name'] ?></td>
                <td><?= $product['description'] ?></td>
                <td><?= $product['votes'] ?></td>
                <td><?= $product['launch_date'] ?></td>
                <td><a href="edit_product.php?username=<?= $product['name'] ?>">Edit</a></td>
                <td><a href="../controllers/delete_product.php?username=<?= $product['name'] ?>">Delete</a></td>
            </tr>
        <?php } ?>
    </table>
    </div>
</body>
</html>
