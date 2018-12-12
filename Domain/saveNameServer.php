<?php
include('_apiProcess.php');

$params = [
    "sld" => "yourdomain",
    "tld" => "id",
    "ns1" => "ns1.domaincloud.id",
    "ns2" => "ns2.domaincloud.id",
    "ns3" => "ns3.domaincloud.id",
    "ns4" => "",
    "ns5" => "",
];

$a = saveNameservers($params);
var_dump($a);