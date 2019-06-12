<?php
    require_once('./usable.php');
    abstract class Pokemon implements usable { 
        protected $name;
        protected $max_life;
        protected $life;
        protected $level;
        protected $type;
        protected $strength;

        public function __construct ($name, $max_life, $life, $level, $type, $strength) {
            $this->name = $name;
            $this->max_life = $max_life;
            $this->life = $life;
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

        abstract function level_up ();
    }

