<!DOCTYPE html>
<html>
<?php
include_once "../Controllers/AddProductController.php";
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
                    <label class="">Product Name</label>
                    <label>Price</label>
                    <label id="serial_number_label">Serial Number</label>
                    <label id="product_image_label">Product Image</label>
                    <label>Category</label>
                    <label>Seller Id</label>
                </div>
                <div class="product-inputs">
                    <input type="text" name="product_name" />
                    <input type="number" name="product_price" id="price_input" />
                    <input type="number" name="product_serial_number" />
                    <input type="file" name="product_image" />
                    <select name="category">
                     <?php  displayCategories();?> 
                    <select name="id">    
                    <?php displaySellers();?>
                </div>
                <textarea rows="10" cols="25" maxlength="255" placeholder="Product Description." name="product_description"></textarea>
                <input type="submit" class="submit_input" />
            </form>
        </div>
    </body>
</html>
