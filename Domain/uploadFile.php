<?php
$config = array(
    'authemail' => YOUR_AUTH_EMAIL,
    'token' => YOUR_TOKEN,
    'endpoint' => DF_API_ENDPOINT
);


$data = [
	"token" => $config["token"],
	"authemail" => $config["authemail"],
	"action" => 'UploadFile',
	"sld"=> "", // eg. yourdomain
	"tld"=> "", // eg. .id
	"file" => new \CURLFile(""),
	"user_action" => "upload_1", // upload_1: Identity Document, upload_2: Legality Document, upload_3: Additional Document
	"doc_type" => "KTP" // KTP, PASSPORT, SIUP, TDA, AKTA, Surat Kuasa, Lainnya
];

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $config['endpoint']);
curl_setopt($ch, CURLOPT_TIMEOUT, 30);
curl_setopt($ch, CURLOPT_FRESH_CONNECT, 1);
curl_setopt($ch, CURLOPT_IPRESOLVE, CURL_IPRESOLVE_V4);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HEADER, false);
curl_setopt($ch, CURLOPT_SAFE_UPLOAD, true);

$output = curl_exec($ch);
if ($output == false) {
    $res = array("error"=>curl_error($ch));
} else {
    $res = json_decode($output, true);
}
curl_close($ch);

var_dump($output);