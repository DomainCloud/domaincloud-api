<?php
include('_apiProcess.php');

$params = [
	"domainid" => "",
	"domainname" => "", 
	"sld" => "", // eg. yourdomain
	"tld" => "", // eg. .id
];

$a = getRegistrarLock($params);
var_dump($a);