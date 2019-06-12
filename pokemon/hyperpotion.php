<?php
require('./potion.php');

class Hyperpotion extends Potion {
    public function __construct () {
        $this->name = "Hyperpotion";
        $this->heal = 200;
        parent::__construct($name,$heal);
    }
} 
