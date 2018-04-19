<?php
namespace Interfaces;

interface ItemInterface{
    public function getItemName(): string;
    public function getItemDescription(): string;
}