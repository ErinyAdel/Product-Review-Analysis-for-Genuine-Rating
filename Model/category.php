<?php
class Category
{
    private $categoryName;
    private $categoryId;

    //private const products = array();   //        private static $products = array();

    public function __construct()
    {}

    //Setter & Getter Methods
    public function getCategoryName()
    {
        return $this->categoryName;
    }

    public function getCategoryId()
    {
        return $this->categoryId;
    }

    public function setCategoryName($categoryName)
    {
        $this->categoryName = $categoryName;
    }

    public function setCategoryId($categoryId)
    {
        $this->categoryId = $categoryId;
    }

    public function setCategoryDescription($categoryDescription)
    {
        $this->categoryDescription = $categoryDescription;
    }
}
