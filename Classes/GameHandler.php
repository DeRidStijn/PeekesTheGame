<?php

namespace Classes;

use Classes\Character;

class GameHandler
{
    protected $characters = [];
    protected $characterTurn, $gameTurn;

    public function __construct(string $char1Name, string $char2Name)
    {
        $this->characters[$char1Name] = new Character($char1Name, "spear", "iron");
        $this->characters[$char2Name] = new Character($char2Name, "bow", "leather");
        $this->characterTurn = $char1Name;
        $this->gameTurn = 0;
    }



    public function nextGameTurn()
    {
        $this->gameTurn += 1;
    }

    public function getCharacterTurn()
    {
        return $this->characterTurn;
    }

    public function getGameTurn()
    {
        return $this->gameTurn;
    }

    public function checkIfGameIsWon()
    {
        foreach ($this->characters as $char) {
            if ($char->getIsAlive === false) {
                return $char->getName() . " is dead!";
            }
        }
    }

    public function attack($attacker, $target){
        $damage = $this->characters[$attacker]->attack();
        $this->characters[$target]->takeDamage($damage);
        $this->nextCharacterTurn($target);

    }

    public function nextCharacterTurn($characterName){
        $this->characterTurn =$characterName;
    }
}
