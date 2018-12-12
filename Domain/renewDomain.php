<?php
include('_apiProcess.php');

$params = array(
    "sld" => "yourdomain",
    "tld" => "id",
    "regperiod"=>  "1",
    "paymentmethod"=>"banktransfer"
);

$a = renewDomain($params);
var_dump($a);