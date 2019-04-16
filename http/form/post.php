<?php
// get form fields of POST submit
foreach ($_POST as $key => $value) {
    echo "Key=" . $key . ", Value=" . $value;
    echo "<br>";
}