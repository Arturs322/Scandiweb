<?php

namespace Scandiweb\Products;

class Furniture extends Product
{
    protected float $height;
    protected float $width;
    protected float $length;

    public function __construct(string $SKU, string $name, float $price, float $height, float $width, $length)
    {
        parent::__construct($SKU, $name, $price);
        $this->height = $height;
        $this->width = $width;
        $this->$length = $length;
    }

    /**
     * @return float
     */
    public function getHeight(): float
    {
        return $this->height;
    }

    /**
     * @return float
     */
    public function getWidth(): float
    {
        return $this->width;
    }

    /**
     * @return float
     */
    public function getLength(): float
    {
        return $this->length;
    }
}