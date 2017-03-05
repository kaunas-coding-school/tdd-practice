<?php

namespace Example;

class MarkdownParser
{
    public function parse($source)
    {
        $source = $this->parseBold($source);
        $source = $this->parseLinks($source);
        return $this->parseImages($source);
    }

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

    public function parseImages($source)
    {
        $pattern = '/\!\[(.*)\]\((.*)\)/';
        $replace = '<img src="$2" alt="$1" />';
        return preg_replace($pattern, $replace, $source);
    }
}
