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
        $sql = "INSERT INTO `customers`(`name`, `email`, `address`) VALUES (?,?,?)";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(1, $customer->name);
        $stmt->bindParam(2, $customer->email);
        $stmt->bindParam(3, $customer->address);
        return $stmt->execute();
    }

    public function update($id, $customer){
        $sql = "UPDATE `customers` SET `name`=?,`email`=?,`address`=? WHERE `id`=?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(1, $customer->name);
        $stmt->bindParam(2, $customer->email);
        $stmt->bindParam(3, $customer->address);
        $stmt->bindParam(4, $id);
        return $stmt->execute();
    }

    public function getAll()
    {

        $sql = "SELECT * FROM customers";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll();

        $customers = [];
        foreach ($result as $item) {
            $customer = new Customers($item['name'], $item['email'], $item['address']);
            $customer->id = $item['id'];
            $customers[] = $customer;
        }
        return $customers;
    }

    public function get($id)
    {
        $sql = "SELECT * FROM customers WHERE `id` = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(1, $id);
        $stmt->execute();

        $row = $stmt->fetch();
        $customer = new Customers($row['name'], $row['email'], $row['address']);
        $customer->id = $row['id'];
        return $customer;
    }

    public function delete($id)
    {
        $sql = "DELETE FROM customers WHERE `id` = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(1, $id);
        return $stmt->execute();
    }

}