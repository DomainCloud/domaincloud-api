<?php
$config = array(
    'authemail' => YOUR_AUTH_EMAIL,
    'token' => YOUR_TOKEN,
    'endpoint' => DNS_API_ENDPOINT
);

$data = array(
    "token" => $config["token"],
    "authemail" => $config["authemail"],
    "dnsaction" => "AddRecord",
    "domain" => "yourdomain.id", // domain name
    "dnsrecordhost" => "dns.yourdomain.id",
    "dnsrecordtype" => "A", // A, CNAME, MX, TXT
    "dnsrecordaddress" => "dns.yourdomain.id",
    "dnsrecordttl" => "3600",
    "dnsrecordpriority" => "",
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