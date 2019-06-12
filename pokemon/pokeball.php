<?php
    require('./ball.php');

    class Pokeball extends Ball {
        public function __construct () {
            $name = 'Pokeball';
            $level = 10;
            parent::__construct($name,$level);
        }
    }
$pokeball= new Pokeball();
var_dump($pokeball);
