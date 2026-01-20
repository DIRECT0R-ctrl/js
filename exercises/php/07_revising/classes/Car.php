<?php

class Car {

	private $brand;
	private $color;
	private $vehiculeType = "car";

	function __construct($brand, $color)
	{
		$this->brand = $brand;
		$this->color = $color;
	}
	
	public function getBrand()
	{
		return $this->brand;
	}

	public function getColor()
	{
		return $this->color;
	}

	public function setBrandColor($brand, $color)
	{
		$allowedColors = [
			"red",
			"blue",
			"Green",
			"yellow"
		];

		if (in_array($allowedColors, $color))
		{
			$this->color = $color;
		}
		$this->brand = $brand;
	}
	public function getCarInfo()
	{
		return "brand : " . $this->brand . ", color : " . $this->brand . "\n";
	}
}

$car1 = new Car("volvo", "green");
//var_dump($car1);
echo $car1->getCarInfo();
