<?php

use App\Controllers\HomeController;
use Phroute\Phroute\RouteCollector;
use Phroute\Phroute\Dispatcher;

$url = !isset($_GET['url']) ? "/" : $_GET['url'];

$router = new RouteCollector();

// filter check đăng nhập
$router->filter('auth', function(){
    if(!isset($_SESSION['auth']) || empty($_SESSION['auth'])){
        header('location: ' . BASE_URL . 'login');die;
    }
});

// khu vực cần quan tâm -----------

// Khu vực định nghĩa ra các đường dẫn
// Cách định nghĩa ra 1 route
// GET, POST
// $router->phương_thức_http('tên route', hàm thực hiện công việc)
$router->get('/', function () {
    return "Đây là trang chủ";
});

$router->get('detail-home/{id}', [HomeController::class, "index"]);
// Tạo 1 controller CategoryController có các phương thức sau
// index, addCategory, createCategory
// detailCategory, editCategory, deleteCategory
// Tạo các route trỏ đến các phương thức trên
// Mỗi route hiển thị ra 1 nội dung khác nhau (echo)

// khu vực cần quan tâm -----------

# NB. You can cache the return value from $router->getData() so you don't have to create the routes each request - massive speed gains
$dispatcher = new Dispatcher($router->getData());

$response = $dispatcher->dispatch($_SERVER['REQUEST_METHOD'], $url);

// Print out the value returned from the dispatched function
echo $response;


?>