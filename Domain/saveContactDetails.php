<?php
include('_apiProcess.php');

$params = [
    "domainid" => "",
    "domainname" => "SIO.my.id", 
    "sld" => "", // eg. yourdomain
    "tld" => "", // eg. .id 
    "ContactName" => "",
    "ContactOrg" => "",
    "ContactAddress1" => "",
    "ContactAddress2" => "",
    "ContactCity" => "",
    "ContactState" => "",
    "ContactZIP" => "",
    "ContactCountry" => "",
    "ContactPhoneNum" => "",
    "ContactEmail" => ""
];

$a = saveContactDetails($params);
var_dump($a);