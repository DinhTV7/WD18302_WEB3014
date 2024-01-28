<?php
require "vendor/autoload.php";

use App\Dinhtv7;
use App\Models\User;
use App\UserController;
use Dinhtv7\HomeController;

$homeController = new HomeController();
$userController = new UserController();
$user = new User();
$dinhtv7 = new Dinhtv7();

echo getMess();