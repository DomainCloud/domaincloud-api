<?php
include('_apiProcess.php');

$params = [
    "sld" => "yourdomain",
    "tld" => "id",
    "nameserver" => "ns1.yourdomain.id",
];

$a = deleteNameserver($params);
var_dump($a);