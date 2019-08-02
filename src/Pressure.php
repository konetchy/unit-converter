<?php

namespace Konetchy\Converter;

class Pressure extends Unit
{
    const BAR = 'bar';
    const PA = 'pa';
    const KPA = 'kpa';
    const ATM = 'atm';
    const MBAR = 'mbar';
    const PSI = 'psi';
    const KSI = 'ksi';
    const MPA = 'mpa';

    protected $baseUnit = 'pascals';

    protected $aliases = [
        'bars' => self::BAR,
        'pascals' => self::PA,
        'kilopascals' => self::KPA,
        'atmospheres' => self::ATM,
        'millibars' => self::MBAR,
    ];

    protected $formulas = [
        self::BAR => 100000,
        self::PA => 1, // SI Unit
        self::KPA => 0.001,
        self::PSI => 6894.7572932,
        self::KSI => 6894757.2932,
        self::ATM => 101325,
        self::MBAR => 100,
        self::MPA => 0.001
    ];
}
