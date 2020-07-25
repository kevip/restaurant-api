<?php

namespace App\Models;


class Entree extends ExtraItem
{

    function __construct()
    {
        $this->availability = true;
        $this->code = "001";
        $this->price = 6;
        $this->type = "";
    }

}