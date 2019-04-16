<?php
session_start();

foreach ($_SESSION as $key => $value) {
    echo "Key=" . $key . ", Value=" . $value;
    echo "<br>";
}