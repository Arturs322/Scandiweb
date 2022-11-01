<?php

namespace Scandiweb\backend\Products;

abstract class Product
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

    abstract public function validateType($type);

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