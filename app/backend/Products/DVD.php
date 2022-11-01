<?php

namespace Scandiweb\backend\Products;

class DVD extends Product
{
    protected int $size;

    public function __construct(string $SKU, string $name, float $price, int $size)
    {
        parent::__construct($SKU, $name, $price);
        $this->size = $size;
    }

    /**
     * @return int
     */
    public function getSize(): int
    {
        return $this->size;
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