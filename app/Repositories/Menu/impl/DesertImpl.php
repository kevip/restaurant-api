<?php

namespace App\Repositories\Menu\Impl;


use App\Models\Desert;
use App\Repositories\Menu\Interfaces\IMenuExtra;


class DesertImpl implements IMenuExtra
{

    protected $desert;

    function __construct()
    {
        $this->desert = new Desert();
    }

    public function available(): bool
    {
        return $this->desert->getAvailability();
    }

    public function getPrice(): float
    {
        return $this->desert->getPrice();
    }
}