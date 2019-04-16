<?php
$data = array(1,2,3);
header('Content-Type: application/json');
echo json_encode($data);