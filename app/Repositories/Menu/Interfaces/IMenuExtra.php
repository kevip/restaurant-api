<?php

namespace App\Repositories\Menu\Interfaces;


interface IMenuExtra extends IMenuItem
{
    public function available(): bool;

    public function getPrice(): float;

}