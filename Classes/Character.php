<?php

class Character
{
    protected $health;
    protected $weapon;
    protected $armor;

    public function __construct(int $health, Weapon $weapon, Armor $armor)
    {
        $this->health = $health;
        $this->weapon = new Weapon($weapon);
        $this->armor = new Armor($armor);
    }

    public function getHealth(){
        return $this->health;
    }

    public function takeDamage($damage){
        $this->health -= $damage;
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

}