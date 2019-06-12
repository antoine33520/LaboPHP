<?php
    require_once('./pokemon.php');

    class Bulbizarre extends Pokemon {
        public function __construct ($level, $life = null) {
            $name = 'Bulbizarre';
            $max_life = 100 + 7 * $level;
            $life = $life ?? $max_life;
            $type = 'plante';
            $strength = 10 + 3 * $level;

            parent::__construct($name, $max_life, $life, $level, $type, $strength);
        }

        public function level_up() {
            $life += 7;
            $strength += 3;
            $level += 1;
        }
    }
    
    $bulbizarre = new Bulbizarre(6);
    var_dump($bulbizarre);
