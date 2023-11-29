<?php
require_once __DIR__ . "/Models/Production.php";
require_once __DIR__ . "/Models/Movie.php";
require_once __DIR__ . "/Models/Series.php";

$productions = [
    $movie01 = new Movie("Inception", "English", 8.8, 829895144, 148),
    $movie02 = new Movie("Parasite", "Korean", 8.6, 257591776, 132),
    $movie03 = new Movie("The Love Guru", "English", 3.8, 40870564, 87),
    $movie04 = new Movie("Pan's Labyrinth", "Spanish", 8.2, 83258226, 118),
    $movie05 = new Movie("Gigli", "English", 2.4, 7266209, 121),

    $series01 = new Series("Breaking Bad", "English", 9.5, 5),
    $series02 = new Series("Dark", "German", 8.8, 3),
    $series03 = new Series("Money Heist", "Spanish", 8.3, 5),
    $series04 = new Series("Fleabag", "English", 8.7, 2),
    $series05 = new Series("Sacred Games", "Hindi", 8.6, 2),
];

var_dump($productions);
