<?php

class User {

    //Diccionario de Roles

    const ADMIN_ROL = 1;
    const SECURITY_ROL = 2;
    const STORE_ROL = 3;
    
    private $id;
    private $name;
    private $age;
    private $rol;
    
    public function _constructor($id, $name, $age){
        $this->id = $id;
        $this->name = $name;
        $this->age = $age;
        $this->rol = 1;
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
    
    public function getRol(){
        return $this->rol;
    }
}

$user = new User(10,"Juan",30);

/* echo "User ID: {$user -> getID()} Nombre: {$user -> getName()} Age: {$user -> userAge()}"; */
echo $user -> getRol() == User::ADMIN_ROL ? "Admin" : "Otro";


