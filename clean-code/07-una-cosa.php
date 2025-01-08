<?php


class RegisterUserSettings {
    public $name;
    public $email;
    public $password;
    public $date;
}

function cipherPassword (string $aplainPassword){
    return password_hash($aplainPassword, PASSWORD_DEFAULT);
}

function decrypyPassword (string $aplainPassword, string $hash){
    return password_verify($aplainPassword, $hash);
}

function createUser (RegisterUserSettings $userSettings){

}

function register (RegisterUserSettings $userSettings){
    
    if (empty($userSettings)) {
        return null;
    }

    $userSettings -> password = cipherPassword($userSettings->password);

    createUser(($userSettings));

}