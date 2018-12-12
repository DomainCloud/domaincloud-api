<?php
include('_apiProcess.php');

$params = [
    "sld" => "yourdomain",
    "tld" => "id",
];

$a = getRegistrarLock($params);
var_dump($a);