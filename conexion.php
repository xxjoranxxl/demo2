<?php
	function conexion(){

	$host = "dpg-cr6g015umphs73b4hn2g-a";
	$port = "5432";
	$dbname = "dbprueba_sffv";
	$user = "dbprueba_sffv_user";
	$password = "nMo5B20FWaBuaAvHEviYmwTFSEvFSgxU";

	$db = pg_connect("$host $port $dbname $user $password");

	return $db;
}
?>
