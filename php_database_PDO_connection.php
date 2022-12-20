<?php
	include('config.php');
	
	//create connection with mysql database 
	try
	{
                //creating a new php data object(PDO)
		$conn = new PDO("mysql:host=$servername;dbname=mydb",$username,$password);
	
		//set the PDO error mode to exception
		$conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

		echo "Connected successfully";
	}
	catch(PDOException $e)
	{
		echo "Connection failed: ".$e->getMessage();
	}

        //close connection 
	$conn = null;	
?>
