<?php
$url = "localhost:3306/hello_php";
$username = "root";

$conn = mysql_connect($url, $username);

echo var_dump($conn);

mysql_close($conn);