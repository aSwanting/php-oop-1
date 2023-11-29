<?php

require_once __DIR__ . "/Production.php";

class Series extends Production
{
    private $season;

    function __construct(string $_title, string $_lang, float $_rating, $_season)
    {
        parent::__construct($_title,  $_lang,  $_rating);
        $this->set_season($_season);
    }

    public function set_season($_season)
    {
        $this->season = $_season;
    }

    public function get_season()
    {
        return $this->season;
    }
}
