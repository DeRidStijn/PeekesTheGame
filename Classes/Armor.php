<?php

namespace Classes;

class Armor extends Item
{
    protected $armorName;
    protected $armorResistance;

    public function __construct(string $armorName, string $armorDescription)
    {
        parent::__construct($armorName, $armorDescription);

        switch ($armorName){
            case 'unarmed': $this->armorResistance = 0;
                break;
            case 'leather': $this->armorResistance = 0.10;
                break;
            case 'iron': $this->armorResistance = 0.30;
                break;
            case 'platinum': $this->armorResistance = 0.60;
                break;
            default:
                $this->itemName = 'unarmed' &&
                $this->armorResistance = 0;

        }
    }

    public function getArmorName(): string{
        return $this->itemName;
    }

    public function getResistance(): float{
        return $this->armorResistance;
    }
}