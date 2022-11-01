<?php

namespace Scandiweb\backend\Products;

class Furniture extends Product
{
    protected string $dimension;

    public function __construct(string $SKU, string $name, float $price, string $dimension)
    {
        parent::__construct($SKU, $name, $price);
        $this->dimension = $dimension;
    }

    /**
     * @return string
     */
    public function getDimension(): string
    {
        return $this->dimension;
    }

    public function validateType($type): bool
    {
        if (is_string($type) && strlen($type) >= 0)
        {
            return true;
        }
        return false;
    }
}