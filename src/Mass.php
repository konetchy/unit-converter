<?php

namespace Konetchy\Converter;

class Mass extends Unit
{
    protected $baseUnit = 'kilograms';

    protected $aliases = [
        'tonnes' => 't',
        'kilograms' => 'kg',
        'grams' => 'g',
        'milligrams' => 'mg',
        'pounds' => 'lbs',
        'ounces' => 'oz',
    ];

    protected $formulas = [
        't' => 1000,
        'kg' => 1, // SI Unit
        'g' => 0.001,
        'mg' => 0.000001,
        'lbs' => 0.45359237,
        'oz' => 0.0283495231,
    ];
}
