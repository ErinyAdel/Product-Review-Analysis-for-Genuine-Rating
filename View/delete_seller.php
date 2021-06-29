<!DOCTYPE html>
<html>
<?php 
include_once "../Controllers/DeleteSellerController.php";
include_once "../Controllers/displaySellersController.php";
?>
    <head>
        <title>Delete Seller</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="../Pictures/category.png" type="image/png" rel="shortcut icon">
        <link href="../Css/style1.css" rel="stylesheet">
    </head>
    <body id="body-delete-cat">
<form action="" method="POST">
        <div class="delete-cat-big-div">
            <div class="delete-cat-small-div">
                <h3>Seller Name : </h3>
                <select class="tech-options" id="select-categories" name="selectedSeller">
                <?php 
                displaySellers();
                ?>         
                <input type="submit" id="removecateg-btn" value="Remove Seller">
                </form>
            </div>
        </div>
    </body>
</html>
