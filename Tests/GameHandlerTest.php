<?php
/**
 * Created by PhpStorm.
 * User: deridstijn
 * Date: 4/17/18
 * Time: 2:00 PM
 */


class GameHandlerTest extends \PHPUnit\Framework\TestCase
{
    protected $gameHandler;
    public function initGameController(){
        $this->gameHandler = new GameHandler('joske', 'jefke');
    }

    public function otherCharactersTurn(){
        $this->gameHandler->nextCharacterTurn();
        $nextPlayer = $this->gameHandler->getPlayersTurn();
        $expectedResult = 'jefke';
        $this->assertEquals($expectedResult, $nextPlayer, "the next character does not seem to be jefke");
    }

    public function nextGameTurn(){
        $this->gameHandler->nextGameTurn();
        $turn = $this->gameHandler->getGameTurn();
        $this->assertEquals(1, $turn, "the next turn does not seem to be turn 1");
    }

}
