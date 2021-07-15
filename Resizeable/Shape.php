<?php


class Shape
{
    public string $name;
    public function __construct(string $name)
    {
        $this->name;
    }

    public function show(): string
    {
        return "I am a shape. My name is $this->name";
    }
}