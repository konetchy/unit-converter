<?php

namespace Konetchy\Converter;

class Pressure extends Unit
{
    protected $baseUnit = 'pascals';

    protected $aliases = [
        'bars' => 'bar',
        'pascals' => 'pa',
        'kilopascals' => 'kpa',
        'atmospheres' => 'atm',
        'millibars' => 'mbar',
    ];

    protected $formulas = [
        'bar' => 100000,
        'pa' => 1, // SI Unit
        'kpa' => 0.001,
        'psi' => 6894.7572932,
        'ksi' => 6894757.2932,
        'atm' => 101325,
        'mbar' => 100,
        'mpa' => 0.001
    ];
}
