<?php
	require 'core/config.php';


	var_dump($config);
	try {
	    $database = new PDO("mysql:host=".$config['db_host'].";dbname=".$config['db_name'].";charset=utf8", $config['db_user'], $config['db_pass']);
	    // set the PDO error mode to exception
	    $database->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}
	catch(PDOException $e){
	    echo "Connection failed: " . $e->getMessage();
	}
?>
