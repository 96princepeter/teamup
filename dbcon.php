<?php

$servername="localhost";
$username="root";
$password="";
$dBname="orisys";

$conn=new mysqli($servername,$username,$password,$dBname);
if($conn->connect_error)
{
	die("Connection error".$conn->connect_error);
}

 
	
?>