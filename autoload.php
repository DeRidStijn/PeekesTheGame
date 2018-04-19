<?php

$map = [
  'Classes\\' => 'Classes',
    'Bar\\' => 'Foo',
    'Interfaces\\' => 'Interfaces',
    'Traits\\' => 'Traits'
];

//autoload wordt gecalled met een classname en gebruikt de array map wanneer hij de class niet kent
spl_autoload_register(function ($class_name) use ($map) {
    //namespaceMatches wordt gevuld met alles wat gematcht wordt in preg_match
    $namespaceMatches = [];
    //preg_match gaat $class_name vergelijken met zijn regex, voldoet $class_name, wordt hij toegevoegd aan namespace matches
    preg_match('/(.)*\\\/', $class_name, $namespaceMatches);
    //geef $namespace de eerste value van de array $namespaceMatches mee
    $namespace = reset($namespaceMatches);
    //$className: de naam van de class wordt uit de namespace gehaald
    $className = str_replace($namespace, '',$class_name);
    //als de namespace voorkomt in de map array
    if(isset($map[$namespace])) {
        //ken de directory toe aan de namespace
        $directory = $map[$namespace];
        // do da include
        include $directory.DIRECTORY_SEPARATOR.$className.'.php';
    } else {
        throw new InvalidArgumentException("Could not load class $class_name");
    }
});
