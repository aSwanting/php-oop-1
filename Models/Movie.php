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
        $formatted_profit = number_format($_profit);
        $this->profit = "$" . $formatted_profit;
    }

    public function get_profit()
    {
        return $this->profit;
    }

    public function set_duration($_duration)
    {
        $this->duration = $_duration . " minutes";
    }

    public function get_duration()
    {
        return $this->duration;
    }

    public function print_properties()
    {
        parent::print_properties();
        $props = [
            "Profit" => $this->get_profit(),
            "Duration" => $this->get_duration(),
        ];

        foreach ($props as $key => $prop) {
            echo "<li class='list-group-item'> <span class='fw-medium'>{$key}: </span>{$prop}</li>";
        }
    }
}
