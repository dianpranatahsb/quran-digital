<?php

namespace Tests\Feature;

use Tests\TestCase;

class SurahApiResponseTest extends TestCase
{
    public function test_surah_api_returns_json(): void
    {
        $response = $this->get('/api/surahs');

        $response->assertStatus(200);
    }
}