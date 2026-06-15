<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contracts\PrayerContract;

class PrayerController extends Controller
{
    public function index(Request $request, PrayerContract $prayer)
    {
        return response()->json(
            $prayer->getPrayerTimes($request->city)
        );
    }
}