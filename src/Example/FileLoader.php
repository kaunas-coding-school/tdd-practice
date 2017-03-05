<?php

namespace Example;

class FileLoader
{

    public function get($path)
    {
        return file_get_contents($path);
    }

}
