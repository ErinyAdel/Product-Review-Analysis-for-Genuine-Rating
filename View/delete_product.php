<!DOCTYPE html>
<html>
<?php
include_once "../Controllers/DeleteProductController.php";
?>
    <head>
        <meta charset="UTF-8" />
        <title>
            Delete Product
        </title>
        <link href="../Css/style2.css" rel="stylesheet" />
    </head>
    <body>
        <div class="form_div">
            <form action="" method="POST">
                <div class="product-labels">
                    <br><br><br><br><br><br><br><br>
                    <label>Category</label>
                    <label>Product Serial Number</label>
                </div>
                <div class="product-inputs">
                    <select name="category">
                    <?php
displayCategories();
?>
                    </select>
                    <input type="text" name="product_serial_number"/>
                </div>

                <input type="submit" class="submit_input" value="Delete" />
            </form>
        </div>
    </body>
</html>
