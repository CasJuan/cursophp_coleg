<?php

/**
 * 
 * 
 * ISP  : Interface Segregation Principle
 */


interface Maintainable {
    public function maintenance();
}

interface Salired {
    public function salired();
}

interface Feedable {
    public function feedable();
}

interface Employee extends Feedable, Salired{

}

class Human implements Employee{
    
}