<?php

namespace Scandiweb\Products;

class Product
{
    protected string $SKU;
    protected string $name;
    protected int $price;

    public function __construct(string $SKU, string $name, int $price)
    {
        $this->SKU = $SKU;
        $this->name = $name;
        $this->price = $price;
    }

    /**
     * @return string
     */
    public function getSKU(): string
    {
        return $this->SKU;
    }
    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return int
     */
    public function getPrice(): int
    {
        return $this->price;
    }
}