<?php
include('_apiProcess.php');

$params = [
	"domainid"=> "",
	"domainname"=> "",
	"sld"=> "", // eg. yourdomain
	"tld"=> "", // eg. .id
	"nameserver"=> "",
	"currentipaddress"=> "",
	"newipaddress"=> "",
];

$a = modifyNameserver($params);
var_dump($a);