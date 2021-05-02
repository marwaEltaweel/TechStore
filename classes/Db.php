<?php

namespace TechStore\Classes;

// require_once("../app.php");

abstract class Db
{
    protected $conn;
    protected $table;

    public function connect()
    {
        $serverName='localhost';
        $dbUser='root';
        $dbPassword='';
        $dbName='techstore';

        $this->conn = mysqli_connect(DB_SERVERNAME, DB_USERNAME, DB_PASSWORD, DB_NAME);
    }

    public function selectAll(string $fields = "*") : array
    {
        $sql = "SELECT $fields FROM $this->table";
        $result = mysqli_query($this->conn, $sql);
        return mysqli_fetch_all($result, MYSQLI_ASSOC);
    }
    
    public function selectId($id, string $fields = "*")
    {
        $sql = "SELECT $fields FROM $this->table WHERE id = $id";
        $result = mysqli_query($this->conn, $sql);
        return mysqli_fetch_assoc($result, MYSQLI_ASSOC);
    }

    public function selectWhere($conds, string $fields = "*") : array
    {
        $sql = "SELECT $fields FROM $this->table WHERE $conds";
        $result = mysqli_query($this->conn, $sql);
        return mysqli_fetch_all($result, MYSQLI_ASSOC);
    }

    public function getCount() : int
    {
        $sql = "SELECT COUNT(*) AS cnt FROM $this->table";
        $result = mysqli_query($this->conn, $sql);
        return mysqli_fetch_assoc($result)['cnt'];
    }

    public function insert(string $fields, string $values) : bool
    {
        $sql = "INSERT INTO $this->table ($fields) VALUES ($values)";
        return $result = mysqli_query($this->conn, $sql);
    }

    public function updateID(string $set, $id) : bool
    {
        $sql = "UPDATE $this->table SET $set WHERE id = $id";
        return $result = mysqli_query($this->conn, $sql);
    }

    public function updateWhere(string $set, $conds) : bool
    {
        $sql = "UPDATE $this->table SET $set WHERE $conds";
        return $result = mysqli_query($this->conn, $sql);
    }

    public function delete( $id) : bool
    {
        $sql = "DELETE FROM $this->table WHERE id = $id";
        return $result = mysqli_query($this->conn, $sql);
    }




}
?>