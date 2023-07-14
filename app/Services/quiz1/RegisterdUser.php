<?php

namespace App\Services\quiz1;

use App\Interfaces\Quiz1\traffic;
use App\Models\User;

class RegisterdUser implements traffic{
    private $regiterduser;

    public function __construct($regiterduser) {
        $this->regiterduser = $regiterduser;
    }
    public function calculatetraffic($totalTraffic)
    {
        $totalTraffic = User::count();
        return $totalTraffic;
    }
}
