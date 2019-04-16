<?php
// get request headers

foreach (apache_request_headers() as $key => $value) {
    echo "Key=" . $key . ", Value=" . $value;
    echo "<br>";
}