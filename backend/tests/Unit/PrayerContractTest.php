<?php

namespace Tests\Unit;

use App\Contracts\PrayerContract;
use Tests\TestCase;

class PrayerContractTest extends TestCase
{
    public function test_prayer_contract_is_bound(): void
    {
        $service = app(PrayerContract::class);

        $this->assertInstanceOf(
            PrayerContract::class,
            $service
        );
    }
}