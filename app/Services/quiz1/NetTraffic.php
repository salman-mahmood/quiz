<?php

namespace App\Services\quiz1;

use App\Interfaces\Quiz1\traffic;

class NetTraffic implements traffic{
    private $nettraffic;

    public function __construct($nettraffic) {
        $this->nettraffic = $nettraffic;
    }
    public function calculatetraffic($totalTraffic)
    {
        return $this->nettraffic;
    }
}
