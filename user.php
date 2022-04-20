<?php 
class User{

    public $name;
    public $surname;
    public $email;
    public $age;
    protected $sconto = 0;
    public $payMethods = [];

    public function __construct($_name,$_surname,$_email,$_sconto = 0)
    {
        $this->name = $_name;
        $this->surname = $_surname;
        $this->email = $_email;
        $this->sconto = $_sconto;
       
        
    }

    public function addPayment($card){
    // check if $card istance of card
    // check if expiration date
    $this->payMethods[] = $card;
    }
    public function getSconto(){
        return $this->sconto;
    }
    public function setSconto($sconto){
        $this->sconto = $sconto;
    }

}