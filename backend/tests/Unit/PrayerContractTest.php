<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Contracts\PrayerContract;

class PrayerContractTest extends TestCase
{
    public function test_prayer_contract_is_bound(): void
    {
        $service = app(PrayerContract::class);

        $this->assertInstanceOf(
            PrayerContract::class,
            $service
        );

        $this->assertTrue(
            method_exists($service, 'getPrayerTimes')
        );
    }
}