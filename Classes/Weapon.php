<?php

namespace Classes;

class Weapon extends Item
{
    use \Traits\RandomDescriptionGenerator;
    protected $damage;

    public function __construct()
    {
        $weaponName = $this->getGenerateRandomDescription('attack');
        parent::__construct($weaponName);

        $this->damage = rand(1,30);
    }

    public function getDamage(): float{
        return $this->damage;
    }
}