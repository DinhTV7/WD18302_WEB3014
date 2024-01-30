<?php
namespace App\Controllers;

class HomeController
{
    public function index($id)
    {
        echo "Đây là trang home index $id";
    }

    public function list()
    {
        echo "Đây là trang home list";
    }
}