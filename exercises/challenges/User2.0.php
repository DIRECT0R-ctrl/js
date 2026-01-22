<?php
class BankAccount {
	private $blance;
	
	public function __construct($blance)
	{
		$this->blance = $blance;
	}

	public function deposit($amount)
	{
		if ($amount)
		{
			$this->blance = $this->blance + $amount;
		}
	}
	
	public function getBalance()
	{
		return $this->blance;
	}
	public function withdraw($amount)
	{
		if (!($amount > $this->blance))
		{
			$this->blance = $this->blance - $amount;
		} else {
			return "le solde est insuffisant";
		}
	}

}

$BankAccount = new BankAccount(50);
$BankAccount->deposit(50);
echo $BankAccount->getBalance() . "\n";

$BankAccount->withdraw(50);
echo $BankAccount->getBalance();
