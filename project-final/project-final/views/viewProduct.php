<?php 
    include '../controller/viewproductController.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../asset/style.css" />
    <title>View Products</title>
</head>
<body>
<?php include 'nav.php' ?>
    <div class="container">
    <h1>Products</h1>
        <div class="profilebody">
            <?php if (count($products) > 0) : ?>
                <?php foreach ($products as $product) : ?>
                    <div class="profile-card profile-card-margin">
                        <div class="card-header">
                            <h2><?= htmlspecialchars($product['prod_name']) ?></h2>
                        </div>
                        <div class="card-body">
                            <p><strong>ID:</strong> <?= htmlspecialchars($product['id']) ?></p>
                            <p><strong>Product Category:</strong> <?= htmlspecialchars($product['prod_category']) ?></p>
                            <p><strong>Contribution Amount:</strong> <?= htmlspecialchars($product['amount']) ?></p>
                            <p><strong>Owner:</strong>
                                <?php 
                                    $owner = getProductOwner($product['prod_owner']);
                                    echo htmlspecialchars($owner['name']);
                                ?>
                            </p>
                            <div>
                                
                                <button onclick="upvote(<?= htmlspecialchars($product['id']); ?>)">Upvote</button>

                                
                                <div>
                                    <p><strong>Upvote count:</strong>
                                    <?php
                                        $product_info = getProductInfo($product['id']);

                                        if ($product_info && isset($product_info['upvote'])) { 
                                            $upvotes = $product_info['upvote'];
                                        } else {
                                            $upvotes = 0;
                                        }

                                        echo htmlspecialchars($upvotes);
                                        ?>
                                    </p>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php else : ?>
                <p>No products available in the technology category.</p>
            <?php endif; ?>
        </div>   
        <div>
            <a href="categories.php">Go Home</a>
        </div>
    </div>
    <script src="../asset/script.js"> </script>  
</body>
</html>
