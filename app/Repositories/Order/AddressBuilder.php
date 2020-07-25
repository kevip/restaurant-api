<?php

namespace App\Repositories\Order;


use App\Models\Address;
use App\Repositories\Order\Interfaces\IAddressBuilder;

class AddressBuilder implements IAddressBuilder
{
    private $shippingAddress = "";
    private $calle = "";
    private $distrito = "";
    private $provincia = "";
    private $departamento = "";

    function __construct($shippingAddress)
    {
        $this->shippingAddress = $shippingAddress;

    }

    function withCalle(string $calle): AddressBuilder
    {
        $this->calle = $calle;
        return $this;
    }

    function withDistrito(string $distrito): AddressBuilder
    {
        $this->distrito = $distrito;
        return $this;
    }

    function withProvincia(string $provincia): AddressBuilder
    {
        $this->provincia = $provincia;
        return $this;
    }

    function withDepartamento(string $departamento): AddressBuilder
    {
        $this->departamento = $departamento;
        return $this;
    }


    public function build(): Address
    {
        $addrs = new Address();
        $addrs->setCalle($this->calle);
        $addrs->setDistrito($this->distrito);
        $addrs->setProvincia($this->provincia);
        $addrs->setDepartamento($this->departamento);
        $addrs->setShippingAddress($this->shippingAddress);

        return $addrs;
    }
}
