<?php
namespace Scandiweb\backend;

use Scandiweb\backend\Products\Book;
use Scandiweb\backend\Products\DVD;
use Scandiweb\backend\Products\Furniture;

class InsertData {

    public function insertDVD()
    {
        if (isset($_POST["size"]))
        {
            $MySQLData = new MySQLData();
            $dvd = new DVD($_POST["SKU"], $_POST["name"], $_POST["price"], $_POST["size"]);
            echo $dvd->validateType($_POST["size"]);
            $MySQLData->insert($dvd->getSKU(), $dvd->getName(), $dvd->getPrice(), $dvd->getSize(), "size");

        }
    }

    public function insertFurniture()
    {
        $dimension = $_POST['height'] . "x" . $_POST['width'] . "x" . $_POST['length'];
        if (isset($_POST["height"], $_POST["width"], $_POST["length"]))
        {
            $MySQLData = new MySQLData();
            $furniture = new Furniture($_POST["SKU"], $_POST["name"], $_POST["price"], $dimension);
            echo $furniture->validateType($dimension);
            $MySQLData->insert($furniture->getSKU(), $furniture->getName(), $furniture->getPrice(), $furniture->getDimension(), "dimensions");


        }
    }

    public function insertBook()
    {
        if (isset($_POST["Book"]))
        {
            $MySQLData = new MySQLData();
            $book = new Book($_POST["SKU"], $_POST["name"], $_POST["price"], $_POST["Book"]);
            echo $book->validateType($_POST["Book"]);
            $MySQLData->insert($book->getSKU(), $book->getName(), $book->getPrice(), $book->getWeight(), "weight");

        }
    }
}
