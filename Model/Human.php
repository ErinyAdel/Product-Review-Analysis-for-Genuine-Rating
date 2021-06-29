<?php
include_once "../Database/HumanQuery.php";
class Human
{
    private $Name;
    private $Id;
    private $Password;
    private $Email;

    public function __construct()
    {

    }
    // login function searches for the username and password entered by the user
    // returns the user if found and returns 0 otherwise
    public function Login($username, $password)
    {
        return login($username,$password);
    }
    // modified this function to return 1 if edit is successful and 0 otherwise
    public function editUserData($userTypeId, $userName, $Id, $Password, $Email,$feedback)
    {
        return EditUserData($userTypeId, $userName, $Id, $Password, $Email, $feedback);
    }
    // this function returns an array having all categories
    // if failed returns 0
    public function viewCategories()
    {
       return ViewCategories();
    }
    public function ViewSellers()
    {
       return viewSellers();
    }

    public function __destruct()
    {}

    /*
    this function returns an array of products of the specified category and returns 0 if fail

     */

    public function viewProductsOfCategory($category_id)
    {
        return ViewProductsOfCategory($category_id);
    }
    /*
    this function takes a product id as paramater and returns an object of the product from database
    if successful and returns 0 otherwise
     */
    public function viewProduct($product_id)
    {
        return ViewProduct($product_id);
    }

    // this function below is to get the selected product details by taking the product id as paramater
    //public function getProductDetails($product_id){}
    public function __call($method, $parameter)
    { //this if the user call a method that not exist or not accessible
        echo "the method " . $method . " not found";
    }
    public function __get($prop)
    { //this if the user call a property that not exist or not accessible
        echo "the property " . $prop . " not found";
    }
    public function __set($prop, $value)
    { //this if the user call a property that not exist or not accessible
        echo "the property " . $prop . " not found or not accessible and the value " . $value;
    }
    //Start Setter
    public function setName($Name)
    {
        $this->Name = $Name;
    }
    public function setId($Id)
    {
        $this->Id = $Id;
    }
    public function setPassword($Password)
    {
        $this->Password = $Password;
    }
    public function setEmail($Email)
    {
        $this->Email = $Email;
    }
    //End Setter

    //Start Getter
    public function getName()
    {
        return $this->Name;
    }
    public function getId()
    {
        return $this->Id;
    }
    public function getPassword()
    {
        return $this->Password;
    }
    public function getEmail()
    {
        return $this->Email;
    }
    //End Getter
    function logger($type, $object)
    {
        settype($type, "int");
        define("fileName", "log.txt");
        $file = fopen(fileName, "a+");
        switch (${'type'})
        {
            case 1:
                $text = date("Y-m-d H:i:s") . " product add " . $object->getName() . " To category " . $object->getCategoryID() . "\n";
                break;
            case 2:
                $text = date("Y-m-d H:i:s") . " product delete " . $object . "\n";                        
                break;
            case 3:
                $text = date("Y-m-d H:i:s") . " product update " . $object->getName() . "\n";
                break;
            case 4:
                $text = date("Y-m-d H:i:s") . " category add " . $object. "\n";
                break;
            case 5:
                $text = date("Y-m-d H:i:s") . " category delete " . $object. "\n";
                break;
            case 6:
                $text = date("Y-m-d H:i:s") . " user register " . $object . "\n";
                break;
            case 7:
                $text = date("Y-m-d H:i:s") ." user login " . $object . "\n";
                break;
            case 8:
                $text = date("Y-m-d H:i:s") . " add seller " . $object->getName() ."\n";
                break;
            case 9:
                $text = date("Y-m-d H:i:s") . " delete seller " . $object . "\n";
                break;
            default:
                settype($object, "null");
                
                $text = date("Y-m-d H:i:s") . " test\n";
                break;
        }
        fwrite($file, $text);
        fclose($file);
    }
}
