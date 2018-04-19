<?php

namespace Classes;

class Weapon extends Item
{
    protected $damage;

    public function __construct(string $weaponName, string $weaponDescription)
    {
        parent::__construct($weaponName, $weaponDescription);

        switch($weaponName){
            case "spear": $this->damage = 20;
            break;

            case 'bow': $this->damage = 5;
            break;

            case 'punch': $this->damage = 1;
            break;

            default:
                $this->itemName = 'punch' &&
                $this->damage = 1;
        }
    }

    public function getDamage(): float{
        return $this->damage;
    }
}