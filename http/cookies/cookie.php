<?php
if (isset($_COOKIE["user"])) {
    echo "Hello " . $_COOKIE["user"] . "!<br>";
} else {
    echo "Hello friend! <br>";
    setcookie("user", "Jon Snow");
}

// the first time you visit this page, it shows "Hello friend"
// then next, it shows "Hello Jon Snow!"