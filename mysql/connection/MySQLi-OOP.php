<?php
$url = "localhost:3306/hello_php";
$username = "root";

$conn = new mysqli($url, $username);

if ($conn->connect_error) {
    die("connector error: " . $conn->connect_error);
} else {
    echo "mission success";
}

$conn->close();