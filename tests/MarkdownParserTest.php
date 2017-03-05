<?php

use Example\MarkdownParser;

class MarkdownParserTest extends PHPUnit_Framework_TestCase
{
    public function testMarkdownParserCanBeCreated()
    {
        $m = new MarkdownParser;
    }

    public function testBoldTextCanBeParsed()
    {
        $m = new MarkdownParser;
        $e = 'foo**bar**baz';
        $r = $m->parseBold($e);
        $this->assertEquals('foo<strong>bar</strong>baz', $r);
    }

    // Markdown nuorodos aprasomos taip [url](pavadinimas)
    // Parasykime testa metodui, kuris atlieka nuorodu iskaityma i HTML a zyma
}
