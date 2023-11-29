<?php

require_once __DIR__ . "/Production.php";

class Series extends Production
{
    private $seasons;

    function __construct(string $_title, string $_lang, float $_rating, $_seasons)
    {
        parent::__construct($_title,  $_lang,  $_rating);
        $this->set_season($_seasons);
    }

    public function set_season($_seasons)
    {
        $this->seasons = $_seasons;
    }

    public function get_seasons()
    {
        return $this->seasons;
    }

    public function print_properties()
    {
        parent::print_properties();
        $props = ["Seasons" => $this->get_seasons(),];

        foreach ($props as $key => $prop) {
            echo "<li class='list-group-item'> <span class='fw-medium'>{$key}: </span>{$prop}</li>";
        }
    }
}
