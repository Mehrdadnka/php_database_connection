<?php
	include('config.php');
	
	//create connection
	$conn = new mysqli($servername,$username,$password);
	
	//check connection
	if($conn->connect_error)
	{
		die("Connection failed: ".$conn->connect_error);

	}
	else
	{
		echo "Connected successfully";
	}

        //close connection 	
	$conn->close();	
?>
