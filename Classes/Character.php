<?php

namespace Classes;
use Traits\RandomDescriptionGenerator;
class Character
{

    use RandomDescriptionGenerator;
    protected $name;
    protected $health;
    protected $weapon;
    protected $armor;
    protected $isAlive;
    public function __construct(string $name,  string $weaponName, string  $armorName)
    {

        $this->name = $name;
        $this->health = 50;
        $this->isAlive = true;
        $this->weapon = new Weapon($weaponName, 'patat');
        $this->armor = new Armor($armorName, 'soep');
    }

    public function takeDamage($damage){
        $damageThrougArmor = $damage * (1 - $this->armor->getResistance());
        $this->health -= $damageThrougArmor;
        if ($this->health <= 0){
            $this->isAlive = false;
        }
    }

    public function switchWeapon(string $weaponName, string $weaponDescription){
        $this->weapon = new Weapon($weaponName, $weaponDescription);
    }

    public function switchArmor(string $armorName, string $armorDescription){
        $this->armor = new Armor($armorName, $armorDescription);
    }
    public function setHealth($health){
        $this->health = $health;
    }
    public function getWeaponDamage(): float{
        return $this->weapon->getDamage();
    }
    public function getWeaponName(): string{
        return $this->weapon->getItemName();
    }
    public function getArmorName(): string{
        return $this->armor->getItemName();
    }

    public function getArmorResistance(): float{
        return $this->armor->getResistance();
    }

    public function getIsAlive(): bool{
        return $this->isAlive;
    }

    public function getName(): string{
        return $this->name;
    }

    public function getHealth(): float{
        return $this->health;
    }

}