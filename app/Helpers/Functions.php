<?php

use App\Enums\ChamadosStats;

if (!function_exists('getStatsChamados')) {
    function getStatsChamados(string $stats): string
    {
        return ChamadosStats::fromValue($stats);
    }
}