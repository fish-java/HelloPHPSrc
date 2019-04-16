<?php
echo "request method is: " . $_SERVER['REQUEST_METHOD'] . "<br>";

echo "request path is: " . $_SERVER['REQUEST_URI'] . "<br>";

echo "request protocol is: " . $_SERVER['SERVER_PROTOCOL'] . "<br>";

echo "request header: <br>";
foreach (apache_request_headers() as $key => $value) {
    echo "Key=" . $key . ", Value=" . $value;
    echo "<br>";
}

