<?php

namespace App\Services\quiz1;

use App\Interfaces\Quiz1\traffic;

class AppTraffic
{
    private $traffic;

    public function checkTraffic(traffic $traffic)
    {
        $this->traffic = $traffic;
    }

    public function calculateTotalTraffic($totalTraffic)
    {
        $traffic = $this->traffic->calculatetraffic($totalTraffic);
        return $traffic;
    }
}
