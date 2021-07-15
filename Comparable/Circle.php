<?php


class Circle
{
    public int $radius;
    public string $name;

    public function __construct(string $name,  $radius)
    {
        $this->name = $name;
        $this->radius = $radius;
    }

    public function getRadius():int
    {
        return $this->radius;
    }

    public function setRadius( $radius): void
    {
        $this->radius = $radius;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }


}