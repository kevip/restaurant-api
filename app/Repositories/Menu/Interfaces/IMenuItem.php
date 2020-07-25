<?php

namespace App\Repositories\Menu\Interfaces;


interface IMenuItem
{

    public function available(): bool;

    public function getPrice(): float;
}