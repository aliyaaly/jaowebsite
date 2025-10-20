<?php
error_reporting(E_ALL & !E_NOTICE);
//error_reporting(E_ALL);
$mysqli = new mysqli("localhost", "root", "", "jobs");

/* check connection */
if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}

/*----------- function Execute query --------------*/

// mysql_query("SET NAMES 'utf8'");
$mysqli->set_charset("utf8");


