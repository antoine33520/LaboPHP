<?php
    require_once('./usable.php');
    abstract class Ball implements usable {
        protected $name;
        protected $level;

        public function __construct ($name, $level) {
            $this->name = $name;
            $this->level = $level;
        }

        public function capture ($pokemon) {
            $chance = ((($pokemon->max_life - $pokemon->life) / $pokemon->max_life) * (1 + ($this->level - $pokemon->level) / 25))/1;

            if ((rand(0,1000)/1000) <= $chance) {
                // echo 'Pokémon' . $pokemon->name . 'capturé';
                return TRUE;
            }
            else {
                // echo 'Le pokémon est trop fort pour être capturé';
                return False;
            }

        }

        public function use($pokemon) {
            $this->capture($pokemon);
        }
    }
