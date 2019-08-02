<?php

namespace Konetchy\Converter;

class Mass extends Unit
{
    const T = 't';
    const KG = 'kg';
    const G = 'g';
    const MG = 'mg';
    const LB = 'lbs';
    const OZ = 'oz';

    protected $baseUnit = 'kilograms';

    protected $aliases = [
        'tonnes' => self::T,
        'kilograms' => self::KG,
        'grams' => self::G,
        'milligrams' => self::MG,
        'pounds' => self::LB,
        'ounces' => self::OZ,
    ];

    protected $formulas = [
        self::T => 1000,
        self::KG => 1, // SI Unit
        self::G => 0.001,
        self::MG => 0.000001,
        self::LB => 0.45359237,
        self::OZ => 0.0283495231,
    ];
}
