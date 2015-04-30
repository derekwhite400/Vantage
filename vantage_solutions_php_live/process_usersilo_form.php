 <?php
	
	#exit();
	require 'db_connect_vantagedb.php';
	
	$link = getConnection();
	if($link)
	{
		
		$user_id			=	addslashes($_POST["user_id"]);
		$silo_id			=	addslashes($_POST["silo_id"]);	
		$permissions		=	addslashes($_POST["permissions"]);		
	
		//Save the SQL query in a variable
		$query = "INSERT INTO usersilo (user_id, silo_id, permissions)	VALUES ('$user_id', '$silo_id', '$permissions');";
		
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
		header("location: usersilo_form.php?msg=1");
		echo $result;
		/* Close the connection with the database */
		mysqli_close ($link);
		
	}
?>