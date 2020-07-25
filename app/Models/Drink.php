<?php

namespace App\Models;


class Drink extends ExtraItem
{

    function __construct()
    {
        $this->availability = true;
        $this->code = "002";
        $this->price = 2;
        $this->type = "SODA";
    }

}