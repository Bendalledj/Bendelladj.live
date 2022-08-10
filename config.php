<?php

$dbhost = "localhost";
$dbuser = "sysadm";
$dbpass = "kr4705";
$dbname = "project";

if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{

	die("failed to connect!");
}
