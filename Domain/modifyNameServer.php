<?php
include('_apiProcess.php');

$params = [
    "sld" => "yourdomain",
    "tld" => "id",
    "nameserver" => "ns1.yourdomain.id",
    "currentipaddress" => "",
    "newipaddress" => "",
];

$a = modifyNameserver($params);
var_dump($a);