<?php
/**
 * Created by PhpStorm.
 * User: deridstijn
 * Date: 4/23/18
 * Time: 11:59 AM
 */

namespace Classes;


abstract class ItemAbstr
{
    abstract public function __construct($itemName);
    abstract public function getItemName(): string;
}