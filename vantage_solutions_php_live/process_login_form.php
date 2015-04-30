<?php
session_start();


	//*** Process Customer Form for Vantage Solutions Database ****

//	print_r($_POST);
	
	#exit();
	require 'db_connect_vantagedb.php';
	
	$link = getConnection();
	if($link)
	{
		
		$user_id			=	($_POST["user_id"]);
		$user_password		=	($_POST["user_password"]);

// To protect MySQL injection (more detail about MySQL injection) 
$user_id = stripslashes($user_id); 
$user_password = stripslashes($user_password); 
//$user_id = mysql_real_escape_string($user_id); 
//$user_password = mysql_real_escape_string($user_password); 

$sql="SELECT * FROM  user WHERE user_id='$user_id' and user_password='$user_password'"; 
/*echo $sql;
exit();
*/
$result=mysqli_query($link,$sql); 


// Mysql_num_row is counting table row 
$count=mysqli_num_rows($result); 
//echo $count;
//exit();

// If result matched $myusername and $mypassword, table row must be 1 row 

if($count==1){ 
$row = mysqli_fetch_assoc($result);
//print_r($row);
//echo $row["user_password"];
//Register $myusername, $mypassword and redirect to file "login_success.php" 
$_SESSION["user_id"] = $user_id;
$_SESSION["user_name"] = $row["user_name"];
$_SESSION["user_type"] = $row["user_type"];

//exit();


header("location:login_success.php"); 
} 
else { 

	/**
		 * Execute the query using the function mysqli_query
		 * Sending the following 2 arguments:
		 * $link: variable connection 
		 * $query: variable with the query 
		 * 
		 * We set the query result to the variable $result 
		 * the query result is returned in an array from the database
		**/
//		$result	=	mysqli_query($link, $query);
		header("location: login_page.php?msg=2");
//		echo $result;
		/* Close the connection with the database */
		mysqli_close ($link);

}


	
		
	}
?>