<?php

class Product
{
    private $name;
    private $catID;
    private $averageRating;
    private $price;
    private $serialNumber;
    private $otherInfo;
    private $picture;
    public function __construct()
    {
        $this->picture = "";
        $this->name = "";
        $this->catID = "";
        $this->averageRating = 0.0;
        $this->price = 0.0;
        $this->serialNumber = "";
        $this->otherInfo = "";
    }
    public function updateRate($userRate)
    {
        $this->averageRating = ($this->averageRating + $userRate) / 2;
        $connection = Connect::getInstance()->getConnection();
        $query = "UPDATE product
        SET Rate = \'"+$this->Rate+"\' WHERE SerialNumber = "+$this->SerialNumber+";";
        $connection->mysqli->query($query);
    }
    //getters
    public function getName()
    {
        return $this->name;
    }
    public function getCategoryID()
    {
        return $this->catID;
    }
    public function getAverageRating()
    {
        return $this->averageRating;
    }
    public function getPrice()
    {
        return $this->price;
    }
    public function getSerialNumber()
    {
        return $this->serialNumber;
    }
    public function getOtherInfo()
    {
        return $this->otherInfo;
    }
    public function getPicture()
    {
        return $this->picture;
    }

    //setters
    public function setName($var)
    {
        $this->name = $var;
    }
    public function setCategoryID($var)
    {
        $this->catID = $var;
    }
    public function setPrice($var)
    {
        $this->price = $var;
    }
    public function setSerialNumber($var)
    {
        $this->serialNumber = $var;
    }
    public function setOtherInfo($var)
    {
        $this->otherInfo = $var;
    }
    public function setAverageRate($var)
    {
        $this->averageRating = $var;
    }
    public function setPicture($var)
    {
        $this->picture = $var;
    }
    //
    public function updateAverageRating()
    {
        // will be implemented soon
    }
}
