<?php
require('./potion.php');

class Masterpotion extends Potion {
    public function __construct () {
        $this->name = "Masterpotion";
        $this->heal = null;
        parent::__construct($name,$heal);
    }
} 
