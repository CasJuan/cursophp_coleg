<?php


/**
 * 
 * LSP : Liskov Sustitucion Principle
 */

interface Bird {
    public function eat();

    public function tweet();
    

};

interface Fliying {
    public function fly();
}

interface Swiming {
    public function swin();
}

class Sparrow implements Bird,Fliying {
    public function eat(){

    }

    public function fly()
    {
        
    }

    public function tweet()
    {
        
    }
}

class Pengiun implements Bird,Swiming {
    public function eat(){

    }

    public function swin()
    {
        
    }

    public function tweet()
    {
        
    }

}