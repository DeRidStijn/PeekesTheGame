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
            'unarmed', 'leather', 'iron', 'platinum'
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
    



}
