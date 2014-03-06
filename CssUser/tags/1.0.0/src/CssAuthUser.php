<?php
namespace CompleteSolar\HelioAuth;

class CssAuthUser {
    private $id;
    private $email;
    private $firstName;
    private $lastName;

    public function __construct($id, $email, $firstName, $lastName){
        $this->id = $id;
        $this->email = $email;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
    }

    public function getID(){
        return $this->id;
    }

    public function getEmail(){
        return $this->email;
    }

    public function getFirstName(){
        return $this->firstName;
    }

    public function getLastName(){
        return $this->lastName;
    }
}
?>