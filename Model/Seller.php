<?php
include_once "Human.php" ;
class Seller extends Human{
	private $sellerPhone ;
	private $sellerRate  ; 
	public function  __construct(){
	}
	public function __call ($method,$parameter){  //this if the user call a method that not exist or not accessible
		echo "the method ".$method." not found";
	}
	public function __get ($prop){  //this if the user call a property that not exist or not accessible
		echo "the property ".$prop." not found";
	}
	public function __set ($prop,$value){  //this if the user call a property that not exist or not accessible
		echo "the property ".$prop." not found or not accessible and the value ".$value ;
	}
	public function setSellerPhone($sellerPhone){
		$this->sellerPhone=$sellerPhone ;
	}
	public function setSellerId($sellerId){
		$this->setId($sellerId) ;
	}
	public function setSellerRate($sellerRate){
		$this->sellerRate=$sellerRate ;
	}
	public function getSellerPhone(){
		return $this->sellerPhone ;
	}
	public function getSellerRate(){
		return $this->sellerRate ;
	}
	public function getSellerId(){
		return $this->getId() ;
	}
	public function updateSellerRate($sellerId,$sellerRate){
		$Query="Update Seller set SellerRate='".$sellerRate."' where Id='".$sellerId."'";
		$obj= Connect::getInstance()->getConnection();
		if ($result = $obj->query($Query)) {
		  	echo "updated ";
		}else{
			echo "not updated";
		}
	}
}
?>