<?php
require('./potion.php');

class Normalpotion extends Potion {
    public function __construct () {
        $this->name = "Normalpotion";
        $this->heal = 20;
        parent::__construct($name,$heal);
    }
} 
