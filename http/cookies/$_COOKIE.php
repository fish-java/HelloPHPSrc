<?php
// get values from cookies

foreach ($_COOKIE as $key => $value) {
    echo "Key=" . $key . ", Value=" . $value;
    echo "<br>";
}