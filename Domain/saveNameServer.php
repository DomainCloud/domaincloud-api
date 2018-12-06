<?php
include('_apiProcess.php');

$params = [
    "domainid" => "",
    "domainname" => "",
    "sld" => "", // eg. yourdomain
    "tld" => "", // eg. .id
    "ns1" => "",
    "ns2" => "",
    "ns3" => "",
    "ns4" => "",
    "ns5" => "",
];

$a = saveNameservers($params);
var_dump($a);