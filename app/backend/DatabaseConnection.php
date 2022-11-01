<?php

namespace Scandiweb\backend;

class DatabaseConnection
{
    public string $servername = "localhost";
    private string $username = " ";
    private string $password = " ";
    public string $dbname = "scandiweb";
    public string $dbtable = "products";

    public function getMySQLConnection()
    {
        return mysqli_connect($this->servername, $this->username, $this->password, $this->dbname);
    }

}
