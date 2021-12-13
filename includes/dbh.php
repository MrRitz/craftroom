<?php

$serverName = "localhost";
$dBUsername = //"Database username here";
$dBPassword = //"Database password here";
$dBName = //"Database name here";

$conn = mysqli_connect($serverName, $dBUsername, $dBPassword, $dBName);

if (!$conn) {
    die("Connection Failed: " . mysqli_connect_error());
}