<?php

namespace Konetchy\Converter;

use Konetchy\Converter\Exception\InvalidUnitException;
use InvalidArgumentException;

abstract class Unit
{
    /**
     * The unit quantity.
     *
     * @var float $quantity
     */
    protected $quantity;

    /**
     * The type of unit defined upon instantiation.
     *
     * @var string $unit
     */
    protected $unit;

    /**
     * The base unit value used for all conversions.
     *
     * @var float $base
     */
    protected $base;

    public function __construct(float $quantity, string $unit)
    {
        $this->quantity = $this->validateQuantity($quantity);
        $this->unit = $this->validateUnit($unit);
        $this->base = $this->calculateBaseUnit();
    }

    private function validateUnit(string $unit): string
    {
        $unit = strtolower($unit);

        if (!$this->isAlias($unit) && !array_key_exists($unit, $this->formulas)) {
            throw new InvalidUnitException(sprintf('Unknown unit type: [%s] in class.', $unit));
        }

        return $this->isAlias($unit) ? $this->aliases[$unit] : $unit;
    }

    private function validateQuantity(float $quantity): float
    {
        if ($quantity < 0) {
            throw new InvalidArgumentException(
                sprintf('The quantity must be a positive number: given (%s).', $quantity)
            );
        }

        return $quantity;
    }

    public function to(string $unit, int $precision = null): float
    {
        if ($this->isAlias($unit)) {
            $unit = $this->aliases[$unit];
        }

        return $this->calculate($unit, $precision);
    }

    private function calculateBaseUnit(): float
    {
        if (is_callable($this->formulas[$this->unit])) {
            return $this->formulas[$this->unit]($this->quantity, true);
        }

        return (float) $this->quantity * $this->formulas[$this->unit];
    }

    private function isAlias(string $unit): bool
    {
        return array_key_exists($unit, $this->aliases);
    }

    private function calculate(string $unit, int $precision = null): float
    {
        if (is_callable($this->formulas[$unit])) {
            return $this->formulas[$unit]($this->base);
        }

        if ($precision) {
            return round($this->base / $this->formulas[$unit], $precision, PHP_ROUND_HALF_UP);
        }

        return (float) $this->base / $this->formulas[$unit];
    }

    /**
     * @deprecated
     */
    public function base()
    {
        return $this->baseUnit;
    }
}
