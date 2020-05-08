<?php

namespace Controller;

use Model\Customers;
use Model\CustomersDB;
use Model\DBConnection;

class CustomerController
{
    public $customerDB;

    public function __construct()
    {
        $conn = new DBConnection();
        $this->customerDB = new CustomersDB($conn->connect());
    }

    public function add()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            include_once 'view/add.php';
        } else {
            $name = $_REQUEST['add-name'];
            $email = $_REQUEST['add-email'];
            $address = $_REQUEST['add-address'];

            $customer = new Customers($name, $email, $address);
            $this->customerDB->create($customer);
            $message = 'Customer Created';
            include_once 'view/add.php';

        }
    }

    public function index()
    {
        $customers = $this->customerDB->getAll();
        include_once 'view/list.php';
    }

    public function delete()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            $id = $_GET['id'];
            $customer = $this->customerDB->get($id);
            include 'view/delete.php';
        } else {
            $id = $_POST['id'];
            $this->customerDB->delete($id);
            header('Location: index.php?page=list');
        }
    }
}