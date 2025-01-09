<?php

/**
 * SRP : Single Resposibility Principle
 */

class User{
    private $user;
    private $name;
    private $email;

    public function __construct(int $id, string $name, string $email)
    {   
        $this->id = $id;
        $this->name = $name;
        $this->email = $email;
    }


}

class UserAuth {
    private $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }
    
    public function loginAccount(string $email, string $password)
    {
        
    }

    public function changePassword(string $oldpassword, string $newpassword)
    {
        
    }
    public function verifyCredentials(string $email, string $password)
    {
        
    }
}


class UserSettings{
    private $user;
    private $auth;

    public function __construct(User $user)
    {
        $this->user = $user;
        $this->auth = new UserAuth($user);
    }

    public function changeSettings(array $settings){
        if ($this->auth-> verifyCredentials()) {
            # code...
        }
    }
}