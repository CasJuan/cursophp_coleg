<?php

class User {
    
    private $id;
    private $name;
    private $age;
    
    public function _constructor($id, $name, $age){
        $this->id = $id;
        $this->name = $name;
        $this->age = $age;
    }
    
    public function getID(){
        return $this->id;
    }
    
    public function getName(){
        return $this->name;
    }
    
    public function userAge(){
        return $this->age;
    }
}

$user = new User(10,"Juan",30);

echo "User ID: {$user -> getID()} Nombre: {$user -> getName()} Age: {$user -> userAge()}";


