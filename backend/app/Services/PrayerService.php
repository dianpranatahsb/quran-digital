<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class PrayerService
{
    public function getPrayerTimes($city)
    {
        return Http::get('https://api.aladhan.com/v1/timingsByCity',['city' => $city,'country' => 'Indonesia'])->json();
    }
}