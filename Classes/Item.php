<?php

namespace Classes;


class Item
{
    protected $itemName;
    protected $itemDescription;
    public function __construct($itemName, $itemDescription)
    {
        $this->itemName = $itemName;
        $this->itemDescription = $itemDescription;
    }

    public function getItemName(){
        return $this->itemName;
    }

    public function getItemDescription(){
        return $this->itemDescription;
    }
}