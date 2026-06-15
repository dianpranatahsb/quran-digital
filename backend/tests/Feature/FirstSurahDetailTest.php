<?php

namespace Tests\Feature;

use Tests\TestCase;

class FirstSurahDetailTest extends TestCase
{
    public function test_first_surah_detail_returns_successfully(): void
    {
        $response = $this->get('/api/surahs/1');

        $response->assertStatus(200);
    }
}