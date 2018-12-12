<?php
include('_apiProcess.php');

$params = [
    "sld" => "yourdomain",
    "tld" => "id",
    "nameserver" => "ns1.yourdomain.id",
    "ipaddress" => ""
];

$a = registerNameserver($params);
var_dump($a);