<?php
namespace Interfaces;

interface GameHandlerInterface{
    public function spawnRandomWeapon(): string;
    public function spawnRandomArmor(): string;

    public function startGame();
    public function nextGameTurn();
    public function checkIfGameIsWon();

    public function attack(string $attacker, string $target);
    public function nextCharacterTurn(string $character);

    public function getCharacterTurn(): string;
    public function getGameTurn(): int;
    public function getCharacters();

}