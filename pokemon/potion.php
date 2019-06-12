<?php
include('./usable.php');

class Potion implements usable {
    protected $name;
    protected $heal;

    public function __construct ($name, $heal) {
        $this->name = $name;
        $this->heal = $heal;
    }

    public function healing ($target) {
        if ($this->name == 'Masterpotion') {
            $target->life = $target->max_life;
        } else {
            $target->life += $this->heal;
            if ($target->life > $target->max_life) {
                $target->life = $target->max_life;
            };
        }
    }
}
