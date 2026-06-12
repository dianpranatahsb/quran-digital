<?php

namespace Tests\Feature;

use Tests\TestCase;

class SurahApiTest extends TestCase
{
    public function test_surah_list_endpoint_returns_successfully(): void
    {
        $response = $this->get('/api/surahs');

        $response->assertStatus(200);
    }
}