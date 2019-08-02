<?php

namespace Konetchy\Converter;

class Area extends Unit
{
    const MM = 'mm2';
    const CM = 'cm2';
    const M = 'm2';
    const KM = 'km2';
    const IN = 'in2';
    const FT = 'ft2';
    const YD = 'yd2';

    protected $baseUnit = 'square meters';

    protected $aliases = [
        'square millimeters' => self::MM,
        'square centimeters' => self::CM,
        'square meters' => self::M,
        'square kilometers' => self::KM,
        'square inches' => self::IN,
        'square feet' => self::FT,
        'square yards' => self::YD,
    ];

    protected $formulas = [
        self::MM => 0.000001,
        self::CM => 0.0001,
        self::M => 1,
        self::KM => 1000000,
        self::IN => 0.000645,
        self::FT => 0.092903,
        self::YD => 0.836127,
    ];
}
