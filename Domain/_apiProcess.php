<?php
/**
 * Copyright (c) 2018, Infinys System Indonesia
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 *
 * This is registar command module for connecting to DomainCloud API.
 *
 * @package    SampleDCAPI
 * @author     Infinys System Indonesia
 * @copyright  Copyright (c) Infinys System Indonesia. 2018
 * @license    http://www.isi.co.id/
 * @link       http://www.isi.co.id/
 */

date_default_timezone_set('Asia/Jakarta');

error_reporting(E_ALL);
ini_set('display_errors', true);

function registerDomain($params) {
	$values = _api_process($params, "RegisterDomain");
	return $values;
}

function transferDomain($params) {
	$values = _api_process($params, "TransferDomain");
	return $values;
}

function renewDomain($params) {
	$values = _api_process($params, "RenewDomain");
	return $values;
}

function getNameservers($params) {
	$values = _api_process($params, "GetNameservers");
	return $values;
}

function saveNameservers($params) {
	
	$values = _api_process($params, "SaveNameservers");
	return $values;
}

function getRegistrarLock($params) {
	$values = _api_process($params, "GetRegistrarLock");
	return $values;
}

function saveRegistrarLock($params) {
	$values = _api_process($params, "SaveRegistrarLock");
	return $values;
}

function getContactDetails($params) {
	$values = _api_process($params, "GetContactDetails");
	return $values;
}

function saveContactDetails($params) {
	$values = _api_process($params, 'SaveContactDetails');
	return $values;
}

function getEPPCode($params) {
	$values = _api_process($params, "GetEPPCode");
	return $values;
}

function registerNameserver($params) {
	$values = _api_process($params, "RegisterNameserver");
	return $values;
}

function modifyNameserver($params) {
	$values = _api_process($params, "ModifyNameserver");
	return $values;
}

function deleteNameserver($params) {
	$values = _api_process($params, "DeleteNameserver");
	return $values;
}

function requestDelete($params) {
	$values = _api_process($params, 'RequestDelete');
	return $values;
}


function _api_process($params, $command) {
	$config = array(
		'authemail' => YOUR_AUTH_EMAIL,
		'token' => YOUR_TOKEN,
		'endpoint' => DF_API_ENDPOINT
	);

	
	$data = array(
		"action" => $command,
		"token" => $config["token"],
		"authemail" => $config["authemail"],
	);
	$data = array_merge($data, $params);
	
	$query_string = http_build_query($data);

	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $config['endpoint']);
	curl_setopt($ch, CURLOPT_TIMEOUT, 0);
	curl_setopt($ch, CURLOPT_FRESH_CONNECT, 1);
	curl_setopt($ch, CURLOPT_IPRESOLVE, CURL_IPRESOLVE_V4);
	curl_setopt ($ch, CURLOPT_FOLLOWLOCATION, true);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $query_string);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_HEADER, false);
	$output = curl_exec($ch);
	var_dump($output);
	
	if ($output == false) {
		$res = array("error" => curl_error($ch));
	} else {
		$res = json_decode($output, true);
	}
	return $res;
	curl_close($ch);
}
?>