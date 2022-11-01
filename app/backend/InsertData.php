<?php
namespace Scandiweb\backend;

use Scandiweb\backend\Products\Book;
use Scandiweb\backend\Products\DVD;
use Scandiweb\backend\Products\Furniture;

class InsertData {

    public function insertDVD()
    {
        $SKU = $_POST["SKU"];
        $name = $_POST["name"];
        $price = $_POST["price"];
        $size = $_POST["size"];
        if (isset($_POST["size"]))
        {
            $MySQLData = new MySQLData();
            $dvd = new DVD($SKU, $name, $price, $size);
            echo $dvd->validateType($size);
            $MySQLData->insert($dvd->getSKU(), $dvd->getName(), $dvd->getPrice(), $dvd->getSize(), "size");

        }
    }

    public function insertFurniture()
    {
        $SKU = $_POST["SKU"];
        $name = $_POST["name"];
        $price = $_POST["price"];
        $height = $_POST['height'];
        $width = $_POST['width'];
        $length = $_POST['length'];
        $dimension = $height . "x" . $width . "x" . $length;
        if (isset($_POST["height"], $_POST["width"], $_POST["length"]))
        {
            $MySQLData = new MySQLData();
            $furniture = new Furniture($SKU, $name, $price, $dimension);
            echo $furniture->validateType($dimension);
            $MySQLData->insert($furniture->getSKU(), $furniture->getName(), $furniture->getPrice(), $furniture->getDimension(), "dimensions");


        }
    }

    public function insertBook()
    {
        $SKU = $_POST["SKU"];
        $name = $_POST["name"];
        $price = $_POST["price"];
        $weight = $_POST['Book'];
        if (isset($_POST["Book"]))
        {
            $MySQLData = new MySQLData();
            $book = new Book($SKU, $name, $price, $weight);
            echo $book->validateType($weight);
            $MySQLData->insert($book->getSKU(), $book->getName(), $book->getPrice(), $book->getWeight(), "weight");

        }
    }
}