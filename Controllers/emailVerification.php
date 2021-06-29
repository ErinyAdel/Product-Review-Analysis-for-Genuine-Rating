<?php

    include('../Database/connect.php');
    $message = '';
    $mysqli = Connect::getInstance()->getConnection();
    echo 'A';
    if (isset($_GET['activation_code'])) 
    {
        echo 'B';
        $query = "SELECT email, password, user_email_status, user_email_status From users WHERE user_activation_code = '". $_GET['activation_code'] ."'";
        $result = $mysqli->query($query);

        if ($result->num_rows > 0) 
        {
            while($row = mysqli_fetch_assoc($result)) 
            {
               if ($row['user_email_status'] == 'not verified') 
                {
                    $update_query = "UPDATE users SET user_email_status = 'verified' WHERE email= '".$row['email']."'";
                    $statement = $mysqli->prepare($update_query);
                    $statement->execute();
                    
                    $message = '<label class="text-success">Your Email Address Successfully Verified <br />You can login here - <a href="../View/Login.php">Login</a></label>';    
                } 
                else {
                    $message = '<label class="text-info">Your Email Address Already Verified</label>';
                }
            }
        } 
        else {
            $message = '<label class="text-danger">Invalid Link</label>';
        }
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <title>PHP Register Login Script with Email Verification</title>		
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"/>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    <body>
        <div class="container">
            <h1 align="center">Register Login Script with Email Verification</h1>
            <h4><?php echo $message; ?></h4>
        </div>
    </body>
</html>