<?php
namespace Model;

class Customers
{
    protected $id;
    public $name;
    public $email;
    public $address;

    public function __construct($name,$email,$address)
    {
        $this->name = $name;
        $this->email = $email;
        $this->address = $address;
    }

}