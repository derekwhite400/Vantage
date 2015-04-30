<!DOCTYPE html>
<html lang="en">
<head>
	<title> Quantity Page </title>
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
					<div id="formhead">Quantity Form </div>
					 <form class="form-horizontal" role="form" action="process_quantity_form.php" method="post">
						<div class="form-group">
						  <label class="control-label  col-sm-4" for="silo_id">Silo id :</label>
							<div class="col-sm-8">
								<input type="text" class="form-control" id="silo_id" name="silo_id" placeholder="Silo id" required="required">
							</div>
						</div>
						<div class="form-group">
						  <label class="control-label  col-sm-4" for="quantity_date_time">Quantity Date Time :</label>
							<div class="col-sm-8">
								<input type="text" class="form-control" id="quantity_date_time" name="quantity_date_time" placeholder="Quantity Date Time" required="required">
							</div>
						</div>
						<div class="form-group">
						  <label class="control-label  col-sm-4" for="percent_full">Percent Full :</label>
							<div class="col-sm-8">
								<input type="text" class="form-control" id="percent_full" name="percent_full" placeholder="Percent full" required="required">
							</div>
						</div>
						<div class="form-group">        
							<div class="col-sm-offset-3 col-sm-2">
								<button type="submit" class="btn btn-default">Create</button>
							</div>
							<div class="col-sm-offset-5 col-sm-2">
								<a href="admin_page.php"><input type="button"  class="btn btn-default" value="Exit"></a>
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
								$message	= 	'<div class="alert alert-success" role="alert">Message Sent!</div>';
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

