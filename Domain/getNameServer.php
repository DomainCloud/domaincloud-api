<?php
include('_apiProcess.php');

$params = [
    "domainid" => "",
    "domainname" => "",
    "sld" => "", // eg. yourdomain
    "tld" => "", // eg. .id
];

$a = getNameservers($params);
var_dump($a);