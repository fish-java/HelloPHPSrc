<?php
// contract two string
$hw = "hello" . " " . "world";

// get length of a string
echo strlen($hw);
// 11

// get fist index of a substring
echo strpos($hw, "world");
// 6

echo var_dump(strpos($hw, "WOW"));
// bool(false)