<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Contracts\QuranContract;

class QuranContractTest extends TestCase
{
    public function test_quran_contract_is_bound(): void
    {
        $service = app(QuranContract::class);

        $this->assertInstanceOf(
            QuranContract::class,
            $service
        );

        $this->assertTrue(
            method_exists($service, 'getSurahs')
        );

       $this->assertTrue(
            method_exists($service, 'getSurah')
        );
    }
}