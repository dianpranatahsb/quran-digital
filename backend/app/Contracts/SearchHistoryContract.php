<?php

namespace App\Contracts;

interface SearchHistoryContract
{
    public function getAll();

    public function store(string $keyword);
}