<?php

namespace App\Contracts;

interface QuranContract
{
    public function getAllSurahs();

    public function getSurahById(int $id);
}