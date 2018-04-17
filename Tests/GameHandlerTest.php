<?php
/*spl_autoload_register(function($classname) {
    require_once __DIR__ . '/PHPUnit/* ';
    echo "Want to load $classname.\n";
    throw new Exception("Unable to load $classname.");
    $file = __DIR__ . "/Classes" . "{$classname}.php";
    if (file_exists($file)) {
        require_once($file);
    }
});*/

class GameHandlerTest extends \PHPUnit\Framework\TestCase
{
    protected $gameHandler;
    public function setup(){
        $this->gameHandler = new GameHandler('joske', 'jefke');
    }
    /**
     * @test
     */
    public function otherCharactersTurn(){
        $this->gameHandler->nextCharacterTurn();
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

    /**
     * @test
     */
    public function characterCanWinTheGame(){

    }

}
