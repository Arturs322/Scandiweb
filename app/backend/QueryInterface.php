<?php

namespace Scandiweb\backend;

interface QueryInterface
{
    public function insert($SKU, $name, $price, $value, $choose);

    public function read();

    public function delete();
}