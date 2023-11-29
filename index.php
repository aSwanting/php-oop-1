<?php
require_once __DIR__ . "/Models/Production.php";
require_once __DIR__ . "/Models/Movie.php";
require_once __DIR__ . "/Models/Series.php";

$productions = [
    $movie01 = new Movie("movie01", "lang", 8),
    $movie02 = new Movie("movie02", "lang", 2),
    $movie03 = new Movie("movie03", "lang", 5),
    $movie04 = new Movie("movie04", "lang", 1),
    $movie05 = new Movie("movie05", "lang", 10),

    $series01 = new Series("series01", "lang", 2),
    $series02 = new Series("series02", "lang", 4),
    $series03 = new Series("series03", "lang", 16),
    $series04 = new Series("series04", "lang", 1),
    $series05 = new Series("series05", "lang", 9),
];

var_dump($productions);
