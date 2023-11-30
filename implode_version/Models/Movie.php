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
        $this->print_properties();
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
        $props = parent::print_properties();
        $newProps = [
            "Profit" => $this->get_profit(),
            "Duration" => $this->get_duration(),
        ];
        $props = array_merge($props, $newProps);
        return $props;
    }
}
