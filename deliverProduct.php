<?php
class Product{
	private $productName;
	private $productPrice;
	private $productPageCount;
	private $productISBN;
	
	public function setProductName($a){
		$this->productName = $a;
	}
	public function  getProductName(){
		return $this->productName;
	}	
	public function  setProductPrice($a){
		$this->productPrice = $a;
	}
	public function  getProductPrice(){
		return $this->productPrice;
	}	
	public function  setProductPageCount($a){
		$this->productPageCount = $a;
	}
	public function  getProductPageCount(){
		return $this->productPageCount;
	}	
	public function  setProductISBN($a){
		$this->productISBN = $a;
	}
	public function  getProductISBN(){
		return $this->productISBN;
	}
	
	public function  getProductObj(){
		$product = [];
		$product["productName"]=$this->getProductName();
		$product["productPrice"]=$this->getProductPrice();
		$product["productPageCount"]=$this->getProductPageCount();
		$product["productISBN"]=$this->getProductISBN();
		return json_encode($product);
	}
}
	$productObj = new Product();
	$productObj->setProductName("PHP Textbook");
	$productObj->setProductPrice(129.95);
	$productObj->setProductPageCount(327);
	$productObj->setProductISBN("13-1234435690");

	echo($productObj->getProductObj());

//$productObj->productName = "Product 1";
//$productObj->productName = "PHP Textbook";
//$productObj->productPrice = 129.95;
//$productObj->productPageCount = 327;
//$productObj->productISBN = "13-1234435690";	
//$productObj->productPrice = "$1.99";

//	$returnObj = json_encode($productObj);	//create the JSON object
//	
//	echo $returnObj;							//send results back to calling program
?>