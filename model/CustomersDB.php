<?php

namespace Model;

class CustomersDB
{
    public $conn;

    public function __construct($conn)
    {
        $this->conn = $conn;
    }

    public function create($customer)
    {
        $sql = "INSERT INTO `customers`(`name`,`email`,`address`) VALUE (?,?,?)";
        $stmt = $this->conn->qrepera($sql);
        $stmt->bindParam(1,$customer->name);
        $stmt->bindParam(2,$customer->email);
        $stmt->bindParam(3,$customer->address);
        return $stmt->execute();
    }

}