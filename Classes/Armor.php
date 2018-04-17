<?php
/**
 * Created by PhpStorm.
 * User: deridstijn
 * Date: 4/17/18
 * Time: 1:57 PM
 */

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

    public function getArmorResistance(){
        return $this->armorResistance;
    }
}