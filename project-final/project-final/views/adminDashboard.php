<div>
    <fieldset style="margin: auto; width: 50%;">
        <legend>Dashboard [<?=$_SESSION['opencrowd_cur_session']?>]</legend>
        <button class="btn" onClick="window.location.href='manageUsers.php'">Manage Users</button>
        <button class="btn" onClick="window.location.href='manageProducts.php'">Manage Products</button>
        <button class="btn" onClick="window.location.href='addProduct.php?username=<?=$_SESSION['opencrowd_cur_session']?>'">Add Product</button>
    </fieldset>
</div>