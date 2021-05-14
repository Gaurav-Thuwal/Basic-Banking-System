<?php
	$servername = 'sql302.epizy.com';//'localhost';
	$user = 'epiz_28553807';//'root';
	$pass = '9zAzBro1CQ';//'';
	$dbname = 'epiz_28553807_sparks_bank';//'sparks-bank(6830)';

	$conn = mysqli_connect($servername,$user,$pass,$dbname);

	if(!$conn){
		die("Could Not Connect to the database".mysqli_connect_error());
	}

?>
