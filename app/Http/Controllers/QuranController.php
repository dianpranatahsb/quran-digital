<?php

namespace App\Http\Controllers;

use App\Services\QuranService;

class QuranController extends Controller
{
    public function index(QuranService $quran){
    $surahs = $quran->getSurahs();
    return response()->json([
        'success' => true,
        'message' => 'Daftar surah berhasil diambil',
        'data' => $surahs['data'] ?? []
    ]);
}

    public function show($id, QuranService $quran)
    {
        return response()->json(
            $quran->getSurah($id)
        );
    }
}