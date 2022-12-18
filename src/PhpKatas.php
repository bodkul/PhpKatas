<?php

namespace App;

use Illuminate\Filesystem\Filesystem;
use Illuminate\Support\Collection;
use Illuminate\Support\LazyCollection;

class PhpKatas
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

    private Filesystem $file;

    public function __construct()
    {
        $this->file = new Filesystem();
    }

    public function parse(string $filename)
    {
        $collect = $this->file->lines($filename)
            ->filter()
            ->chunk(4)
            ->map(fn (LazyCollection $array): LazyCollection => $array->take(3))
            ->map(fn (LazyCollection $array): LazyCollection => $array->map(
                fn (string $value): array => str_split($value, 3)
            ));

        $array = [];
        foreach ($collect->toArray() as $key => $value) {
            foreach ($value as $value) {
                foreach ($value as $i => $value) {
                    $array[$key][$i][] = $value;
                }
            }
        }

        return array_map(function (array $array): array {
            return array_map(function (array $array): int {
                return array_search(implode('', $array), self::NUMBERS);
            }, $array);
        }, $array);
    }
}
