<?php

namespace Lucasfreitasrocha\BuscadorCursos\util;

trait AcessProperties
{
    public function __get(string $name)
    {
        return $this->$name;
    }

    public function __set(string $name, $value): void
    {
        $this->$name = $value;
    }
}
