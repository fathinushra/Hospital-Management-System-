<?php
$mysql_hostname = "localhost";
$mysql_user     = "root";
$mysql_password = "";
$mysql_database = "labds";

// Create connection
$bd = new mysqli($mysql_hostname, $mysql_user, $mysql_password, $mysql_database);

// Check connection
if ($bd->connect_error) {
    die("Connection failed: " . $bd->connect_error);
}
