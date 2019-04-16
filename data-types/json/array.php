<?php
$arr = array("Jon", "Jan", "Smith");

echo json_encode($arr);
echo "<br>";
// ["Jon","Jan","Smith"]

$jsonArrayString = '["Jon","Jan","Smith"]';
echo var_dump(json_decode($jsonArrayString));
echo "<br>";
// array(3) { [0]=> string(3) "Jon" [1]=>
// string(3) "Jan" [2]=> string(5) "Smith" }

$arrMap = array("Jon", "age" => 33);
echo json_encode($arrMap);
echo "<br>";
// {"0":"Jon","age":33}

$jsonMapString = '{"0":"Jon","age":33,"1":"Jan"}';
echo var_dump(json_decode($jsonMapString));
echo "<br>";
// object(stdClass)#1 (3) { ["0"]=> string(3) "Jon"
// ["age"]=> int(33) ["1"]=> string(3) "Jan" }