<?php

class Production
{
    public $title;
    public $lang;
    public $rating;
    public $recommended;

    function __construct(string $title, string $lang, int $rating)
    {
        $this->title = $title;
        $this->lang = $lang;
        $this->rating = $rating;
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

$prod01 = new Production("The Ark", "french", 8);
$prod01->set_recommended();

$prod02 = new Production("Jesus Wept", "german", 3);
$prod02->set_recommended();

$prod03 = new Production("Rambo 17", "spanish", 10);
$prod03->set_recommended();

$prod04 = new Production("Confused Gentlment", "british", 5);
$prod04->set_recommended();

var_dump($prod01, $prod02, $prod03, $prod04);
