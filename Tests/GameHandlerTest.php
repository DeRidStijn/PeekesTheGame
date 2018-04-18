<?php

namespace Tests;

use Classes\GameHandler;

include_once(__DIR__.'/../autoload.php');

class GameHandlerTest extends \PHPUnit\Framework\TestCase
{
    protected $gameHandler;
    public function setUp(){
        $this->gameHandler = new GameHandler('joske', 'jefke');
    }
    /**
     * @test
     */
    public function gameCanSwitchCharacterAfterSomeoneAttacks(){
        $this->gameHandler->attack('joske', 'jefke');
        $nextPlayer = $this->gameHandler->getCharacterTurn();
        $expectedResult = 'jefke';
        $this->assertEquals($expectedResult, $nextPlayer, "the next character does not seem to be jefke");
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
    public function characterCanAttackDuringHisTurn(){

    }

    /**
     * @test
     */
    public function characterCanChangeStrategyOnAThirdTurn(){
        $this->gameHandler->changeStrategy('defensive');
        $result = $this->getStrategy('joske');
        $expectedResult = 'defensive';
        $this->assertEquals($expectedResult, $result, "the character did not switch to a defensive strategy");
    }



}
