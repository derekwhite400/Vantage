<?php
	
	#exit();
	require 'db_connect_vantagedb.php';
	
	$link = getConnection();
	if($link)
	{
		
		$silo_id			=	addslashes($_POST["silo_id"]);
		$loc_name				=	addslashes($_POST["loc_name"]);
		$max_quantity		=	addslashes($_POST["max_quantity"]);		
		$silo_create_date	=	addslashes($_POST["silo_create_date"]);
		$curr_percent_full	=	addslashes($_POST["curr_percent_full"]);
		$reorder_percent	=	addslashes($_POST["reorder_percent"]);
		
		//Save the SQL query in a variable
		$query = "INSERT INTO silo (silo_id, loc_name, max_quantity, silo_create_date, curr_percent_full, reorder_percent ) 
							VALUES ('$silo_id', '$loc_name', '$max_quantity','$silo_create_date', '$curr_percent_full', '$reorder_percent');";
		
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
		header("location: silo_page.php?msg=3");
		echo $result;
		/* Close the connection with the database */
		mysqli_close ($link);
		
	}
?>