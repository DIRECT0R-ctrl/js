<?php

abstract class Payment{
	private $amount;

	public function __construct($amount)
	{
		$this->amount=$amount;
	}
	
	public function getAmount()
	{
		return $this->amount;
	}
	abstract function pay();
}


class CashPayment extends Payment 
{
	public function pay()
	{
		return "it got payed by cash , the amount is : {$this->getAmount()}\n";
	}
}	

class cardPayment extends Payment
{
	public function pay()
	{
		return "it got payed Online , the amount is {$this->getAmount()} \n";
	}
}

$paymentMethode=new CashPayment(155);
echo $paymentMethode->pay();

$paymentMethode= new cardPayment(155);
echo $paymentMethode->pay();


