<?php
require_once "./models/movie.php";

$trinity = new Movie ("Lo chiamavon trinità", "Two brothers, Trinity and Bambino, team up to protect a group of farmers from a ruthless gang of bandits." );

$oddsAndEvens = new Movie ("Pari e dispari", "Two brothers, Johnny and Charlie, get involved in a betting scam and must outsmart their opponents to win the prize money.");


var_dump($trinity);
var_dump($oddsAndEvens);