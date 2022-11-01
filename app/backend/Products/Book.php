<?php

namespace Scandiweb\backend\Products;

class Book extends Product
{
    protected int $weight;

    public function __construct(string $SKU, string $name, float $price, int $weight)
    {
        parent::__construct($SKU, $name, $price);
        $this->weight = $weight;
    }

    /**
     * @return int
     */
    public function getWeight(): int
    {
        return $this->weight;
    }

    public function validateType($type): bool
    {
        if (filter_var($type, FILTER_VALIDATE_INT)!== false && is_numeric($type) && strlen($type) >= 0)
        {
            return true;
        }
        return false;
    }
}