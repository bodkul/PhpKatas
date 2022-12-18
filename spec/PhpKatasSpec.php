<?php

use function Kahlan\it;
use function Kahlan\describe;
use function Kahlan\beforeAll;

const PATH_ASSETS = __DIR__ . '/../assets/PhpKatas';

describe('toBe', function () {
    beforeAll(function () {
        $this->phpKatas = new App\PhpKatas();
    });

    it('Konvertieren Sie 000000000 in tatsächliche Kontonummern.', function () {
        expect($this->phpKatas->parse(PATH_ASSETS . '/000000000.txt'))->toBe(['000000000']);
    });

    it('Konvertieren Sie 111111111 in tatsächliche Kontonummern.', function () {
        expect($this->phpKatas->parse(PATH_ASSETS . '/111111111.txt'))->toBe(['111111111']);
    });

    it('Konvertieren Sie 222222222 in tatsächliche Kontonummern.', function () {
        expect($this->phpKatas->parse(PATH_ASSETS . '/222222222.txt'))->toBe(['222222222']);
    });

    it('Konvertieren Sie 333333333 in tatsächliche Kontonummern.', function () {
        expect($this->phpKatas->parse(PATH_ASSETS . '/333333333.txt'))->toBe(['333333333']);
    });

    it('Konvertieren Sie 444444444 in tatsächliche Kontonummern.', function () {
        expect($this->phpKatas->parse(PATH_ASSETS . '/444444444.txt'))->toBe(['444444444']);
    });

    it('Konvertieren Sie 555555555 in tatsächliche Kontonummern.', function () {
        expect($this->phpKatas->parse(PATH_ASSETS . '/555555555.txt'))->toBe(['555555555']);
    });

    it('Konvertieren Sie 666666666 in tatsächliche Kontonummern.', function () {
        expect($this->phpKatas->parse(PATH_ASSETS . '/666666666.txt'))->toBe(['666666666']);
    });

    it('Konvertieren Sie 777777777 in tatsächliche Kontonummern.', function () {
        expect($this->phpKatas->parse(PATH_ASSETS . '/777777777.txt'))->toBe(['777777777']);
    });

    it('Konvertieren Sie 888888888 in tatsächliche Kontonummern.', function () {
        expect($this->phpKatas->parse(PATH_ASSETS . '/888888888.txt'))->toBe(['888888888']);
    });

    it('Konvertieren Sie 999999999 in tatsächliche Kontonummern.', function () {
        expect($this->phpKatas->parse(PATH_ASSETS . '/999999999.txt'))->toBe(['999999999']);
    });

    it('Konvertieren Sie 123456789 in tatsächliche Kontonummern.', function () {
        expect($this->phpKatas->parse(PATH_ASSETS . '/123456789.txt'))->toBe(['123456789']);
    });

    it('Datei use_case_1_in In tatsächliche Kontonummern umwandeln.', function () {
        expect($this->phpKatas->parse(PATH_ASSETS . '/use_case_1_in.txt'))
            ->toBe([
                "000000000",
                "111111111",
                "222222222",
                "333333333",
                "444444444",
                "555555555",
                "666666666",
                "777777777",
                "888888888",
                "999999999",
                "123456789"
            ]);
    });
});
