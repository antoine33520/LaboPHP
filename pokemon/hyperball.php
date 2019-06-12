<?php
    require('./ball.php');

    class Hyperball extends Ball {
        public function __construct () {
            $name = 'Hyperball';
            $level = 50;
            parent::__construct($name,$level);
        }
    }
$hyperball= new Hyperball();
var_dump($hyperball);
