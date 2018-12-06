<?php
include('_apiProcess.php');

$params = [
    "domainid"=> "",
	"domainname"=> "", 
	"sld"=> "", // eg. yourdomain
	"tld"=> "", // eg. .id
	"lockenabled"=> "unlocked", // unlocked or locked 
];

$a = saveRegistrarLock($params);
var_dump($a);