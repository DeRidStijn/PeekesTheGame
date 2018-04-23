<?php

include_once('autoload.php');
print strtoupper( \Classes\GameHandler::printWelcomeWord()) . " \n";
$gameHandler = new \Classes\GameHandler('joske', 'jefke') ;
$gameHandler->startGame();
