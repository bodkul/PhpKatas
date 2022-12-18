<?php

namespace App;

use Illuminate\Support\Collection;
use Illuminate\Filesystem\Filesystem;
use Illuminate\Support\LazyCollection;

class Parser
{
    private LazyCollection $collect;

    public function __construct(string $filename)
    {
        $this->collect = (new Filesystem)->lines($filename);
    }

    public function getSymbols(): Collection
    {
        $collect = $this->collect
            ->filter()
            ->chunk(4)
            ->map->take(3)
            ->map->map(fn (string $value): array => str_split($value, 3))
            ->toArray();

        $array = [];
        foreach ($collect as $key => $value) {
            foreach ($value as $value) {
                foreach ($value as $i => $value) {
                    $array[$key][$i][] = $value;
                }
            }
        }

        return collect($array);
    }
}
