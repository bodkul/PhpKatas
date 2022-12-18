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
}
