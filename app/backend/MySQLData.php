<?php

namespace Scandiweb\backend;

class MySQLData extends DatabaseConnection implements QueryInterface {

    public function read()
    {
        return mysqli_query($this->getMySQLConnection(), "SELECT * FROM " . $this->dbtable . " ORDER BY id");
    }

    public function delete()
    {
        
        if (isset($_POST['delete-product-btn'])) {
            $arr = $_POST['checkbox'];
            foreach ($arr as $id) {
                mysqli_query($this->getMySQLConnection(), "DELETE FROM " . $this->dbtable . " WHERE id =" . $id);
            }

        }
    }

    public function insert($SKU, $name, $price, $value, $choose)
    {
        mysqli_query($this->getMySQLConnection(), "INSERT INTO " . $this->dbtable . "(SKU, name, price, {$choose}) VALUES 
        ('$SKU', '$name', '$price', '$value')") or die(mysqli_error($conn));

    }

}
