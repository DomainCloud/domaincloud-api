<?php
include('_apiProcess.php');

$params = [
    "sld" => "yourdomain",
    "tld" => "id",
];

$a = getNameservers($params);
var_dump($a);