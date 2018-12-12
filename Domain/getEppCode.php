<?php
include('_apiProcess.php');

$params = [
    "sld" => "yourdomain",
    "tld" => ".id",
];

$a = getEPPCode($params);
var_dump($a);