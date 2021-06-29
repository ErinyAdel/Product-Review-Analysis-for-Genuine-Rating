<?php
include_once "../Model/User.php";
include_once "isUserLogged.php";

if (isset($_POST["submit"])) {
    $register = new User();
    $returned = $register->Register($_POST['username'], $_POST['email']);

    if ($returned == 1) {
        echo "<script> alert('Email Already Exits'); "
            . "window.location.href='../View/RegisterView.php';"
            . "</script>";
    } else if($returned != 0) {
        $base_url = "http://localhost/PHP_Course/Product%20Review%20Analysis%20for%20Genuine%20Rating/Controllers/";
        $mail_body = "
                          <p>Hi " . $_POST['username'] . ",</p>
                          <p>Thanks for Registration. Your password is " . $returned['passw'] . ", This password will work only after your email verification.</p>
                          <p>Please Open this link to verified your email address - " . $base_url . "emailVerification.php?activation_code=" . $returned['activ'] . "
                          <p>Best Regards,<br />Webslesson</p>
                          ";

        require '../class/class.phpmailer.php';
        $mail = new PHPMailer();
        $mail->IsSMTP();
        $mail->Host = 'smtp.gmail.com'; //The SMTP hosts of your Email hosting, this for Godaddy
        $mail->Port = '465'; //Default SMTP server port
        $mail->SMTPAuth = true; //SMTP authentication. Utilizes the Username and Password variables
        $mail->Username = 'erinyadel50@gmail.com'; //SMTP username
        $mail->Password = 'Second2Acc@#'; //SMTP password
        $mail->SMTPSecure = 'ssl'; //Connection prefix. "ssl" or "tls"
        $mail->From = $_POST['email']; //The From email address for the message
        $mail->AddAddress($_POST['email'], $_POST['username']); //Adds a "To" address
        //$mail->WordWrap = 50;                                        //Word wrapping on the body of the message to a given number of characters
        $mail->IsHTML(true); //Message type to HTML
        $mail->Subject = 'Email Verification'; //The Subject of the message
        $mail->Body = $mail_body; //Message body

        if ($mail->Send()) {
            echo "<script>
                            alert('Register Done, Please check your mail.');
                            window.location.href='../View/RegisterView.php';
                     </script>";
            $register->logger(6, $_POST['username']);
        } else {
            echo "<script> alert('Not sent!'); "
                . "window.location.href='../View/RegisterView.php';"
                . "</script>";
        }
    }else{
        echo "<script> alert('Failed to register, please try again.'); "
        // . //"window.location.href='../View/RegisterView.php';"
        . "</script>";
    }
}
