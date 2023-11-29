<?php

class Production
{
    private $title;
    private $lang;
    private $rating;
    private $recommended;

    function __construct(string $_title, string $_lang, float $_rating)
    {
        $this->set_title($_title);
        $this->set_lang($_lang);
        $this->set_rating($_rating);
        $this->set_recommended();
    }

    public function set_title($_title)
    {
        if (trim($_title)) {
            $this->title =  $_title;
        } else {
            $this->title = "Invalid Title";
        }
    }

    public function get_title()
    {
        return $this->title;
    }

    public function set_lang($_lang)
    {
        if (trim($_lang)) {
            $this->lang =  $_lang;
        } else {
            $this->lang = "Invalid Language";
        }
    }

    public function get_lang()
    {
        return $this->lang;
    }

    public function set_rating($_rating)
    {
        if (is_numeric($_rating) && $_rating >= 0 && $_rating <= 10) {
            $this->rating =  $_rating;
        } else {
            $this->rating = null;
        }
    }

    public function get_rating()
    {
        return $this->rating;
    }

    public function set_recommended()
    {
        if (!$this->rating) {
            $this->recommended = "Nobody Knows";
        } else if ($this->rating <= 3) {
            $this->recommended = "Don't waste your time.";
        } else if ($this->rating <= 6) {
            $this->recommended = "Aggressively average.";
        } else if ($this->rating <= 8) {
            $this->recommended = "Highly recommend.";
        } else if ($this->rating <= 10) {
            $this->recommended = "Not to be missed!";
        }
    }

    public function get_recommended()
    {
        return $this->recommended;
    }

    public function print_properties()
    {
        $props = [
            "Language" => $this->get_lang(),
            "Rating" => $this->get_rating(),
            "Recommendation" => $this->get_recommended()
        ];

        foreach ($props as $key => $prop) {
            echo "<li class='list-group-item'> <span class='fw-medium'>{$key}: </span>{$prop}</li>";
        }
    }
}
