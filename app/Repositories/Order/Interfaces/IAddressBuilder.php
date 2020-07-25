<?php

namespace App\Repositories\Order\Interfaces;



use App\Models\Address;

interface IAddressBuilder
{

    public function build(): Address;

}