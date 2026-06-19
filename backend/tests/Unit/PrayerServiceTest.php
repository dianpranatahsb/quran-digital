<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Services\PrayerService;

class PrayerServiceTest extends TestCase
{
    public function test_can_get_prayer_times(): void
    {
        $service = new PrayerService();

        $result = $service->getPrayerTimes(
            'Banda Aceh'
        );

        $this->assertIsArray($result);

        $this->assertArrayHasKey(
            'data',
            $result
        );

        $this->assertArrayHasKey(
            'timings',
            $result['data']
        );
    }
}