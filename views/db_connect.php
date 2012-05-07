<?php 

	$hostname = "freshconnection.db.8641795.hostedresource.com"; 
	$username = "freshconnection";
	$password = "ABc20088";  
	$con = mysql_connect($hostname,$username,$password) or die(mysql_error());
	mysql_select_db("freshconnection", $con);
?>