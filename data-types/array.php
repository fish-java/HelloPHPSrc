<?php
$arr = array(1, true, "Jon", "PI" => 3.14, 666);
echo var_dump($arr);
echo "<br>";
// array(5) { [0]=> int(1) [1]=> bool(true) [2]=> string(3) "Jon"
// ["PI"]=> float(3.14) [3]=> int(666) }

foreach ($arr as $key => $value) {
    echo "Key=" . $key . ", Value=" . $value;
    echo "<br>";
}
// Key=0, Value=1
// Key=1, Value=1
// Key=2, Value=Jon
// Key=PI, Value=3.14
// Key=3, Value=666
