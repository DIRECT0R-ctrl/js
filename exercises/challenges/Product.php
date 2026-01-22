<?php

class Product {
	public string $name;
	public int $price;

	public function __construct($name, $price)
	{
		$this->name = $name;
		$this->price = $price; 
	}

	public function getInfo()
	{
		return "Produit : {$this->name} - Prix : {$this->price} DH \n";
	}
}

$product = new Product("vape", 1000);
echo $product->getInfo();
