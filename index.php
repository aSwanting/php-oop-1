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

// var_dump($productions);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Production Listings</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>

    <main class="app-main py-5">
        <div class="container">
            <div class="grid-wrapper">

                <?php foreach ($productions as $prod) { ?>

                    <div class="card grid-item shadow">

                        <div class="card-header">
                            <h2 class="fs-4 text-center fw-semibold"> <?= $prod->get_title() ?> </h2>
                        </div>

                        <div class="card-body">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item"> <span class="fw-medium">Language: </span><?= $prod->get_lang() ?> </li>
                                <li class="list-group-item"> <span class="fw-medium">Rating: </span><?= $prod->get_rating() ?> / 10</li>
                                <li class="list-group-item"> <span class="fw-medium">Recommendation: </span><?= $prod->get_recommended() ?> </li>

                                <?php if (get_class($prod) == "Movie") { ?>

                                    <li class="list-group-item"> <span class="fw-medium">Profit: </span><?= $prod->get_profit() ?> </li>
                                    <li class="list-group-item"> <span class="fw-medium">Duration: </span><?= $prod->get_duration() ?> minutes</li>

                                <?php } else if (get_class($prod) == "Series") { ?>

                                    <li class="list-group-item"> <span class="fw-medium">Seasons: </span><?= $prod->get_season() ?> </li>

                                <?php } ?>

                            </ul>
                        </div>

                    </div>

                <?php } ?>

            </div>
        </div>
    </main>

</body>

</html>