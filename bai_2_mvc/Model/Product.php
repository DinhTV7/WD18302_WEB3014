<?php
require_once "BaseModel.php";
class Product extends BaseModel
{
    public function getProduct () {
        $sql = "SELECT * FROM product";
        return $this->dataProcess($sql);
    }
}