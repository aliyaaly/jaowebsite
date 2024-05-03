<?php
error_reporting(E_ALL & !E_NOTICE);
//error_reporting(E_ALL);
$mysqli = new mysqli("localhost", "root", "56588965", "jobs");

/* check connection */
if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}

/*----------- function Execute query --------------*/

// mysql_query("SET NAMES 'utf8'");
$mysqli->set_charset("utf8");


function nr_execute($qry){
	$res = mysql_query($qry);
	if ($res != null){
		$row = @mysql_fetch_row($res);
		if ($row != null){
			return $row[0];
		}
	}
}