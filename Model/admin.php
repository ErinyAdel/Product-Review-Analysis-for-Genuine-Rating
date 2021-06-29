<?php
include_once "Human.php";
include_once "../Database/AdminQuery.php";
class Admin extends Human
{
    /*
    function that adds a product to the database taking an object of product as paramater
    returns 1 if successful and 0 otherwise
     */
    public function addProduct($product)
    {
        return AddProduct($product);
    }
    public function addSellerToProduct($product,$seller)
    {
        return AddSellerToProduct($product,$seller);
    }
    /*
    this function edits a specific product taking an object of the updated product and the serial number
    returns 1 if successful and 0 otherwise
     */
    public function editProduct($categoryId, $serialNumber, $product)
    {
        return EditProduct($categoryId, $serialNumber, $product);
    }
    /*
    this function adds a category taking an object of category
    returns 1 if successful and 0 otherwise
     */
    public function addCategory($category)
    {
        return AddCategory($category);
    }
    /*
    this function deletes a specific category taking the category id as paramater
    returns 1 if successful and 0 otherwise
     */
    public function deleteCategory($category_id)
    {
        return DeleteCategory($category_id);
    }
    /*
    this function returns an array of having all users recorded in the database and returns 0 if fail
     *Note: the returned users doesn't have their passwords set
     */
    public function viewUsers()
    {
        return ViewUsers();
    }
    /* this function deletes a product and returns 1 if successfull 0 otherwise*/
    public function deleteProduct($product_serial_number, $categoryId)
    {
        return DeleteProduct($product_serial_number, $categoryId);
    }
    /* this function deletes a user feedback return 1 if successful and 0 otherwise */
    public function deleteFeedback($userId){
        return DeleteFeedback($userId);
    }

    public function addSeller($seller){
        return AddSeller($seller);
    }

    public function deleteSeller($seller_id){
        return DeleteSeller($seller_id);
    }
}
