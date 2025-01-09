<?php

/**
 * 
 * OCP: Open/Close Principle
 * 
 */

interface IBotella {
    public function setColor(string $color): void;
    public function getColor(): string;

    public function setSabor(string $sabor): void;
    public function getSabor(): string;
};

class BotellaAgua implements IBotella {
    private $color;
    private $sabor;

    public function __construct(string $color, string $sabor)
    {
        $this->color = $color;
        $this->sabor = $sabor;
    }

    public function setColor(string $color):void{

    }
    public function getColor():string {
        return "";
    }
    
    public function setSabor(string $sabor):void{
        
    }
    public function getSabor():string {
        return "";
    }
}

class BotellaRefresco implements IBotella {
    private $color;
    private $sabor;

    public function __construct(string $color, string $sabor)
    {
        $this->color = $color;
        $this->sabor = $sabor;
    }

    public function setColor(string $color):void{

    }
    public function getColor():string {
        return "";
    }
    
    public function setSabor(string $sabor):void{
        
    }
    public function getSabor():string {
        return "";
    }
}