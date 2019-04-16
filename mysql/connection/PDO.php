<?php
$url = "mysql:host=localhost:3306/hello_php";
$username = "root";

try {
    $conn = new PDO($url, $username);
    echo "connection success";
}
catch(PDOException $e)
{
    echo $e->getMessage();
}
