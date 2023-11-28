<?php

class Production
{
    public $title;
    public $lang;
    public $rating;
    public $recommended;
    public static $poster = "https://picsum.photos/200";

    function __construct(string $title, string $lang, int $rating)
    {
        $this->title = $title;
        $this->lang = $lang;
        $this->rating = $rating;
        $this->set_recommended();
    }

    function set_recommended()
    {
        if ($this->rating > 6) {
            $this->recommended = "To watch";
        } else {
            $this->recommended = "Would Skip";
        }
    }

    function get_recommended()
    {
        return $this->recommended;
    }
}

$productions = [
    $prod01 = new Production("The Ark", "French", 8),
    $prod02 = new Production("Jesus Wept", "German", 3),
    $prod03 = new Production("Rambo 17", "Spanish", 10),
    $prod04 = new Production("Confused Gentlemen", "English", 5),
];

// var_dump($productions);

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
            <div class="row">

                <?php foreach ($productions as $prod) { ?>

                    <div class="col mb-3">
                        <div class="card shadow" style="width: 18rem;">

                            <img class="card-img-top" src="<?= $prod::$poster ?>">

                            <div class="card-body">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item"><span class="fw-bold">Title: </span><?= $prod->title ?></li>
                                    <li class="list-group-item"><span class="fw-bold">Language: </span><?= $prod->lang ?></li>
                                    <li class="list-group-item"><span class="fw-bold">Rating: </span><?= $prod->rating ?></li>
                                    <li class="list-group-item"><span class="fw-bold">Recommendation: </span><?= $prod->recommended ?></li>
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