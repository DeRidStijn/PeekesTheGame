<?php

namespace Classes;

class Weapon /*extends item*/
{
    protected $weaponName;
    protected $damage;

    public function __construct($weaponName, $damage)
    {
        $this->weaponName = $weaponName;
        $this->damage = $damage;
    }

    public function getWeaponName(){
        return $this->weaponName;
    }

    public function getDamage(){
        return $this->damage;
    }
}