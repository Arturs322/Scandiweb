<?php

namespace Scandiweb\backend;

abstract class DatabaseConnection
{
    protected string $servername = "localhost";
    protected string $username = "arturx";
    protected string $password = "artursmysql123";
    protected string $dbname = "scandiweb";
    protected string $dbtable = "products";

    public function construct__
    (
        string $servername,
        string $username,
        string $password,
        string $dbname,
        string $dbtable
    )
    {
        $this->servername = $servername;
        $this->username = $username;
        $this->password = $password;
        $this->dbname = $dbname;
        $this->dbtable = $dbtable;
    }

    public function getMySQLConnection()
    {
        return $conn = mysqli_connect($this->servername, $this->username, $this->password, $this->dbname);
    }


}
