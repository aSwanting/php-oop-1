<?php

class Production
{
    public $title;
    public $lang;
    public $rating;
    public $recommended;
    public $poster;

    function __construct(string $_title, string $_lang, float $_rating, float $_id)
    {
        $this->title = $_title;
        $this->lang = $_lang;
        $this->rating = $_rating;
        $this->set_recommended($_rating);
        $this->set_poster($_id);
    }

    public function set_recommended($_rating)
    {
        if ($_rating <= 3) {
            $this->recommended = "Don't waste your time.";
        } else if ($_rating <= 6) {
            $this->recommended = "Aggressively average.";
        } else if ($_rating <= 8) {
            $this->recommended = "Highly recommend.";
        } else if ($_rating <= 10) {
            $this->recommended = "Not to be missed!";
        }
    }

    public function get_recommended()
    {
        return $this->recommended;
    }

    public function set_poster($_id)
    {
        $this->poster = "https://picsum.photos/600?random=" . $_id;
    }

    public function get_poster()
    {
        return $this->poster;
    }
}

$productions = [
    $prod01 = new Production("The Ark", "French", 2.3, 1),
    $prod02 = new Production("Jesus Wept", "German", 5.9, 2),
    $prod03 = new Production("Rambo 17", "Spanish", 7.4, 3),
    $prod04 = new Production("Confused Gentlemen", "English", 9.2, 4),
];

var_dump($productions);

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <div id="app">

        <div class="container my-5">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-xl-4">

                <?php foreach ($productions as $prod) { ?>

                    <div class="col mb-4">
                        <div class="card shadow h-100">

                            <img class="card-img-top" src="<?= $prod->get_poster() ?>">

                            <div class="card-body">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item"><span class="fw-bold">Title: </span><?= $prod->title ?></li>
                                    <li class="list-group-item"><span class="fw-bold">Language: </span><?= $prod->lang ?></li>
                                    <li class="list-group-item"><span class="fw-bold">Rating: </span><?= $prod->rating ?> / 10</li>
                                    <li class="list-group-item"><span class="fw-bold">Recommendation: </span><?= $prod->get_recommended() ?></li>
                                </ul>
                            </div>

                        </div>
                    </div>

                <?php } ?>

            </div>
        </div>

    </div>
</body>

</html>