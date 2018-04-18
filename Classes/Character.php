<?php

namespace Classes;

class Character
{
    protected $health;
    protected $weapon;
    protected $armor;
    protected $isAlive;
    public function __construct($name,  $weapon,  $armor)
    {
        $this->health = 100;
        $this->isAlive = true;
        $this->weapon = new Weapon($weapon);
        $this->armor = new Armor($armor);
    }

    public function getHealth(){
        return $this->health;
    }

    public function takeDamage($damage){
        $damageThrougArmor = $damage * (1 - $this->armor->getResistance());
        $this->health -= $damageThrougArmor;
        if ($this->health <= 0){
            $this->isAlive = false;
        }
    }

    public function attack(){
        return $this->weapon->getDamage();
    }

    public function switchWeapon($weaponName){
        $this->weapon = new Weapon($weaponName);
    }

    public function switchArmor($armorName){
        $this->armor = new Armor($armorName);
    }

    public function getArmorName(){
        return $this->getArmorName();
    }

    public function getArmorResistance(){
        return $this->armor->getResistance();
    }

    public function getIsAlive(){
        return $this->isAlive;
    }

}