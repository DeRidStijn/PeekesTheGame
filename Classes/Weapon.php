<?php
/**
 * Created by PhpStorm.
 * User: deridstijn
 * Date: 4/17/18
 * Time: 1:56 PM
 */

class Weapon /*extends item*/
{
    protected $weaponName;
    protected $damage;

    public function __construct($weaponName, $damage)
    {
        $this->weaponName = $weaponName;
        $this->damage = $damage;
    }

    public function getWeaponName(){
        return $this->weaponName;
    }

    public function getDamage(){
        return $this->damage;
    }
}