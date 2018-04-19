<?php

namespace Traits;


trait RandomDescriptionGenerator
{
    public $prepends = [];
    public $attackItems = [];
    public $defenceItems = [];
    public $appends = [];
    public $outputString;
    public function __construct()
    {
        die(var_dump('moh zie ne keer!'));
        $this->prepends = [
            'half-broken',
            'way too epic',
            'rusty',
            'soaked',
            'flaming',
            'freshly stolen',
            'oddly smelling',
            'icy',
            'beer battered'
        ];
        $this->attackItems = [
            'dagger',
            'longsword',
            'bow',
            'spear',
            'crossbow',
            'chainsaw',
            'flamethrower'
        ];
        $this->defenceItems = [
            'chainmail',
            'platebody',
            'shield',
            'fancy skirt',
            'napkin',
            'leather body'
        ];
        $this->appends = [
            'of some random elf',
            'of the lazy brotherhood',
            'of faith',
            'also knows as Excalibur',
            ', doucheslayer',
            ', the magical',
            ' with a cool skull on it',
            ' wich is stuck in a wall'
        ];
    }
    public function generateRandomDescription(string $style): string{
        $rndPrepend = rand(0, count(($this->prepends) - 1));
        $this->outputString .= $this->prepends[$rndPrepend];
        if ($style == 'attack'){
            $rndAttack = rand(0, (count($this->attackItems ) -1) );
            $this->outputString .= $this->attackItems[$rndAttack];
        }
        else{
            $rndDefence = rand(0, (count($this->defenceItems ) -1) );
            $this->outputString .= $this->defenceItems[$rndDefence];
        }
        $rndAppend = rand(0, count(($this->appends) - 1));
        $this->outputString .= $this->appends[$rndAppend];
        print($this->outputString);
        return $this->outputString;
    }
}