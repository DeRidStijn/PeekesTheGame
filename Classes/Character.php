<?php

namespace Classes;

class Character
{
    protected $name;
    protected $health;
    protected $weapon;
    protected $armor;
    protected $isAlive;
    public function __construct($name,  $weapon,  $armor)
    {
        $this->name = $name;
        $this->health = 50;
        $this->isAlive = true;
        $this->weapon = new Weapon($weapon);
        $this->armor = new Armor($armor);
    }

    public function takeDamage($damage){
        $damageThrougArmor = $damage * (1 - $this->armor->getResistance());
        $this->health -= $damageThrougArmor;
        if ($this->health <= 0){
            $this->isAlive = false;
        }
    }

    public function switchWeapon($weaponName){
        $this->weapon = new Weapon($weaponName);
    }

    public function switchArmor($armorName){
        $this->armor = new Armor($armorName);
    }
    public function setHealth($health){
        $this->health = $health;
    }
    public function getWeaponDamage(){
        return $this->weapon->getDamage();
    }
    public function getWeaponName(){
        return $this->weapon->getWeaponName();
    }
    public function getArmorName(){
        return $this->armor->getArmorName();
    }

    public function getArmorResistance(){
        return $this->armor->getResistance();
    }

    public function getIsAlive(){
        return $this->isAlive;
    }

    public function getName(){
        return $this->name;
    }

    public function getHealth(){
        return $this->health;
    }

}