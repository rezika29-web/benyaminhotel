<?php
$server='localhost';
$user='root';
$pass='';
$db='benyamin';
try
{
	$conn=new PDO ("mysql:host=$server;dbname=$db",$user,$pass);
	$conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
}catch(PDOException $error) {
	echo 'Error !! : ' . $error->getmessage();
}



?>