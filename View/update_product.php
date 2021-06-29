<!DOCTYPE html>
<html>
<?php
include_once "../Controllers/EditProductController.php";
?>
    <head>
        <meta charset="UTF-8" />
        <title>
            Update Product
        </title>
        <link href="../Css/style2.css" rel="stylesheet" />
    </head>
    <body>
        <div class="form_div">
            <form action="" method="POST" enctype="multipart/form-data">
                <p>Choose product category and enter product serial number</p>
                <div class="product-labels">
                    <label>Category</label>
                    <label>Serial number</label>
                    <label>New name</label>
                    <label id="expire_date_label">New Price</label>
                    <label id="product_image_label">Product Image</label>
                </div>
                <div class="product-inputs">
                    <select name="category">
                    <?php
displayCategories();
?>
                    </select>
                    <input type="number" name="product_serial_number" />
                    <input type="text" name="product_name" id="price_input" />
                    <input type="number" name="product_price" id="expire_date_input"/>
                    <input type="file" name="product_image" />
                </div>
                <textarea rows="10" cols="25" maxlength="255" name="product_description" placeholder="New product description"></textarea>
                <input type="submit" class="submit_input" value="Update" />
            </form>
        </div>
    </body>
</html>