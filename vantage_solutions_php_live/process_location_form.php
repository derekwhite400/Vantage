<?php
	
	#exit();
	require 'db_connect_vantagedb.php';
	
	$link = getConnection();
	if($link)
	{
		
		$loc_name				=	addslashes($_POST["loc_name"]);
		$owner_user_id		=	addslashes($_POST["owner_user_id"]);
		$loc_add_line1		=	addslashes($_POST["loc_add_line1"]);	
		$loc_add_line2		=	addslashes($_POST["loc_add_line2"]);	
		$loc_add_line3		=	addslashes($_POST["loc_add_line3"]);	
		$loc_add_line4		=	addslashes($_POST["loc_add_line4"]);	
		$loc_create_date 	=	addslashes($_POST["loc_create_date"]);
//		if(isset($_POST['notify_box'])){ $notify = $_POST['notify_box'];	
		//Save the SQL query in a variable
		$query = "INSERT INTO location (loc_name, owner_user_id, loc_add_line1,loc_add_line2,loc_add_line3,loc_add_line4, loc_create_date) 
							VALUES ('$loc_name', '$owner_user_id', '$loc_add_line1', '$loc_add_line2', '$loc_add_line3', '$loc_add_line4', '$loc_create_date');";
		
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
		header("location: silo_page.php?msg=1");
		echo $result;
		/* Close the connection with the database */
		mysqli_close ($link);
		
	}
?>