<?php

namespace App\Contracts;

interface QuranContract
{
    public function getSurahs();

    public function getSurah(int $id);
}