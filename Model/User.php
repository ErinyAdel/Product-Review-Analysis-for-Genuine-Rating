<?php

include_once "Human.php";
include_once "../Database/UserQuery.php";

class User extends Human
{
    private $feedback;
    public function setFeedback($feedback)
    {
        $this->feedback = $feedback;
    }
    public function getFeedback()
    {
        return $this->feedback;
    }

    public function Register($username, $mail)
    {
        return register($username, $mail);
    }
    public function feedback($feedback, $userid)
    {
         Feedback($feedback, $userid);
    }
    public function Rateproduct($myrate, $id)
    {
         rateproduct($myrate, $id);

    }
    public function Rateseller($myrate, $id)
    {
         rateseller($myrate, $id);

    }
    public function showproduct()
    {
        Showproduct();
    }
    public function showcategory()
    {
        Showcategory();
    }
    public function showProductCategory($prodctSerialNumber)
    {
        ShowProductCategory($prodctSerialNumer);
    }
    public function CompareTwoProduct($userId, $productSerialNumber1, $productSerialNumber2, $review1, $review2, $Rate1, $Rate2)
    {
        compareTwoProduct($userId, $productSerialNumber1, $productSerialNumber2, $review1, $review2, $Rate1, $Rate2);
    }
    public function __construct()
    {

    }

}
