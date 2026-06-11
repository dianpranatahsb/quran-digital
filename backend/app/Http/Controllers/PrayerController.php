<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\PrayerService;

class PrayerController extends Controller{
    public function index(Request $request, PrayerService $prayer){
        return response()->json($prayer->getPrayerTImes($request->city));
    }
}
