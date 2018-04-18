<?php

namespace Classes;

class Armor /*extends item*/
{
    protected $armorName;
    protected $armorResistance;

    public function __construct($armorName)
    {
        $this->armorName = $armorName;
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
                $this->armorName = 'unarmed' &&
                $this->armorResistance = 0;

        }
    }

    public function getArmorName(){
        return $this->armorName;
    }

    public function getResistance(){
        return $this->armorResistance;
    }
}