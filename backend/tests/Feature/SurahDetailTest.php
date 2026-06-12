<?php

namespace Tests\Feature;

use Tests\TestCase;

class SurahDetailTest extends TestCase
{
    public function test_surah_detail_endpoint_returns_successfully(): void
    {
        $response = $this->get('/api/surahs/1');

        $response->assertStatus(200);
    }
}