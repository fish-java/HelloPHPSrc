<?php
$url = "localhost:3306/hello_php";
$username = "root";

$conn = new mysqli($url, $username);

if ($conn->connect_error) {
    die("connector error: " . $conn->connect_error);
}
echo "mission success";
echo "<br>";

$sql = "select * from user";
$result = $conn->query($sql);

if ($result != null and $result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " - Name: " .
            $row["username"]. " " . $row["password"]. "<br>";
    }
} else {
    echo "0 result";
}
$conn->close();
