<?php
use Example\FileLoader;

class FileLoaderTest extends PHPUnit_Framework_TestCase
{
    public function testFileLoaderClassCanBeCreated()
    {
        $f = new FileLoader;
    }

    // Mes norime sukurti musu klasei get() metoda, kuris grazintu failo turini
    // kataloge __DIR__.'/fixtures/simple.md' pridetas testinis failas
    // Parasyti papildoma testa, kuris palygintu teskta su failo turiniu.
    // Palyginimui galime panaudoti this objekto metoda assertEquals
    // Tekste yra prideta papildoma eilute, todel reiktu itraukti ir newline simboli
}
