<?php

namespace Classes;

class Armor extends Item
{
    use \Traits\RandomDescriptionGenerator;
    protected $armorResistance;

    public function __construct()
    {
        $armorName = $this->getGenerateRandomDescription('defence');
        parent::__construct($armorName);

        $this->armorResistance = (rand(0,60)) / 100;
    }

    public function getArmorName(): string{
        return $this->itemName;
    }

    public function getResistance(): float{
        return $this->armorResistance;
    }
}