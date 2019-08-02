<?php

namespace Konetchy\Converter;

class Length extends Unit
{
    protected $baseUnit = 'meters';

    protected $aliases = [
        'millimeters' => 'mm',
        'centimeters' => 'cm',
        'decimeters' => 'dm',
        'meters' => 'm',
        'kilometers' => 'km',
        'inches' => 'in',
        'feet' => 'ft',
        'yards' => 'yd',
        'miles' => 'mi',
        'nautical miles' => 'nmi',
    ];

    protected $formulas = [
        'mm' => 0.001,
        'cm' => 0.01,
        'dm' => 0.1,
        'm' => 1, // SI Unit
        'km' => 1000,
        'in' => 0.0254,
        'ft' => 0.3048,
        'yd' => 0.9144,
        'mi' => 1609.344,
        'nmi' => 1852,
    ];
}
