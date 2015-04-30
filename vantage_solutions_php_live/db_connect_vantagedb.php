<?php 
	/** 
	 * getConnection - connect with the database using "mysqli_connect"
	 * the parameters required for "mysqli_connect" should be specied in the following order:
	 * host, user, password, database name
	 * mysqli_connect_error: Use for check if we have errors in the connection
	 **/
	function getConnection() 
	{
		$link = mysqli_connect("vantagedb.db.10970555.hostedresource.com","vantagedb","V4nTaG3!!","vantagedb") ;

		if (mysqli_connect_error()) {
			return false;
		}else{
			mysqli_set_charset($link, "utf8");
			return $link;
		}
	}
?>