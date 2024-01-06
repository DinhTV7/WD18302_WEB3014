<?php
require_once "env.php";
function getConnect()
{
    $connect = new PDO(
        "mysql:host=" . DBHOST
            . ";dbname=" . DBNAME,
        DBUSER,
        DBPASS
    );
    return $connect;
}