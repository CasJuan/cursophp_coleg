<?php


class DBConection {
    private static $instance;

    public function __construct()
    {
        //existo
    }

    public static function getInstance(){
        if (self::$instance === null) {
            self::$instance = new self();
        }

        return self::$instance;
    }

    public static function createUser($name):void{
        //crear usuario
    }

}

$singleton = DBConection::getInstance();
$singleton::createUser("juan");
