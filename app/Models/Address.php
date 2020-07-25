<?php

namespace App\Models;


class Address
{
    protected $calle;
    protected $distrito;
    protected $provincia;
    protected $departamento;
    protected $shippingAddress;

    public function setShippingAddress(string $shippingAddress)
    {
        $this->shippingAddress = $shippingAddress;
    }

    public function setCalle(string $calle)
    {
        $this->calle = $calle;
    }

    public function setDistrito(string $distrito)
    {
        $this->distrito = $distrito;
    }

    public function setProvincia(string $provincia)
    {
        $this->provincia = $provincia;

    }

    public function setDepartamento(string $departamento)
    {
        $this->departamento = $departamento;
    }


}