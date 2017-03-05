<?php

// Siekiame parasyti programa, kuri gali iskaityti Markdown formatu parasyta teksta is failo ir grazinti HTML formatuota koda.
// Parasyti klase siam testui

use Example\MarkdownParser;

class MarkdownParserTest extends PHPUnit_Framework_TestCase
{
    public function testMarkdownParserCanBeCreated()
    {
        $m = new MarkdownParser;
    }
}
