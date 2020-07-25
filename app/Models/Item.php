<?php

namespace App\Models;


class Item
{

    protected $name;

    protected $price;

    protected $code;

    protected $availability;

    public function getCode(): string
    {
        return $this->code;
    }

    public function setCode(string $code)
    {
        return $this->code = $code;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name)
    {
        return $this->name = $name;
    }

    public function getPrice(): float
    {
        return $this->price;
    }

    public function setPrice(double $price)
    {
        return $this->price = $price;
    }

    public function getAvailability(): bool
    {
        return $this->availability;
    }

    public function setAvailability(bool $availability)
    {
        return $this->availability= $availability;
    }

}