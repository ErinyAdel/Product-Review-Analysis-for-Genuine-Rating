<!DOCTYPE html>
<html>
<?php
include_once "../Controllers/loginController.php";
?>    <head>
        <title>Login</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="image/png" href="../res/images/icons/favicon.ico"/>
        <link rel="stylesheet" type="text/css" href="../res/vendor/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="../rse/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="../res/vendor/animate/animate.css">
        <link rel="stylesheet" type="text/css" href="../res/vendor/css-hamburgers/hamburgers.min.css">
        <link rel="stylesheet" type="text/css" href="../res/vendor/select2/select2.min.css">
        <link rel="stylesheet" type="text/css" href="../res/css/util.css">
        <link rel="stylesheet" type="text/css" href="../res/css/main.css">
    </head>
    <body>
        <div class="limiter">
            <div class="container-login100">
                <div class="wrap-login100">
                    <div class="login100-pic js-tilt" data-tilt>
                        <img src="../res/images/img-01.png" alt="IMG">
                    </div>

                    <form class="login100-form validate-form" action="" method="POST">
                        <span class="login100-form-title">Login</span>

                        <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
                            <input class="input100" required="required" type="text" name="username" placeholder="UserName">
                            <span class="focus-input100"></span>
                            <span class="symbol-input100">
                                <i class="fa fa-envelope" aria-hidden="true"></i>
                            </span>
                        </div>

                        <div class="wrap-input100 validate-input" data-validate = "Password is required">
                            <input class="input100" required="required" type="password" name="password" placeholder="Password">
                            <span class="focus-input100"></span>
                            <span class="symbol-input100">
                                <i class="fa fa-lock" aria-hidden="true"></i>
                            </span>
                        </div>

                        <div class="container-login100-form-btn">
                            <input class="login100-form-btn" type="submit" name="submit" value="Login">
                        </div>

                        <div class="text-center p-t-136">
                            <a class="txt2" href="RegisterView.php">
                                <b>Create your Account</b>
                                <i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <script src="../res/vendor/jquery/jquery-3.2.1.min.js"></script>
        <script src="../res/vendor/bootstrap/js/popper.js"></script>
        <script src="../res/vendor/bootstrap/js/bootstrap.min.js"></script>
        <script src="../res/vendor/select2/select2.min.js"></script>
        <script src="../res/vendor/tilt/tilt.jquery.min.js"></script>
        <script >
            $('.js-tilt').tilt({
                scale: 1.1
            })
        </script>
        <script src="js/main.js"></script>
    </body>
</html>
