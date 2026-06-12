<?php

namespace App\Services;

use App\Contracts\QuranContract;
use Illuminate\Support\Facades\Http;

class QuranService implements QuranContract
{
    private string $baseUrl = 'https://api.alquran.cloud/v1';

    public function getSurahs()
    {
        $response = Http::get(
            $this->baseUrl . '/surah'
        );

        if (!$response->successful()) {
            return [
                'success' => false,
                'message' => 'Gagal mengambil data surah'
            ];
        }

        return $response->json();
    }

    public function getSurah(int $id)
    {
        return Http::get(
            $this->baseUrl . "/surah/{$id}"
        )->json();
    }
}