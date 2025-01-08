<?php

class MessageConfig {

    public $title;
    public $subtitle;
    public $message;
    public $email;
    public $important = false;
    
}

function createMessage (MessageConfig $messageConfig){
    var_dump($messageConfig -> title);
}

$config = new MessageConfig();
$config -> title = "sdasdasdas";
$config -> subtitle = "sdasdasdas";
$config -> message = "sdasdasdas";
$config -> email = "sdasdasdas";
$config -> important = true;

createMessage($config);
