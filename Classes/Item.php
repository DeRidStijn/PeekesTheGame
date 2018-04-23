<?php

namespace Classes;

use Interfaces\ItemInterface;

class Item implements ItemInterface
{
    use \Traits\RandomDescriptionGenerator;


    protected $itemName;
    public function __construct($itemName){

        $this->itemName = $itemName;
    }

    public function getItemName(): string{
        return $this->itemName;
    }

}