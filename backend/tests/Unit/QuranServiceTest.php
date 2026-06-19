<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Services\QuranService;

class QuranServiceTest extends TestCase
{
    public function test_can_get_surah_list(): void
    {
        $service = new QuranService();

        $result = $service->getSurahs();

        $this->assertIsArray($result);

        $this->assertArrayHasKey(
            'data',
            $result
        );

        $this->assertNotEmpty(
            $result['data']
        );
    }

    public function test_can_get_first_surah(): void
    {
        $service = new QuranService();

        $result = $service->getSurah(1);

        $this->assertIsArray($result);

        $this->assertEquals(
            200,
            $result['code']
        );

        $this->assertEquals(
            'OK',
            $result['status']
        );

        $this->assertArrayHasKey(
            'data',
            $result
        );
    }
}