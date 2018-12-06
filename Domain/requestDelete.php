<?php
include('_apiProcess.php');

$params = [
	"domainid"=> "",
	"domainname"=> "", 
	"sld"=> "", // eg. yourdomain
	"tld"=> "", // eg. .id
];

$a = requestDelete($params);
var_dump($a);