<?php
/**
 * Created by PhpStorm.
 * User: deridstijn
 * Date: 4/17/18
 * Time: 1:23 PM
 */


class CharacterTest extends \PHPUnit\Framework\TestCase
{
    protected $char;
    public function initCharacter()
    {
        $char = new Character();
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
}
