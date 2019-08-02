<?php

namespace Konetchy\Converter;

class Length extends Unit
{
    const MM = 'mm';
    const CM = 'cm';
    const DM = 'dm';
    const M = 'm';
    const KM = 'km';
    const IN = 'in';
    const FT = 'ft';
    const YD = 'yd';
    const MI = 'mi';
    const NMI = 'nmi';

    protected $baseUnit = 'meters';

    protected $aliases = [
        'millimeters' => self::MM,
        'centimeters' => self::CM,
        'decimeters' => self::DM,
        'meters' => self::M,
        'kilometers' => self::KM,
        'inches' => self::IN,
        'feet' => self::FT,
        'yards' => self::YD,
        'miles' => self::MI,
        'nautical miles' => self::NMI,
    ];

    protected $formulas = [
        self::MM => 0.001,
        self::CM => 0.01,
        self::DM => 0.1,
        self::M => 1, // SI Unit
        self::KM => 1000,
        self::IN => 0.0254,
        self::FT => 0.3048,
        self::YD => 0.9144,
        self::MI => 1609.344,
        self::NMI => 1852,
    ];
}
