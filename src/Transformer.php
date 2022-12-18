<?php

namespace App;

use Illuminate\Support\Collection;

class Transformer
{
    private const NUMBERS = [
        0 => ' _ | ||_|',
        1 => '     |  |',
        2 => ' _  _||_ ',
        3 => ' _  _| _|',
        4 => '   |_|  |',
        5 => ' _ |_  _|',
        6 => ' _ |_ |_|',
        7 => ' _   |  |',
        8 => ' _ |_||_|',
        9 => ' _ |_| _|'
    ];

    public function __construct(private Collection $symbols)
    {
    }

    public function convertSymbolsToNumbers(): Collection
    {
        return $this->symbols
            ->map(fn(array $array): Collection => collect($array))
            ->map->map(fn (array $array): string => implode('', $array))
            ->map->map(fn (string $value): int => $this->convertSymbolToNumber($value))
            ->map->implode('');
    }

    public function convertSymbolToNumber(string $value): int
    {
        return array_search($value, self::NUMBERS);
    }
}
