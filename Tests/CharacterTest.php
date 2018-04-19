<?php
namespace Tests;
use Classes\Character;
include_once(__DIR__.'/../autoload.php');

class CharacterTest extends \PHPUnit\Framework\TestCase
{
    protected $char;
    public function setUp()
    {
        $this->char = new Character('joske', 'bow', 'unarmed');
    }

    /**
     * @test
     */
    public function characterCanTakeDamage(){
        $this->char->takeDamage(15);
        $result = $this->char->getHealth();
        $expectedResult = 85;
        $this->assertSame($expectedResult, $result, "the character did not have 85 hp after being hit 15");
    }

    /**
     * @test
     */
    public function characterCanSwitchWeapon(){
        $this->char->switchWeapon('spear');
        $result = $this->char->getWeaponDamage();
        $expectedResult = 20;
        $this->assertSame($expectedResult, $result, "the attack didn't do 20 damage, so he is not wielding a spear");
    }

    /**
     * @test
     */
    public function characterCanSwitchArmor(){
        $this->char->switchArmor('iron');
        $result = $this->char->getArmorResistance();
        $expectedResult = 0.3;
        $this->assertEquals($expectedResult, $result, "the get armor did not return 30, so he is not wearing iron armor");
    }

    /**
     * @test
     */
    public function charactersArmorWorks(){
        $this->char->switchArmor('iron');
        $this->char->takeDamage(100);
        $result = $this->char->getHealth();
        $expectedResult = 30;
        $this->assertEquals($expectedResult, $result, "the armor did not block 30% of the damage");
    }

    /**
     * @test
     */
    public function characterCanDie(){
        $this->char->takeDamage(100);
        $result = $this->char->getIsAlive();
        $this->assertFalse($result, "the character gives true to isAlive so is not dead");
    }
}
