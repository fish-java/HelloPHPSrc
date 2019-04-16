<?php
$url = "localhost:3306/hello_php";
$username = "root";

$conn = mysqli_connect($url, $username);
echo var_dump($conn);

if ($conn->connect_error) {
    die("connector error: " . $conn->connect_error);
} else {
    echo "mission success";
}