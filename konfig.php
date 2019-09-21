<?php


	$server = "localhost";
	$user = "root";
	$pass = "";
	$dbname = "sirusak";
        
    $base_url = "http://localhost/sirusak/";
	
	if (mysql_connect($server,$user,$pass)){
		//echo ":)";
		mysql_select_db($dbname) or die("database not found");
	}else{
		echo ":(";
	}
	 
?>