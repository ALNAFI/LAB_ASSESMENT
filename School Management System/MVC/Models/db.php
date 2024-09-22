<?php

  function con()
  {
  	$serverName="localhost";
  	$userName="root";
  	$pass="";
  	$dbName="sms";
  	$conn=new mysqli($serverName,$userName,$pass,$dbName);
  	return $conn;
  }

?>