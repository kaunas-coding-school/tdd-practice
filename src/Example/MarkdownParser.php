<?php

namespace Example;

class MarkdownParser
{
    public function parseBold($source)
    {
        $pattern = '/\*\*(.*)\*\*/';
        $replace = '<strong>$1</strong>';
        return preg_replace($pattern, $replace, $source);
    }

    public function parseLinks($source)
    {
        $pattern = '/\[(.*)\]\((.*)\)/';
        $replace = '<a href="$2">$1</a>';
        return preg_replace($pattern, $replace, $source);
    }

}
