<?php
    
    class Pokemon {
    	public $name;
    	public $life;
    	public $level;
    	public $type;
        public $strength;
        public $max_life;

    	public function __construct ($name, $life, $level, $type, $strength, $max_life) {
    		$this->name = $name;
    		$this->life = $life;
    		$this->max_life = $max_life;
    		$this->level = $level;
    		$this->type = $type;
    		$this->strength = $strength;
        }

        public function attack ($target) {
            $damages = ceil($this->strength * (rand(900, 1100) / 1000));
            $target->attacked($damages);
        }

        public function attacked ($damages) {
            $this->life -= $damages;
        }
    }

$pokemon1 = new Pokemon('Carapuce', 100, 5, 'eau', 10, 100);
$pokemon2 = new Pokemon('Brindibou', 100, 5, 'vol', 10, 100);

    class Pokeball {
        public $name;
        public $level;

        public function __construct ($name, $level) {
            $this->name = $name;
            $this->level = $level;
        }

        public function capture ($pokemon) {
            $chance = ((($pokemon->max_life - $pokemon->life) / $pokemon->max_life) * (1 + ($this->level - $pokemon->level) / 25))/1;

            if ($chance >= 0.5) {
                echo 'Pokémon' . $pokemon->name . 'capturé';
            }
            else {
                echo 'Le pokémon est trop fort pour être capturé';
            }

        }
    }

$pokeball1 = new Pokeball('1', 5);

$pokemon1->attack($pokemon2);

var_dump($pokemon2);

$pokeball1->capture($pokemon1);

#var_dump($pokeball1);

