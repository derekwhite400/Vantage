<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title> Location Page </title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/vantage.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
	
</head>
	<body>
		<div class="row">
			<div class="col-sm-2"><div class="logo"><img src="Vantage_logo_s.png"></div></div>
			<div class="col-sm-8"><div id="header">Silo Management Systems</div></div>
			<div class="col-sm-2"><div class="logo"><img src="sms.png"></div></div>
		</div>
		<div id="formhead">User : &nbsp <?php echo $_SESSION["user_id"];?>&nbsp &nbsp<?php echo $_SESSION["user_name"];?> </div>								
		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-3"></div>
				<div class="col-sm-6 article">
					<div id="formhead">Location Form </div>
					 <form class="form-horizontal" role="form" action="process_location_form.php" method="post">
						<div class="form-group">
						  <label class="control-label  col-sm-3" for="loc_name">Location Name :</label>
							<div class="col-sm-8">
								<input type="text" class="form-control" id="loc_name" name="loc_name" placeholder="Location name" required="required">
							</div>
						</div>
						<div class="form-group">
						  <label class="control-label  col-sm-3" for="owner_user_id">Owner User id :</label>
							<div class="col-sm-8">
								<input type="text" class="form-control" id="owner_user_id" name="owner_user_id" placeholder="Owner user id" required="required">
							</div>
						</div>
						<div class="form-group">
						  <label class="control-label  col-sm-3" for="loc_add_line1">Address :</label>
							<div class="col-sm-8">
								<input type="text" class="form-control" id="loc_add_line1" name="loc_add_line1" placeholder="Location Address 1" required="required">
							</div>
						</div>
						<div class="form-group">
						  <label class="control-label  col-sm-3" for="loc_addd_line2"></label>
							<div class="col-sm-8">
								<input type="text" class="form-control" id="loc_add_line2" name="loc_add_line2" placeholder="Location Address 2" >
							</div>
						</div>
						<div class="form-group">
						  <label class="control-label  col-sm-3" for="loc_add_line3"></label>
							<div class="col-sm-8">
								<input type="text" class="form-control" id="loc_add_line3" name="loc_add_line3" placeholder="Location Address 3" >
							</div>
						</div>
						<div class="form-group">
						  <label class="control-label  col-sm-3" for="loc_add_line4"></label>
							<div class="col-sm-8">
								<input type="text" class="form-control" id="loc_add_line4" name="loc_add_line4" placeholder="Location Address 4" >
							</div>
						</div>

						<div class="form-group">
						  <label class="control-label col-sm-3" for="loc_create_date">Creation Date :</label>
							<div class="col-sm-8">
								<input type="date" class="form-control" id="loc_create_date" name="loc_create_date" placeholder="yyyy/dd/mm" required="required">
							</div>
						</div>
						<div class="form-group">        
							<div class="col-sm-offset-3 col-sm-2">
								<button type="submit" class="btn btn-default">Create</button>
							</div>
							<div class="col-sm-offset-5 col-sm-2">
<!--								<a href="admin_page.php"><input type="button"  class="btn btn-default" value="Exit"></a>
-->								
							</div>
						</div>
					 </form>
					 <?php
					$message = NULL;
					if(isset($_GET["msg"]))
					{
						switch($_GET["msg"])
						{
							case "1":
								$message	= 	'<div class="alert alert-success" role="alert">User Created successfully!</div>';
								break;
							case "2":
								$message	= 	'<div class="alert alert-danger" role="alert">Message could not be sent. Please try again.</div>';
								break;						
						}
					}
					echo $message;
					 
					 ?>
					<script>
						$(".alert").fadeOut(3000)
					</script>						 
				</div>
				<div class="col-sm-3"></div>
			</div>
		</div>
	</body>
</html>

