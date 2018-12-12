<?php
include('_apiProcess.php');

$params = [
    "sld" => "yourdomain",
    "tld" => "id",
];

$a = getContactDetails($params);
var_dump($a);