<?php

namespace Scandiweb\backend;

class MySQLData extends DatabaseConnection implements QueryInterface {

    public function read()
    {
        $conn = $this->getMySQLConnection();
        return mysqli_query($conn, "SELECT * FROM " . $this->dbtable . " ORDER BY id");
    }

    public function delete()
    {
        $conn = $this->getMySQLConnection();
        if (isset($_POST['delete-product-btn'])) {
            $arr = $_POST['checkbox'];
            foreach ($arr as $id) {
                mysqli_query($conn, "DELETE FROM " . $this->dbtable . " WHERE id =" . $id);
            }

        }
    }

    public function insert($SKU, $name, $price, $value, $choose)
    {

        $conn = $this->getMySQLConnection();
        mysqli_query($conn, "INSERT INTO " . $this->dbtable . "(SKU, name, price, {$choose}) VALUES 
        ('$SKU', '$name', '$price', '$value')") or die(mysqli_error($conn));

    }

}