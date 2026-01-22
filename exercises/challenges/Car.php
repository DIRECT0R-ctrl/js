<?php
class Car {
	
    private $brand;
	
    public function __construct()
    {
    }
    public function getBrand()
    {
	    return $this->brand;
    }
    public function setBrand($brand) {
        $this->brand = $brand;
    }
}

$car = new Car();
$car->setBrand("derictor brand \n");
echo $car->getBrand();

