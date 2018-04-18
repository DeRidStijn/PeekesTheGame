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
            case 'leather': $this->armorResistance = 10;
                break;
            case 'iron': $this->armorResistance = 30;
                break;
            case 'platinum': $this->armorResistance = 60;
                break;
            default:
                $this->armorName = 'leather' &&
                $this->armorResistance = 10;

        }
    }

    public function getArmorName(){
        return $this->armorName;
    }

    public function getResistance(){
        return $this->armorResistance;
    }
}