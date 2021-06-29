<!DOCTYPE html>
<html>
<?php 
include_once "../Controllers/AddCategoryController.php";?>
    <head>
        <title>Add Category</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="../Pictures/category.png" type="image/png" rel="shortcut icon">
        <link href="../Css/style1.css" rel="stylesheet">
    </head>
    <body id="body-add-cat">
        <header>

        </header>
        <form action="" method="POST">
        <div class="add-cat-big-div">
            <div class="add-cat-small-div">
                <h3>Category Name : </h3>
                <input type="text" placeholder="Enter Category Name " id="input" name="categoryName">
            </div>
        <input id="addcateg-btn" type="submit" value="Add Category">
        </div>
        </form>

    </body>
</html>
