<?php

namespace Scandiweb\Products;

class DVD extends Product
{
    protected float $size;

    public function __construct(string $SKU, string $name, float $price, float $size)
    {
        parent::__construct($SKU, $name, $price);
        $this->size = $size;
    }

    /**
     * @return float
     */
    public function getSize(): float
    {
        return $this->size;
    }
}