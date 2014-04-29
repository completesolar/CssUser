<?php
namespace CompleteSolar\User;

class CssUser {
    private $id;
    private $email;
    private $firstName;
    private $lastName;
    private $image;

    public function __construct($id, $email, $firstName, $lastName, $image){
        $this->id = $id;
        $this->email = $email;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->image = $image;
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
    
    public function getImage(){
        return $this->image;
    }
}
?>