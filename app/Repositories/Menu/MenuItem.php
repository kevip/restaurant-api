<?php

namespace App\Repositories\Menu;

use App\Models\ExtraItem;
use App\Models\Item;
use App\Repositories\Menu\Interfaces\IMenuItem;

class MenuItem implements IMenuItem
{

    protected $item;

    protected $extras = [];

    function __construct()
    {
        $this->item = new Item();
        $this->item->setCode("MI001");
        $this->item->setName("Ají de Gallina");
        $this->item->setPrice(10);
    }


    public function available(): bool
    {
        return $this->item->getAvailability();
    }


    public function getPrice(): float
    {
        $total = $this->item->getPrice();
        foreach ($this->extras as $extra) {
            $total += $extra->getPrice();
        }

        return $total;
    }

    public function addExtra(ExtraItem $extra)
    {
        array_push($this->extras, $extra);
    }

    public function removeExtra($code)
    {
        foreach ($this->extras as $key => $extra) {

            if($extra->getCode() === $code) {
                unset($this->extras[$key]);
            }
        }

    }


}