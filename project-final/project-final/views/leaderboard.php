<?php
    session_start();

    require_once '../models/productModel.php';

    $products = getAllProduct();

    usort($products, function($a, $b) {
        return $b['votes'] >= $a['votes'];
    });
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" >
    <title>Product Leaderboard | OpenCrowd</title>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>
    <?php include_once('nav.php'); ?>
    <div class="content">
    <div style="margin: auto; width: 50%;">
        <table>
            <tbody>
                <?php foreach ($products as $index => $product) { ?>
                    <tr>
                        <td>
                            <img src="<?= $product['img'] ?>" alt="<?= $product['name'] ?>" style="width: 180px; height: 130px; object-fit: cover;">
                        </td>
                        <td style="padding-left: 10px;">
                            <a href="product_view.php?index=<?=$index?>"><?= $product['name'] ?></a><br>
                            <p>[Launch Date: <?= $product['launch_date'] ?>] [Published By: <?= $product['published_by'] ?>]</p>
                            <p><?= $product['description'] ?></p>
                        </div>
                        </td>
                        <td>
                            <b>Votes-<?= $product['votes'] ?></b>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
    </div>
</body>
</html>
