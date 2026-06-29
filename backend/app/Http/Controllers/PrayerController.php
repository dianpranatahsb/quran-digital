<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contracts\PrayerContract;

class PrayerController extends Controller
{
    public function index(Request $request, PrayerContract $prayer)
    {
        $city = $request->city ?? 'Banda Aceh';

        return response()->json(
            $prayer->getPrayerTimes($city)
        );
    }
}