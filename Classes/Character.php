<?php

declare(strict_types=1);
namespace Classes;
class Character
{

    protected $name;
    protected $health;
    protected $weapon;
    protected $armor;
    protected $isAlive;
    public function __construct(string $name)
    {

        $this->name = $name;
        $this->health = 50;
        $this->isAlive = true;
        $this->weapon = new Weapon();
        $this->armor = new Armor();
    }

    public function takeDamage($damage){

        $damageThrougArmor = $damage * (1 - $this->armor->getResistance());
        $this->health -= $damageThrougArmor;
        if ($this->health <= 0){
            $this->health = 0;
            $this->isAlive = false;
        }
    }

    public function switchWeapon(string $weaponName, float $weaponDamage){
        $this->weapon = new Weapon($weaponName, $weaponDamage);
    }

    public function switchArmor(string $armorName, float $armorResistance){
        $this->armor = new Armor($armorName, $armorResistance);
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
