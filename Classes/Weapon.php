<?php

namespace Classes;

class Weapon /*extends item*/
{
    protected $weaponName;
    protected $damage;

    public function __construct(string $weaponName)
    {
        $this->weaponName = $weaponName;

        switch($weaponName){
            case "spear": $this->damage = 20;
            break;

            case 'bow': $this->damage = 5;
            break;

            case 'punch': $this->damage = 1;
            break;

            default:
                $this->weaponName = 'punch' &&
                $this->damage = 1;
        }
    }

    public function getWeaponName(){
        return $this->weaponName;
    }

    public function getDamage(){
        return $this->damage;
    }
}