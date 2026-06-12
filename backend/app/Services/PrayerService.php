<?php

namespace App\Services;

use App\Contracts\PrayerContract;
use Illuminate\Support\Facades\Http;

class PrayerService implements PrayerContract
{
    public function getPrayerTimes(string $city)
    {
        return Http::get('https://api.aladhan.com/v1/timingsByCity',['city' => $city,'country' => 'Indonesia'])->json();
    }
}
        