<?php

require_once ("BlackJack.php");

$cards = new BlackJack();

$result = $cards->getScores(array("A", 10));

echo($result);

echo "</br>";

$winner = $cards->play(array(array("A", 9), array("J", "Q")));

echo $winner;


