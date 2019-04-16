<?php
// get form fields of GET submit
foreach ($_GET as $key => $value) {
    echo "Key=" . $key . ", Value=" . $value;
    echo "<br>";
}