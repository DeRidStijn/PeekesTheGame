<?php

namespace Classes;

class Weapon extends Item
{
    use \Traits\RandomDescriptionGenerator;
    protected $damage;

    public function __construct(string $weaponName)
    {
        $weaponName = $this->getGenerateRandomDescription('attack');
        parent::__construct($weaponName);

        $this->damage = rand(1,30);
    }

    public function getDamage(): float{
        return $this->damage;
    }
}