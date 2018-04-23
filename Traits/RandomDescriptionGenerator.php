<?php

namespace Traits;

trait RandomDescriptionGenerator
{
    public $prepends = [
        'half-broken',
        'way too epic',
        'rusty',
        'soaked',
        'flaming',
        'freshly stolen',
        'oddly smelling',
        'icy',
        'beer battered'];
    public $attackItems = [
        'dagger',
        'longsword',
        'bow',
        'spear',
        'crossbow',
        'chainsaw',
        'flamethrower'
    ];
    public $defenceItems = [
        'chainmail',
        'platebody',
        'shield',
        'fancy skirt',
        'napkin',
        'leather body'
    ];
    public $appends = [
        'of some random elf',
        'of the lazy brotherhood',
        'of faith',
        'also knows as Excalibur',
        ', doucheslayer',
        ', the magical',
        ' with a cool skull on it',
        ' which is stuck in a wall'
    ];
    public $outputString;

    public function getGenerateRandomDescription(string $style): string{

        $rndPrepend = rand(0, count($this->prepends )- 1);
        $this->outputString .= $this->prepends[$rndPrepend];


        if ($style == 'attack'){
            $rndAttack = rand(0, (count($this->attackItems ) -1) );
            $this->outputString .= " " . $this->attackItems[$rndAttack];
        }
        else{
            $rndDefence = rand(0, (count($this->defenceItems ) -1) );
            $this->outputString .= " " . $this->defenceItems[$rndDefence];
        }
        $rndAppend = rand(0, count($this->appends )- 1);
        $this->outputString .= " ". $this->appends[$rndAppend];
        print($this->outputString);

        return $this->outputString;

    }
}