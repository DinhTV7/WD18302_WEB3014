<?php
namespace App\Controllers;

require "App/Models/Customer.php";
use App\Models\Customer;
use DateTime;

class CustomerController
{
    public function __construct()
    {
        $customer = new Customer();
        echo "Đây là Customer Controller <br/>";
        $dateTime = new DateTime();
        var_dump($dateTime);
    }
}