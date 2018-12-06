<?php
$config = array(
	'authemail' => YOUR_AUTH_EMAIL,
	'token' => YOUR_TOKEN,
	'endpoint' => DF_API_ENDPOINT
);

$data = array(
	"token" => $config["token"],
	"authemail" => $config["authemail"],
	"action" => "addrecord",
	"domain" => "", // domain name
	"recid"	=> "",
	"origin_domain" => "",
	"destination_domain" => "",
	"type" => "", //301 or 302
	"option" => "1", // 1: Only redirect with www, 2: Redirect with or without www, 3: Do no redirect www
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