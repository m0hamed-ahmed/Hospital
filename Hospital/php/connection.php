<?php

$dsn  = "mysql:host=localhost;dbname=hospital";
$name = "root";
$pass = "";

try
{
$conn = new PDO($dsn,$name,$pass);
}
catch(PDOException $e)
{
	echo "Connection Failed:" . $e->getMessage();
}