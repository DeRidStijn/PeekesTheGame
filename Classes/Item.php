<?php

namespace Classes;

use Interfaces\ItemInterface;

class Item implements ItemInterface
{
    protected $itemName;
    protected $itemDescription;
    public function __construct($itemName, $itemDescription)
    {
        $this->itemName = $itemName;
        $this->itemDescription = $itemDescription;
    }

    public function getItemName(): string{
        return $this->itemName;
    }

    public function getItemDescription(): string{
        return $this->itemDescription;
    }
}