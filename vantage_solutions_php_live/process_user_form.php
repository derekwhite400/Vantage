<?php 

	//*** Process Customer Form for Vantage Solutions Database ****

	
	#exit();
	require 'db_connect_vantagedb.php';
	
	$link = getConnection();
	if($link)
	{
		
		$user_id			=	addslashes($_POST["user_id"]);
		$user_type			=	addslashes($_POST["user_type"]);
		$user_password		=	addslashes($_POST["user_password"]);
		$user_name			=	addslashes($_POST["user_name"]); 
		$user_add_line1		=	addslashes($_POST["user_add_line1"]);	
		$user_add_line2		=	addslashes($_POST["user_add_line2"]);	
		$user_add_line3		=	addslashes($_POST["user_add_line3"]);	
		$user_add_line4		=	addslashes($_POST["user_add_line4"]);	
		$user_email			=	addslashes($_POST["user_email"]);
		$user_phone 		=	addslashes($_POST["user_phone"]);
		$user_create_date 	=	addslashes($_POST["user_create_date"]);
		$user_active		=	addslashes($_POST["user_active"]);
		
		//Save the SQL query in a variable
		$query = "INSERT INTO user (user_id, user_type, user_password, user_name, user_add_line1, user_add_line2, user_add_line3, user_add_line4, user_email, user_phone, user_create_date, user_active) 
							VALUES ('$user_id', '$user_type', '$user_password', '$user_name', '$user_add_line1', '$user_add_line2', '$user_add_line3', '$user_add_line4', '$user_email', '$user_phone', '$user_create_date', '$user_active');";
		
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
		$_SESSION["owner_user_id"] = $user_id;

		header("location: location_page.php?msg=1");
		echo $result;
		/* Close the connection with the database */
		mysqli_close ($link);
		
	}
?>