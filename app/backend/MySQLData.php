<?php

namespace Scandiweb\backend;

class MySQLData extends DatabaseConnection {

    public function showData()
    {
        $conn = $this->getMySQLConnection();
        $results = mysqli_query($conn, "SELECT * FROM products ORDER BY id");
        return $results;
    }

    public function deleteData()
    {
        $conn = $this->getMySQLConnection();
        if (isset($_POST['delete-product-btn'])) {
            $arr = $_POST['checkbox'];
            foreach ($arr as $id) {
                mysqli_query($conn, "DELETE FROM products WHERE id =" . $id);
            }

        }
    }

    public function insertDataDVD($SKU, $name, $price, $DVD)
    {

        $conn = $this->getMySQLConnection();
        mysqli_query($conn, "INSERT INTO " . $this->dbtable . "(SKU, name, price, size) VALUES 
        ('$SKU', '$name', '$price', '$DVD')") or die(mysqli_error($conn));

    }

    public function insertDatabook($SKU, $name, $price, $book)
    {
        $conn = $this->getMySQLConnection();
        mysqli_query($conn, "INSERT INTO " . $this->dbtable . "(SKU, name, price, weight) VALUES 
        ('$SKU', '$name', '$price', '$book')") or die(mysqli_error($conn));

    }

    public function insertDataFur($SKU, $name, $price, $dimension)
    {
        $conn = $this->getMySQLConnection();
        mysqli_query($conn, "INSERT INTO " . $this->dbtable . "(SKU, name, price, dimensions) VALUES 
        ('$SKU', '$name', '$price', '$dimension')") or die(mysqli_error($conn));

    }
}