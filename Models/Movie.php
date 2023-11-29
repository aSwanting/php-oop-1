<?php

require_once __DIR__ . "/Production.php";

class Movie extends Production
{
    private $profit;
    private $duration;

    function __construct(string $_title, string $_lang, float $_rating, $_profit, $_duration)
    {
        parent::__construct($_title,  $_lang,  $_rating);
        $this->set_profit($_profit);
        $this->set_duration($_duration);
    }

    public function set_profit($_profit)
    {
        $this->profit = $_profit;
    }

    public function get_profit()
    {
        return $this->profit;
    }

    public function set_duration($_duration)
    {
        $this->duration = $_duration;
    }

    public function get_duration()
    {
        return $this->duration;
    }
}
