<?php

use function Kahlan\it;
use function Kahlan\describe;

describe('class Transformer', function () {
    it('Konvertieren Sie die Zeichen 111111111 aus dem Array in Zahlen.', function () {
        $parser = new App\Parser(__DIR__ . '/../assets/PhpKatas/111111111.txt');

        $transformer = new App\Transformer($parser->getSymbols());

        expect($transformer->convertSymbolsToNumbers()->toArray())->toBe(['111111111']);
    });

    it('Konvertieren Sie die Zeichen 123456789 aus dem Array in Zahlen.', function () {
        $parser = new App\Parser(__DIR__ . '/../assets/PhpKatas/123456789.txt');

        $transformer = new App\Transformer($parser->getSymbols());

        expect($transformer->convertSymbolsToNumbers()->toArray())->toBe(['123456789']);
    });

    it('Konvertiert viele Zeichen aus einem Array in Zahlen.', function () {
        $parser = new App\Parser(__DIR__ . '/../assets/PhpKatas/use_case_1_in.txt');

        $transformer = new App\Transformer($parser->getSymbols());

        expect($transformer->convertSymbolsToNumbers()->toArray())->toBe([
            '000000000',
            '111111111',
            '222222222',
            '333333333',
            '444444444',
            '555555555',
            '666666666',
            '777777777',
            '888888888',
            '999999999',
            '123456789'
        ]);
    });
});
