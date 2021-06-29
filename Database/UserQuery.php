<?php
include_once "connect.php";
include_once '../Model/Product.php';
include_once '../Model/category.php';
$db_connection = Connect::getInstance()->getConnection();

function Register($username,$email)
    {
        $checkUsername = "SELECT Username From users WHERE Username='".$username."'";
        global $db_connection;
      
        if ($result = $db_connection->query($checkUsername))
        {
            if ($result->num_rows == 1) {
                return 1;
            } 
            else 
            {
                $password = rand(100000, 999999);
                $user_encrypted_password = password_hash($password, PASSWORD_DEFAULT);
                $user_activation_code = md5(rand());

                $insert_query = "INSERT INTO users (UserName, Email, Password, user_activation_code, user_email_status, UserTypeId,Feedback) "
                              . "VALUES (?, ?, ?, ?, ?, 2,'')";

                $stmt = $db_connection->prepare($insert_query);
                $stmt->bind_param("sssss",$user,$mail,$encPass,$code,$ver);
                $user = $username;
                $mail = $email;
                $encPass = $user_encrypted_password;
                $code = $user_activation_code;
                $ver = 'not verified';
                $stmt->execute();

                $stmt->close();
                $arr['passw'] = $password;
                $arr['activ'] = $user_activation_code;
                return $arr;
            }
        }
    }
function Feedback($feedback, $userid)
{
    global $db_connection;
    $q = "UPDATE users SET Feedback = '$feedback' WHERE Id = '$userid'";
    if ($result = $db_connection->query($q)) {

        echo "done";
    } else {
        echo "error";
    }
}
function rateproduct($myrate, $id)
{
    global $db_connection;
    $rate;
    $q = "SELECT Rate FROM product where SerialNumber='$id'; ";
    if ($result = $db_connection->query($q)) {

        $check = mysqli_num_rows($result);
        if ($check > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                $rate = $row['Rate'];
            }

        }
    }
    $finalrate = ($rate + $myrate) / 2;
    $q = "UPDATE product SET Rate = '$finalrate' WHERE SerialNumber= '$id'";
    if ($result = $db_connection->query($q)) {

        echo "done";
    } else {
        echo "error";
    }

}
function rateseller($myrate, $id)
{
    global $db_connection;
    $rate;
    $q = "SELECT SellerRate FROM seller where Id='$id'; ";
    if ($result = $db_connection->query($q)) {

        $check = mysqli_num_rows($result);
        if ($check > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                $rate = $row['SellerRate'];
            }

        }
    }

    $finalrate = ($rate + $myrate) / 2;
    $q = "UPDATE seller SET SellerRate = '$finalrate' WHERE id = '$id'";
    if ($result = $db_connection->query($q)) {

        echo "done";
    } else {
        echo "error";
    }

}
function Showcategory()
{
    global $db_connection;
    $q = "SELECT CategoryName FROM category ";
    if ($result = $db_connection->query($q)) {

        $check = mysqli_num_rows($result);
        if ($check > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo $row['CategoryName'] . "<hr>";

            }

        }
    }
}
function ShowProductCategory($prodctSerialNumber)
{
    global $db_connection;
    $q = "SELECT CategoryId FROM product where SerialNumber ='" . $prodctSerialNumber . "' ";
    if ($result = $db_connection->query($q)) {

        $check = mysqli_num_rows($result);
        if ($check > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                return $row;

            }

        }
    }
}
function compareTwoProduct($userId, $productSerialNumber1, $productSerialNumber2, $review1, $review2, $Rate1, $Rate2)
{
    global $db_connection;
    $Category1 = $this->showProductCategory($productSerialNumber1);
    $Category2 = $this->showProductCategory($productSerialNumber2);
    if ($Category1['CategoryId'] === $Category2['CategoryId']) {
        $Query1 = "INSERT INTO rate VALUES('" . $productSerialNumber1 . "','" . $userId . "','" . $Rate1 . "','" . $review1 . "')";
        $Query2 = "INSERT INTO rate VALUES('" . $productSerialNumber2 . "','" . $userId . "','" . $Rate2 . "','" . $review2 . "')";
        if ($result = $db_connection->query($Query1) && $result2 = $db_connection->query($Query2)) {
            echo "Products reviewd";
        } else {
            echo "Products not reviewd";
        }

    } else {
        echo "Not The Same Category";
    }
}
function Showproduct()
{
    global $db_connection;
    $q = "SELECT Name,Picture FROM product; ";
    if ($result = $db_connection->query($q)) {

        $check = mysqli_num_rows($result);
        if ($check > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo $row['Name'] . "<br/>";
                echo $row['Picture'] . "<hr>";
            }

        }
    }
}
