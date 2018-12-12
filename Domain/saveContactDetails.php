<?php
include('_apiProcess.php');

$params = [ 
    "sld" => "yourdomain",
    "tld" => "id",
    "ContactName" => "John Doe",
    "ContactOrg" => "JohnDoe",
    "ContactAddress1" => "Jl. Palgenep",
    "ContactAddress2" => "-",
    "ContactCity" => "Kabupaten Bandung",
    "ContactState" => "Jawa Barat",
    "ContactZIP" => "40266",
    "ContactCountry" => "ID",
    "ContactPhoneNum" => "+62.8962896289",
    "ContactEmail" => "johndoe@domain.id"
];

$a = saveContactDetails($params);
var_dump($a);