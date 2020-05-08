<?php

use Controller\CustomerController;
use Model\DBConnection;

include_once 'model/CustomersDB.php';
include_once 'model/Customers.php';
include_once 'model/DBConnection.php';
include_once 'controller/CustomerController.php';


$name = 'nam';
$email = 'nam@gmail.com';
$address = 'tay tang';

$conn = new DBConnection();
$sql = "INSERT INTO `customers`(`name`, `email`, `address`) VALUES (?,?,?)";
$stmt = $conn->connect()->prepare($sql);
$stmt->bindParam(1, $name);
$stmt->bindParam(2, $email);
$stmt->bindParam(3, $address);

$stmt->execute();



