<?php

namespace Tests\Unit;

use App\Contracts\QuranContract;
use Tests\TestCase;

class QuranContractTest extends TestCase
{
    public function test_quran_contract_is_bound(): void
    {
        $service = app(QuranContract::class);

        $this->assertInstanceOf(
            QuranContract::class,
            $service
        );
    }
}