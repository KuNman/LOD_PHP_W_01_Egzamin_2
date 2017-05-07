<?php

include('User.php');

class VIPUser extends User {
    
    public $vipCardNumber;
    
    public function __construct($vipCardNumber) {
        parent::__construct($mail, $surname, $name);
        if (self::$newNumber = TRUE) {
        $this->vipCardNumber = $vipCardNumber;
        } else {
            $this->vipCardNumber = null;
        }
    }
    
    public function checkCard($newNumber) {
        if ($newNumber >= 999 && $newNumber % 2 = 0 ) {
            return $this->newNumber = TRUE;
        }
    }
    
    public function setVipCardNumber($newCardNumber) {
        if ($newCardNumber >= 999 && $newCardNumber % 2 = 0 ) {
        $this->newCardNumber = $newCardNumber;
        }
    }
    
    public function getVipCardNumber() {
        return $this->getVipCardNumber;
    }
    
}


