<?php

namespace App\Contracts;

interface PrayerContract
{
    public function getPrayerTimes(string $city);
}