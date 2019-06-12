<?php
    require('./pokemon.php');
    
    class Carapuce extends Pokemon {
        public function __construct ($level, $life = null) {
            $name = 'Carapuce';
            $max_life = 100 + 5 * $level;
            $life = $life ?? $max_life;
            $type = 'eau';
            $strength = 10 + 2 * $level;

            parent::__construct($name, $max_life, $life, $level, $type, $strength);
        }

        public function level_up() {
            $life += 9;
            $strength += 2;
            $level += 1;
        }
    }

    $carapuce = new Carapuce(10);
    var_dump($carapuce);
