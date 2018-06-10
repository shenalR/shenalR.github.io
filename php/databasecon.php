<?php

#dbconnection

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "topjob";

$sqlcon = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname)or die("Error In Database".mysqli_error());

?>