<?php

namespace Classes;

class Armor extends Item
{
    use \Traits\RandomDescriptionGenerator;
    protected $armorResistance;

    public function __construct($armorName = "", $armorResistance = null)
    {
        parent::__construct($armorName);
        $this->itemName = $armorName;
        $this->armorResistance = $armorResistance;
        if ($armorName == ""){
            $this->itemName = $this->getGenerateRandomDescription('defence');
        }
        if ($armorResistance == null){
            $this->armorResistance = (rand(0,60)) / 100;
        }
    }

    public function getArmorName(): string{
        return $this->itemName;
    }

    public function getResistance(): float{
        return $this->armorResistance;
    }
}