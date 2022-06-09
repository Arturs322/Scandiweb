<?php

namespace Scandiweb\Products;

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
}