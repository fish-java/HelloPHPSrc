<?php
$url = "localhost:3306";
$username = "root";

$conn = new mysqli($url, $username);

if ($conn->connect_error) {
    die("connector error: " . $conn->connect_error);
} else {
    echo "mission success";
    echo "<br>";
    $conn->select_db("hello_php");
}


$sql = "insert into user(username, password) values ('Bob', '123456')";
$result = $conn->query($sql);
if ($result){
    echo "insert success.";
} else {
    echo $conn->error;
}

$conn->close();
