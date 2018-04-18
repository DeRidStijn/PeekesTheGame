<?php

namespace Classes;

use Classes\Character;

class GameHandler
{
    protected $characters = [];
    protected $characterTurn, $gameTurn;
    public function __construct(string $char1Name, string $char2Name)
    {
        $this->characters ['character1'] = new Character($char1Name);
        $this->characters ['character2'] = new Character($char2Name);
        $this->characterTurn = 1;
        $this->gameTurn = 0;
    }

    public function otherCharactersTurn(){
        if ($this->checkIfGameIsWon() === true){
            echo 'tis gedaan';
        }

        else{
            if ($this->characterTurn == 1){
                $this->characterTurn = 2;
            }
            else{
                $this->characterTurn = 1;
            }
        }
    }

    public function nextGameTurn(){
        $this->gameTurn += 1;
    }

    public function checkIfGameIsWon(){
        foreach ($this->characters as $char){
            if($char->checkHealth >= 0) {
                return true;
            }
            else{
                return false;
            }
        }
    }
}