<?php

class Production
{
    public $title;
    public $lang;
    public $rating;
    public $recommended;
    public $poster;
    public $id;

    function __construct(string $_title, string $_lang, float $_rating, int $_id)
    {
        $this->title = $_title;
        $this->lang = $_lang;
        $this->rating = $_rating;
        $this->set_recommended($_rating);
        $this->id = $_id;
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
