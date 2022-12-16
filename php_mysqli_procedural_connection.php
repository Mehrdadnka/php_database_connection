<?php
	include('config.php');
	
	//create connection
	$conn = mysqli_connect($servername,$username,$password);
	
	//check connection
	if(!$conn)
	{
		die("connection failed: ".mysqli_connect_error());
	}
	else
	{
		echo "connected successfully";
	}
	mysqli_close($conn);
?>