<?php

namespace Classes;

class Weapon extends Item
{
    use \Traits\RandomDescriptionGenerator;
    protected $damage;

    public function __construct($weaponName = "", $weaponDamage = null)
    {
        parent::__construct($weaponName);
        $this->itemName = $weaponName;
        $this->damage = $weaponDamage;
        if($weaponName == ""){
            $this->itemName = $this->getGenerateRandomDescription('attack');
        }
        if($weaponDamage == null || $weaponDamage == 0){
            $this->damage = rand(1,30);
        }
    }

    public function getDamage(): float{
        return $this->damage;
    }
}
