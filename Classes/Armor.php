<?php

namespace Classes;

class Armor /*extends item*/
{
    protected $armorName;
    protected $armorResistance;

    public function __construct($armorName, $armorResistance)
    {
        $this->armorName = $armorName;
        $this->armorResistance = $armorResistance;
    }

    public function getArmorName(){
        return $this->armorName;
    }

    public function getResistance(){
        return $this->armorResistance;
    }
}