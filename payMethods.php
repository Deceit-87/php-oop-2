<?php



class PayMethods {
    public $number;
    public $owner;
    public $cvv;
    public $expirationDate;

public function __construct($_number,$_owner,$_cvv,$_expirationDate)
{
    $this->number = $_number;
    $this->owner = $_owner;
    $this->cvv = $_cvv;
    $this->expirationDate = $_expirationDate;
}

}