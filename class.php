<?php
class User {
    protected $username = '';
    protected $password = '';

    public function setname ($name){
        $this->username = $name;
    }
    public function setpassword ($password){
        $this->password = $password;
    }
    public function getname (){
        return $this->username;
    }
    public function getpassword (){
        return $this->password;
    }
}
class advanceduser extends User {
    protected $adres = '';

    public function setadres ($adres){
        $this->adres = $adres;
    }
    public function getadres (){
        if ($this->username == true && $this->password == true){
            return $this->adres;
        }
    }
}