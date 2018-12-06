<?php
include('_apiProcess.php');

$params = [
	"domainid" => "",
	"domainname" => "",
	"sld" => "", // eg. yourdomain
	"tld" => "", // eg. .id
	"nameserver" => "",
	"ipaddress" => ""
];

$a = registerNameserver($params);
var_dump($a);