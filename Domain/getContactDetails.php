<?php
include('_apiProcess.php');

$params = [
    "sld" => "", // eg. yourdomain
    "tld" => "", // eg. .id
];

$a = getContactDetails($params);
var_dump($a);