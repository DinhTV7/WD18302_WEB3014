<?php

namespace App\Controllers;

class ProductController extends BaseController
{
    public function index()
    {
        // echo "Đây là ProductController index";
        $title = "Danh sách sản phẩm";
        $arr = [
            [
                "name" => "Tạ Văn Định",
                "email" => "dinhtv7@gmail.com"
            ],
            [
                "name" => "Tạ Văn Định",
                "email" => "dinhtv7@gmail.com"
            ]
        ];
        $this->render('product.index', compact('title', 'arr'));
    }
}
