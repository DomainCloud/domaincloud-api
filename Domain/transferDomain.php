<?php
include('_apiProcess.php');

$params = array(
	"domainid"=>"",
	"domainname"=>"",
	"sld"=>"", // eg. yourdomain
	"tld"=>"", // eg. .id
	"dnsmanagement"=> false, // True/false for if DNS Management add-on is active
	"emailforwarding"=> false, // True/false for if Email Forwarding add-on is active
	"idprotection"=> false, // True/false for if ID Protection add-on is active
	"premiumEnabled"=> false, // True if premium domain orders are enabled in WHMCS (Registration/Transfers only)
	"adminfirstname"=> "",
	"adminlastname"=>"",
	"admincompanyname"=>"",
	"adminemail"=> "",
	"adminaddress1"=> "",
	"adminaddress2"=>"",
	"admincity"=> "",
	"adminfullstate"=> "",
	"adminstate"=> "",
	"adminpostcode"=>"",
	"admincountry"=>"ID",
	"adminphonenumber"=> "",
	"ns1"=> "",
	"ns2"=> "",
	"ns3"=>"",
	"ns4"=>"",
	"ns5"=>"",
	"userid"=>"",
	"firstname"=> "",
	"lastname"=>"",
	"fullname"=> "",
	"companyname"=>"",
	"email"=> "",
	"address1"=> "",
	"address2"=>"",
	"city"=> "",
	"fullstate"=> "",
	"state"=> "",
	"postcode"=>"",
	"country"=>"ID",
	"phonenumber"=> "",
);

$a = transferDomain($params);
var_dump($a);