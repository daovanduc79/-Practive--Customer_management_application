<?php

namespace Model;

use PDO;
use PDOException;

class DBConnection
{
    public $server;
    public $username;
    public $password;

    public function __construct()
    {
        $this->server = 'mysql:host=localhost;dbname=lesson-21-mvc';
        $this->username = 'root';
        $this->password = '123456@Abc';
    }

    public function connect()
    {
        $conn = null;

        try {
            $conn = new PDO($this->server, $this->username, $this->password);
        } catch (PDOException $e) {
            $e->getMessage();
            exit();
        }

        return $conn;
    }
}