<?php

namespace Classes;

use Interfaces\GameHandlerInterface;

class GameHandler implements GameHandlerInterface
{
    protected $characters = [];
    protected $characterTurn, $gameTurn;
    protected $char1Name, $char2Name;
    public function __construct(string $char1Name, string $char2Name)
    {
        $this->characters[$char1Name] = new Character($char1Name);
        $this->characters[$char2Name] = new Character($char2Name);
        $this->char1Name = $char1Name;
        $this->char2Name = $char2Name;
        $this->characterTurn = $char1Name;
        $this->gameTurn = 0;
    }
    //@todo: create logic for strategies and make characters able to change their strategy every 3 rounds

    public function startGame(){
        printf("The game has started \n");
        $this->attack($this->char1Name, $this->char2Name);
    }
    public function nextGameTurn(){
        $this->gameTurn += 1;
    }

    public function checkIfGameIsWon(){
        foreach ($this->characters as $char) {
            if ($char->getIsAlive() === false) {
                return strval($char->getName() . " is dead!");
            }
        }
    }

    public function attack(string $attacker, string $target){
        if ($this->characterTurn == $this->char1Name){
            $this->nextGameTurn();
            print("\n Round " . $this->gameTurn . "\n -------------------- \n \n");

        }

        $damage = $this->characters[$attacker]->getWeaponDamage();
        $this->characters[$target]->takeDamage($damage);

        print($attacker . ' attacks ' . $target . ' with '. $this->characters[$attacker]->getWeaponName() . ' for ' . $damage . " damage \n");
        $negatedDamage = ($this->characters[$target]->getArmorResistance() * 100) . '%';
        print($target . "'s " . $this->characters[$target]->getArmorName() ." negated " . $negatedDamage . " of the damage \n");
        usleep(250000); //sleep for 0.5 seconds
        print( $target . ' now has ' . $this->characters[$target]->getHealth() . " hitpoints \n");

        $this->nextCharacterTurn($target);
        usleep(250000);
        if ($this->checkIfGameIsWon() == false){
            $this->attack($target, $attacker);
        }
        else{
            echo "game won by " . $attacker ."\n";
        }
    }

    public function nextCharacterTurn(string $characterName){
        $this->characterTurn =$characterName;
    }

    public function getCharacterTurn(): string{
        return $this->characterTurn;
    }

    public function getGameTurn(): int{
        return $this->gameTurn;
    }

    public function getCharacters(){
        return $this->characters;
    }
}
