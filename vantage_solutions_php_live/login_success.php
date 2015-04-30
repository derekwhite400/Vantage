<?php
session_start();

if(!$_SESSION["user_id"]){
	header("location:login_page.php?msg=2");
}						//***Admin user type ***//	
	else { if ($_SESSION["user_type"] ==  "A")
						{ header("location:admin_page.php");}
						//***Feed suplier user type ***//					
					elseif ($_SESSION["user_type"] == "S")
						{ header("location:suplier_form");}
						//***Silo owner user type ***//
					elseif ($_SESSION["user_type"] == "O")
						{ header("location:owner_list");}
						
					else { header("location:login_page.php");}
				}

?>
