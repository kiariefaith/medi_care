<?php
$dbhost="localhost";
$dbuser="root";
$dbpass="";
$dbname="medi_care";

if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname)) {
	die("Error connecting to the database");
}