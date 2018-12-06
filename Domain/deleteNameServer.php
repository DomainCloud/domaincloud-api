<?php
include('_apiProcess.php');

$params = [
	"domainid" => "",
	"domainname" => "",
	"sld" => "", // eg. yourdomain
	"tld" => "", // eg. .id
	"regperiod" => "1",
	"dnsmanagement" => false, // True/false for if DNS Management add-on is active
	"emailforwarding" => false, // True/false for if Email Forwarding add-on is active
	"idprotection" => false, // True/false for if ID Protection add-on is active
	"premiumEnabled" => false, // True if premium domain orders are enabled in WHMCS (Registration/Transfers only)
	"nameserver" => "",
];

$a = deleteNameserver($params);
var_dump($a);