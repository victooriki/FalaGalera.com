<?php

namespace App\Enums;

enum ChamadosStats: string
{
    case a = "Aberto";
    case b = "Pendente";
    case c = "Concluído";

    public static function fromValue(string $name): string
    {
        foreach (self::cases() as $stats) {
            if ($name === $stats->name) {
                return $stats->value;
            }
        }

        throw new \ValueError("$name informado não é valido!");
    }
}