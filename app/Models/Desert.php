<?php

namespace App\Models;


class Desert extends ExtraItem
{

    function __construct()
    {
        $this->availability = true;
        $this->code = "003";
        $this->price = 5;
        $this->type = "";
    }

}