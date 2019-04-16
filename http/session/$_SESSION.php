<?php
// get values from session

// start a session
session_start();

foreach ($_SESSION as $key => $value) {
    echo "Key=" . $key . ", Value=" . $value;
    echo "<br>";
}