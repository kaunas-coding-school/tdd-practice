<?php
use Example\FileLoader;

class FileLoaderTest extends PHPUnit_Framework_TestCase
{
    public function testFileLoaderClassCanBeCreated()
    {
        $f = new FileLoader;
    }

    public function testFileLoaderCanLoadFileContent()
    {
        $f = new FileLoader;
        $r = $f->get(__DIR__.'/fixtures/simple.md');
        $this->assertEquals("Foo\n", $r);
    }

    // parasykime testa patikrinimui, jei failas neegzistuoja
    // musu metodas turetu grazinti false tokiu atveju
    // galime panaudoti assertFalse
}
