<?php

include_once 'Shape.php';
class Rectangle extends Shape
{
    public int $width;
    public int $height;

    public function __construct(string $name, int $width, int $height){
        parent::__construct($name);
        $this->width = $width;
        $this->height = $height;
    }

    public function calculatorArea():int
    {
        return $this->height * $this->width;
    }

    public function calculatePerimeter(): int
    {
        return ($this->width + $this->height) * 2;
    }
}
