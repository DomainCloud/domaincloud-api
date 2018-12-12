<?php
$config = array(
    'authemail' => YOUR_AUTH_EMAIL,
    'token' => YOUR_TOKEN,
    'endpoint' => DNS_API_ENDPOINT
);

$data = array(
    "token" => $config["token"],
    "authemail" => $config["authemail"],
    "dnsaction" => "SaveRecords",
    "domain" => "yourdomain.id", // domain name
    "dnsrecid" => array("45585", "45587"),
    "dnsrecordhost" => array("yourdomain.id", "yourdomain.id"),
    "dnsrecordtype" => array("NS", "NS"),
    "dnsrecordaddress" => array("ns1.domaincloud.id", "ns2.domaincloud.id"),
    "dnsrecordttl" => array("21600", "21600"),
);

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $config['endpoint']);
curl_setopt($ch, CURLOPT_TIMEOUT, 0);
curl_setopt($ch, CURLOPT_FRESH_CONNECT, 1);
curl_setopt($ch, CURLOPT_IPRESOLVE, CURL_IPRESOLVE_V4);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HEADER, false);
$output = curl_exec($ch);

var_dump($output);