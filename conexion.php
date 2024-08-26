<?php
	function conexion(){

	$host = "host=dpg-cr6g015umphs73b4hn2g-a";
	$port = "port=5432";
	$dbname = "dbname=dbprueba_sffv";
	$user = "user=dbprueba_sffv_user";
	$password = "password=nMo5B20FWaBuaAvHEviYmwTFSEvFSgxU";

	$db = pg_connect("$host $port $dbname $user $password");

	return $db;
}
?>
