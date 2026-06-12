<?php

namespace App\Http\Controllers;

use App\Contracts\QuranContract;

class QuranController extends Controller
{
    public function index(QuranContract $quran)
    {
        $surahs = $quran->getSurahs();

        return response()->json([
            'success' => true,
            'message' => 'Daftar surah berhasil diambil',
            'data' => $surahs['data'] ?? []
        ]);
    }

    public function show($id, QuranContract $quran)
    {
        return response()->json(
            $quran->getSurah($id)
        );
    }
}