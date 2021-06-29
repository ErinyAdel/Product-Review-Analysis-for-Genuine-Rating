<!DOCTYPE html>
<html>
<?php 
include_once "../Controllers/AddSellerController.php";
?>
    <head>
        <meta charset="UTF-8" />
        <title>Add Product</title>
        <link href="../Css/style2.css" rel="stylesheet" />
    </head>
    <body>
        <div class="form_div">
            <form action="" method="POST" enctype="multipart/form-data">
                <div class="product-labels">
                    <label class="">Seller Name</label>
                    <label>Phone Number</label>
                </div>
                <div class="product-inputs">
                    <input type="text" name="seller_name" />
                    <input type="number" name="phone_number" id="price_input" />
                </div>
                <input type="submit" class="submit_input" />
            </form>
        </div>
    </body>
</html>
