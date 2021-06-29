<!DOCTYPE html>
<html>
<?php
include_once "../Controllers/HomePageController.php";
?>
    <head>
        <meta charset="UTF-8">
        <title>Home Page</title>
        <link href="../Css/HomePage2.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="../Css/bootstrap.min.css">
        <link href="../css2/all.css" rel="stylesheet">
    </head>
    <body>
        <div class="header">
            <image class="myLogo" src="../Pictures/logo.png " id="logo-img" alt="logo">
            <span class="logo">Go Analysis</span>
            <form>
                <input class="searchbar" type="search" name="Search bar">
                <a href="product.php" class="btn btn-primary" class="normalLink" href="">Search</a>
                <?php
echo $html;
?>
            </form>
            <select class="categorySelector">
                <?php
                displayCategories();
                ?>
            <input class="filterBtn" type="submit" value="Filter">
        </div>
        <div class='body'>
            <div class="row">
                <div class="card">
                    <img class="card-img-top" src="../Pictures/1.jpg">
                    <div class="card-body">
                        <p class="cardDes">Apple mac book pro</p>
                        <a id="fady" href="#" class="btn btn-primary">See More</a>
                    </div>
                </div>
                <div class="card">
                    <img  class="card-img-top" src="../Pictures/2.jpg">
                    <div class="card-body">
                        <p class="cardDes">Apple mac book pro</p>
                        <a id="fady" href="#" class="btn btn-primary">See More</a>
                    </div>
                </div>
                <div class="card">
                    <img class="card-img-top" src="../Pictures/3.jpg">
                    <div class="card-body">
                        <p class="cardDes">Apple mac book pro</p>
                        <a  id="fady" href="#" class="btn btn-primary">See More</a>
                    </div>
                </div>
                <div class="card">
                    <img class="card-img-top" src="../Pictures/4.jpg">
                    <div class="card-body">
                        <p class="cardDes">Apple mac book pro</p>
                        <a id="fady" href="#" class="btn btn-primary">See More</a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="card">
                    <img class="card-img-top" src="../Pictures/1.jpg">
                    <div class="card-body">
                        <p class="cardDes">Apple mac book pro</p>
                        <a  id="fady" href="#" class="btn btn-primary">See More</a>
                    </div>
                </div>
                <div class="card">
                    <img class="card-img-top" src="../Pictures/2.jpg">
                    <div class="card-body">
                        <p class="cardDes">Apple mac book pro</p>
                        <a id="fady" href="#" class="btn btn-primary">See More</a>
                    </div>
                </div>
                <div class="card">
                    <img class="card-img-top" src="../Pictures/3.jpg">
                    <div class="card-body">
                        <p class="cardDes">Apple mac book pro</p>
                        <a id="fady" href="#" class="btn btn-primary">See More</a>
                    </div>
                </div>
                <div class="card">
                    <img  class="card-img-top" src="../Pictures/4.jpg">
                    <div class="card-body">
                        <p class="cardDes">Apple mac book pro</p>
                        <a  id="fady" href="#" class="btn btn-primary">See More</a>
                    </div>
                </div>
            </div>
        </div>
        <!--Start Footer-->
        <div class="footer">
            <h1>Follow Us About This Links</h1>
            <a href="https://www.YouTube.com"><img src="../Pictures/MyYoutube.svg" alt=""></a>
            <a href="https://www.Twiter.com"><img src="../Pictures/MyTwitter.svg" alt=""></a>
            <a href="https://www.Instagram.com"><img src="../Pictures/MyInstagram.svg" alt=""></a>
            <a href="https://www.Skype.com"><img src="../Pictures/MySkype.svg" alt=""></a>
            <a href="https://www.Facebook.com"><img src="../Pictures/MyFacebook.svg" alt=""></a>
        </div>
        <!--End Footer-->
    </body>
</html>
