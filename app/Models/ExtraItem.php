<?php


namespace App\Models;


class ExtraItem
{
    protected $code;

    protected $availability;

    protected $price;

    protected $type;


    public function getCode(): string
    {
        return $this->code;
    }

    public function getPrice(): double
    {
        return $this->price;
    }

    public function getAvailability(): bool
    {
        return $this->availability;
    }

}