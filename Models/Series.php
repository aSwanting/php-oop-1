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

    public function get_props_as_assoc()
    {
        $props = parent::get_props_as_assoc();
        $props["Seasons"] = $this->get_seasons();
        return $props;
    }
}
