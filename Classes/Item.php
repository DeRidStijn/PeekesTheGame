<?php
declare(strict_types=1);
namespace Classes;

class Item extends ItemAbstr
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