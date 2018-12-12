<?php
include('_apiProcess.php');

$params = array(
    "sld" => "yourdomain",
    "tld" => "id",
    "domaintype" => "register",
    "regperiod"=>  "1",
    "dnsmanagement" => false,
    "emailforwarding" => false,
    "idprotection" => false,
    "adminfirstname" => "John",
    "adminlastname" => "Doe",
    "admincompanyname" => "JD",
    "adminemail" => "johndoe@domain.id",
    "adminaddress1" => "Jl. Palgenep",
    "adminaddress2" => "-",
    "admincity" => "Kabupaten Bandung",
    "adminfullstate" => "Jawa Barat",
    "adminstate" => "",
    "adminpostcode" => "40266",
    "admincountry" => "ID",
    "adminphonenumber" => "8962896289",
    "ns1" => "ns1.domaincloud.id",
    "ns2" => "ns2.domaincloud.id",
    "ns3" => "",
    "ns4" => "",
    "ns5" => "",
    "firstname" => "John",
    "lastname" => "Doe",
    "companyname" => "JD",
    "email" => "johndoe@domain.id",
    "address1" => "Jl. Palgenep",
    "address2" => "-",
    "city" => "Kabupaten Bandung",
    "state" => "",
    "postcode" => "40266",
    "country" => "ID",
    "phonenumber" => "8962896289",
    "paymentmethod"=>"banktransfer"
);

$a = registerDomain($params);
var_dump($a);