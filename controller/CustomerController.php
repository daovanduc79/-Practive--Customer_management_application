<?php

namespace Controller;

use Model\Customers;
use Model\CustomersDB;
use Model\DBConnection;

session_start();

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
            if ($name == '' or $email == '') {
                $_SESSION['error-add'] = 'name or email not null';
                header('location: index.php?page=add');
            } else {
                $customer = new Customers($name, $email, $address);
                $this->customerDB->create($customer);
                $_SESSION['massage'] = 'Customer Created';
                include_once 'view/add.php';
                header('location: index.php');
            }


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
            header('Location: index.php');
        }
    }

    public function edit()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            $id = $_GET['id'];
            $customer = $this->customerDB->get($id);
            include 'view/edit.php';
        } else {
            $id = $_POST['id'];
            if ($_POST['up-name'] == '' or $_POST['up-email'] == '') {
                $_SESSION['error-edit'] = 'name or email not null';
                header("location: index.php?page=update&id=$id");
            } else {
                $customer = new Customers($_POST['up-name'], $_POST['up-email'], $_POST['up-address']);
                $this->customerDB->update($id, $customer);
                header('Location: index.php');
            }
        }
    }
}