<?php
include('_apiProcess.php');

$params = [
    "sld" => "yourdomain",
    "tld" => "id",
    "lockenabled" => "unlocked", // unlocked or locked 
];

$a = saveRegistrarLock($params);
var_dump($a);