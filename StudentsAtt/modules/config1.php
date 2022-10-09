<?php

	//  Development connection
	
	$databaseHost = 'sql111.epizy.com';
	$databaseName = 'epiz_32757300_myregister';
	$databaseUsername = 'epiz_32757300';
	$databasePassword = '**********';

	// remote Database connection
	
	// $databaseHost = '#####';
	// $databaseName = '#####';
	// $databaseUsername = '#####';
	// $databasePassword = '###############';
	
	try {
		
		$conn = new PDO('mysql:host=' . $databaseHost . ';dbname=' . $databaseName . '', $databaseUsername, $databasePassword);
	}
	catch (PDOException $e) {
    echo $e->getMessage();
	}
	// echo "Connection is there<br/>";
	$conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

?>