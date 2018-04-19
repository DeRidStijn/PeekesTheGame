<?php

namespace Classes;

use Classes\Character;

class GameHandler
{
    protected $characters = [];
    protected $characterTurn, $gameTurn;
    protected $char1Name, $char2Name;
    public function __construct(string $char1Name, string $char2Name)
    {
        $this->characters[$char1Name] = new Character($char1Name, "spear", "iron");
        $this->characters[$char2Name] = new Character($char2Name, "bow", "leather");
        $this->char1Name = $char1Name;
        $this->char2Name = $char2Name;
        $this->characterTurn = $char1Name;
        $this->gameTurn = 0;
    }

    public function startGame(){
        printf("The game has started \n");
        $this->attack($this->char1Name, $this->char2Name);

    }
    public function nextGameTurn()
    {
        $this->gameTurn += 1;
    }

    public function checkIfGameIsWon()
    {
        foreach ($this->characters as $char) {
            if ($char->getIsAlive() === false) {
                return $char->getName() . " is dead!";
            }
        }
    }

    public function attack($attacker, $target){
        $damage = $this->characters[$attacker]->getWeaponDamage();
        $this->characters[$target]->takeDamage($damage);
        printf($attacker . ' attacks ' . $target . ' for ' . $damage . " damage \n");
        printf( $target . ' now has' . $this->characters[$target]->getHealth() . "hitpoints \n");
        $this->nextCharacterTurn($target);

        if ($this->checkIfGameIsWon() == false){
            $this->attack($target, $attacker);
        }
        else{
            echo "game won by" . $attacker ."\n";
        }
    }

    public function nextCharacterTurn($characterName){
        $this->characterTurn =$characterName;
    }

    public function getCharacterTurn()
    {
        return $this->characterTurn;
    }

    public function getGameTurn()
    {
        return $this->gameTurn;
    }
}
