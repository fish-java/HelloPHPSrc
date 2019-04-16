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


$sql = "select * from user";
$result = $conn->query($sql);
if ($result){
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " - Name: " .
            $row["username"]. " " . $row["password"]. "<br>";
    }
} else {
    echo $conn->error;
}

$conn->close();
