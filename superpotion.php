<?php
require('./potion.php');

class Superpotion extends Potion {
    public function __construct () {
        $this->name = "Superpotion";
        $this->heal = 50;
        parent::__construct($name,$heal);
    }
} 
