<?php

use function Kahlan\it;
use function Kahlan\describe;

describe('class BankOCR', function () {
    it('Abrufen von 000000000-Nummern aus einer Datei mit BankOCR.', function () {
        $bank = new App\BankOCR(__DIR__ . '/../assets/PhpKatas/000000000.txt');

        expect($bank->getNumbers()->toArray())->toBe(['000000000']);
    });

    it('Abrufen von 123456789-Nummern aus einer Datei mit BankOCR.', function () {
        $bank = new App\BankOCR(__DIR__ . '/../assets/PhpKatas/123456789.txt');

        expect($bank->getNumbers()->toArray())->toBe(['123456789']);
    });

    it('Abrufen vieler Nummern aus einer Datei mit BankOCR.', function () {
        $bank = new App\BankOCR(__DIR__ . '/../assets/PhpKatas/use_case_1_in.txt');

        expect($bank->getNumbers()->toArray())->toBe([
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

    it('Kontonummer 345882865 in der Prüfsummenberechnung ist Null', function () {
        $bank = new App\BankOCR(__DIR__ . '/../assets/PhpKatas/use_case_1_in.txt');

        expect($bank->checksumCalculation(345882865))->toBe(0);
    });
});
