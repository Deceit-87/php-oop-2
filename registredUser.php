<?php

require_once __DIR__.'/user.php';

class registredUser extends User {
    private $password;

    public function __construct($_name,$_surname,$_email,$_password)
    {
        parent::__construct($_name,$_surname,$_email);
        $this->password = hash('md5',$_password);
        $this->setSconto(20);
        
    }

}