<?php

namespace Tests;

use Classes\GameHandler;

include_once(__DIR__.'/../autoload.php');

class GameHandlerTest extends \PHPUnit\Framework\TestCase
{
    /** @var GameHandler */
    protected $gameHandler;
    protected $allowedWeapons;
    protected $allowedArmor;
    public function setUp(){
        $this->gameHandler = new GameHandler('joske', 'jefke');
        $this->allowedWeapons = [
            'punch', 'spear', 'bow'
        ];
        $this->allowedArmor = [
            'leather', 'iron', 'platinum'
        ];
    }

    /**
     * @test
     */
    public function nextGameTurn(){
        $this->gameHandler->nextGameTurn();
        $turn = $this->gameHandler->getGameTurn();
        $this->assertEquals(1, $turn, "the next turn does not seem to be turn 1");
    }

    /**
     * @test
     */
    public function randomWeaponSpawnsOneOfTheAllowedWeapons(){
        $characters = $this ->gameHandler->getCharacters();
        foreach ($characters as $char){
            $this->assertContains($char->getWeaponName(), $this->allowedWeapons,
                "the random weapon is not part of the allowed weapons list");
        }
    }
    /**
     * @test
     */
    public function randomArmorSpawnsOneOfTheAllowArmors(){
        $character = $this->gameHandler->getCharacters();
        foreach ($character as $char){
            $this->assertContains($char->getArmorName(), $this->allowedArmor);
        }
    }
 


}
