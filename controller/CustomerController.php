<?php

namespace Controller;

use Model\Customers;
use Model\CustomersDB;
use Model\DBConnection;

class CustomerController
{
    protected $customerDB;

    public function __construct()
    {
        $conn = new DBConnection();
        $this->customerDB = new CustomersDB($conn->connect());
    }

    public function add()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            include_once '../view/add.php';
        } else {
            $name = $_REQUEST['add-name'];
            $email = $_REQUEST['add-email'];
            $address = $_REQUEST['add-address'];

            $customer = new Customers($name, $email, $address);
            $this->customerDB->create($customer);
            $message = 'Customer Created';
            include_once '../view/add.php';
        }
    }
}