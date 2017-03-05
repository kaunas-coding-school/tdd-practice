<?php

use Example\MarkdownParser;

class MarkdownParserTest extends PHPUnit_Framework_TestCase
{
    public function testMarkdownParserCanBeCreated()
    {
        $m = new MarkdownParser;
    }

    // Kiekviena atskira Markdown pazymejima turime patestuoti individualiai
    // Dvigub (**) pazymejimai is abieju pusiu turi buti pakeiciami i HTML <strong> pazymejima
    // Parasykime tam testa
}
