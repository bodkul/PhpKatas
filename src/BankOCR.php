<?php

namespace App;

use App\Parser;
use Illuminate\Support\Collection;

class BankOCR
{
    protected Collection $numbers;
    
    public function __construct(string $filename)
    {   
        $parser = new Parser($filename);

        $transformer = new Transformer($parser->getSymbols());

        $this->numbers = $transformer->convertSymbolsToNumbers();
    }

    public function getNumbers(): Collection
    {
        return $this->numbers;
    }

    public function checksumCalculation(int $numbers): int
    {
        $reverseNumbers = array_reverse(mb_str_split($numbers));

        $sum = 0;
        $i = 2;

        foreach ($reverseNumbers as $key => $value) {
            if ($key === array_key_first($reverseNumbers)) {
                $sum = $value;
                continue;
            }

            $sum += ($i++ * $value);
        }

        return $sum % 11;
    }
}
