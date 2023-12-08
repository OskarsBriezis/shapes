<?php
header('Access-Control-Allow-Origin: *');
$data = ["message" => "Hi frontend"];
echo json_encode($data);