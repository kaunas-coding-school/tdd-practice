<?php

namespace Example;

class FileLoader
{

    public function get($path)
    {
        if (! file_exists($path)) {
            return false;
        }
        return file_get_contents($path);
    }

}
