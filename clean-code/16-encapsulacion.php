<?php

class BanckAccount 
{
    private $balance = 1000;

    public function __construct(int $mount = 1000)
    {
        $this->balance = $mount;
    }

    public function withdraw (int $mount){
        if ($mount > $this->balance) {
            throw new Exception("saldo insuficiente");
        }

        $this->balance += $mount;
    }

    public function deposit (int $mount){
        $this->balance += $mount;
    }

    public function getBalance (){
        return $this->balance;
    }

}

$banckAccount = new BanckAccount(2000);
$banckAccount-> deposit(500);

try{
    $banckAccount -> withdraw(400);
    echo $banckAccount-> getBalance();
}catch(Exception $error){

    echo $error -> getMessage();
}

