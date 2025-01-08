<?php

class Configuratio {
    private $configuration = [];

    public function __construct(array $configuration)
    {
        $this->configuration = $configuration;
    }

    public function get(string $key)
    {
        return isset($this->configuration[$key]) ?? $this->configuration[$key]; 
    }

}

$databaseConfig = new Configuration ([
    "type" => "sadasdas",
    "name" => "sadasdas",
    "users" => "sadasdas",
    "password" => "sadasdas",
    "host" => "sadasdas",
]);

new PDO("{$databaseConfig['type']}:host = {$databaseConfig['host']}");

function configuration() {
    return[
        "email" => "sdsdasd",
        "emailpasswors" => "sdsdasd",
        "emailport" => 800
    ];
}
