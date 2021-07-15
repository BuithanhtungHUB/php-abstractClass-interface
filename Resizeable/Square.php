<?php

include_once 'Shape.php';

class Square extends Shape
{
    public int $width;

    public function __contruct(string $name, int $width)
    {
        parent::__construct($name, $width, $width);
    }

    public function calculateAre(): int
    {
        return $this->width * $this->width;
    }

    public function calculatePerimeter(): int
    {
        return $this->width * 4;
    }
}