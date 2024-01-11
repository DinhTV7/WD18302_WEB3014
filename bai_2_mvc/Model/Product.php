<?php
require_once "db.php";
function getProduct () {
    $sql = "SELECT * FROM product";
    return dataProcess($sql);
}