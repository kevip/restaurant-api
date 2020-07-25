<?php

namespace App\Repositories\Menu\Impl;


use App\Models\Entree;
use App\Repositories\Menu\Interfaces\IMenuExtra;


class EntreeImpl implements IMenuExtra
{
    protected $entree;

    function __construct()
    {
        $this->entree = new Entree();
    }

    public function available(): bool
    {
        return $this->entree->getAvailability();
    }

    public function getPrice(): float
    {
        return $this->entree->getPrice();
    }
}