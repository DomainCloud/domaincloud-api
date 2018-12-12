<?php
include('_apiProcess.php');

$params = [
    "sld" => "yourdomain",
    "tld" => "id",
];

$a = requestDelete($params);
var_dump($a);