<?php
    session_start();

    require_once '../models/productModel.php';

    $products = getAllProduct();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product | OpenCrowd</title>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<style>
    table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
th, td {
  padding: 15px;
}
</style>
<body>
    <?php include_once('nav.php'); ?>
    
    <div class="">
        <div class="content">
        <div style="margin: auto; width: 50%;">
        <h2 style="text-align: center;">Products Dashboard</h2> <br>
        <table>
            <tbody>
                <?php foreach ($products as $index => $product) { ?>
                    <tr>
                        <td>
                            <img src="<?= $product['img'] ?>" alt="<?= $product['name'] ?>" style="width: 180px; height: 130px; object-fit: cover;">
                        </td>
                        <td class="nav" style="padding: 10px;">
                            <a href="productView.php?index=<?=$index?>"><?= $product['name'] ?></a><br> <br>
                            <p>[Launch Date: <?= $product['launch_date'] ?>] [Published By: <?= $product['published_by'] ?>]</p>
                            <p><?= $product['description'] ?></p>
                        </td>
                        <td>
                            <div>
                                <form method="post" action="">
                                    <input type="hidden" name="index" value="<?= $index ?>">
                                    <button type="submit" name="upvote">👍🏼 <?=$product['votes']?></button>
                                </form>
                            </div>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
        </div>
    </div>
    <?php include_once('footer.php'); ?>
</body>
</html>