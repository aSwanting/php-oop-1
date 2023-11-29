<?php
require_once __DIR__ . "/Models/Production.php";
require_once __DIR__ . "/Models/Movie.php";
require_once __DIR__ . "/Models/Series.php";

$productions = [
    $movie01 = new Movie("movie01", "lang", 8, 0),
    $movie02 = new Movie("movie02", "lang", 2, 0),
    $movie03 = new Movie("movie03", "lang", 5, 0),
    $movie04 = new Movie("movie04", "lang", 1, 0),
    $movie05 = new Movie("movie05", "lang", 10, 0),

    $series01 = new Series("series01", "lang", 8, 0),
    $series02 = new Series("series02", "lang", 8, 0),
    $series03 = new Series("series03", "lang", 8, 0),
    $series04 = new Series("series04", "lang", 8, 0),
    $series05 = new Series("series05", "lang", 8, 0),
];

var_dump($productions);
