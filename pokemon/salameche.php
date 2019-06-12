<?php
    require('./pokemon.php');

    class Salameche extends Pokemon {
        public function __construct ($level, $life = null) {
            $name = 'Salameche';
            $max_life = 100 + 5 * $level;
            $life = $life ?? $max_life;
            $type = 'feu';
            $strength = 10 + 4 * $level;

            parent::__construct($name, $max_life, $life, $level, $type, $strength);
        }

        public function level_up() {
            $life += 5;
            $strength += 4;
            $level += 1;
        }
    }

    $salameche = new Salameche(10);
    var_dump($salameche);
