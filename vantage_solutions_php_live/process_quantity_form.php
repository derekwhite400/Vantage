<?php
	
	#exit();
	require 'db_connect_vantagedb.php';
	
	$link = getConnection();
	if($link)
	{
		
//		$quantity_id			=	addslashes($_POST["quantity_id"]);
		$silo_id				=	addslashes($_POST["silo_id"]);
		$quantity_date_time		=	addslashes($_POST["quantity_date_time"]);
		$percent_full			=	addslashes($_POST["percent_full"]);	
//		if(isset($_POST['notify_box'])){ $notify = $_POST['notify_box'];				
		
		$query = "INSERT INTO quantity (silo_id, quantity_date_time, percent_full ) 
							VALUES ( '$silo_id', '$quantity_date_time', '$percent_full' );";
		
		/**
		 * Execute the query using the function mysqli_query
		 * Sending the following 2 arguments:
		 * $link: variable connection 
		 * $query: variable with the query 
		 * 
		 * We set the query result to the variable $result 
		 * the query result is returned in an array from the database
		**/
		$result	=	mysqli_query($link, $query);
		header("location: quantity_form.php?msg=1");
		echo $result;
		/* Close the connection with the database */
		mysqli_close ($link);
		
	}
?>