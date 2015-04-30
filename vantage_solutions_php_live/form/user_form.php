<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title> User Form </title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/vantage.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
	 
	

</head>
	<body>
	Login Successful <?php echo $_SESSION["user_name"];?>
		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-5 article">
					<h3>User Input Form </h3>
					 <form class="form-horizontal" role="form" action="process_user_form.php" method="post">
						<div class="form-group">
						  <label class="control-label  col-sm-3" for="user_id">User id:</label>
							<div class="col-sm-8">
								<input type="text" class="form-control" id="user_id" name="user_id" placeholder="User id" required="required">
							</div>
						</div>
						<div class="form-group">
						  <label class="control-label  col-sm-3" for="user_type">User type:</label>
							<div class="col-sm-8">
								<input type="text" class="form-control" id="user_type" name="user_type" placeholder="User Type" required="required">
							</div>
						</div>
						<div class="form-group">
						  <label class="control-label  col-sm-3" for="user_password">Password:</label>
							<div class="col-sm-8">
								<input type="text" class="form-control" id="user_password" name="user_password" placeholder="Password" required="required">
							</div>
						</div>

						<div class="form-group">
						  <label class="control-label  col-sm-3" for="user_name">User name:</label>
							<div class="col-sm-8">
								<input type="text" class="form-control" id="user_name" name="user_name" placeholder="User name" required="required">
							</div>
						</div>
						<div class="form-group">
						  <label class="control-label  col-sm-3" for="user_add_line1">User address line1:</label>
							<div class="col-sm-8">
								<input type="text" class="form-control" id="user_add_line1" name="user_add_line1" placeholder="User Address 1" required="required">
							</div>
						</div>
						<div class="form-group">
						  <label class="control-label  col-sm-3" for="user_add_line2">User address line2:</label>
							<div class="col-sm-8">
								<input type="text" class="form-control" id="user_add_line2" name="user_add_line2" placeholder="User Address 2" required="required">
							</div>
						</div>
						<div class="form-group">
						  <label class="control-label  col-sm-3" for="user_add_line3">User address line3:</label>
							<div class="col-sm-8">
								<input type="text" class="form-control" id="user_add_line3" name="user_add_line3" placeholder="User Address 3" required="required">
							</div>
						</div>
						<div class="form-group">
						  <label class="control-label  col-sm-3" for="user_add_line1">User add line4:</label>
							<div class="col-sm-8">
								<input type="text" class="form-control" id="user_add_line4" name="user_add_line4" placeholder="User Address 4" required="required">
							</div>
						</div>

						<div class="form-group">
						  <label class="control-label col-sm-3" for="user_email">User Email:</label>
							<div class="col-sm-8">
								<input type="email" class="form-control" id="user_email" name="user_email" placeholder="User email" required="required">
							</div>
						</div>
						<div class="form-group">
						  <label class="control-label col-sm-3" for="user_phone">User Phone Number:</label>
							<div class="col-sm-8">
								<input type="text" class="form-control" id="user_phone" name="user_phone" placeholder="User phone no." required="required">
							</div>
						</div>
						<div class="form-group">
						  <label class="control-label col-sm-3" for="user_create_date">User Creation Date:</label>
							<div class="col-sm-8">
								<input type="date" class="form-control" id="user_create_date" name="user_create_date" placeholder="User creation Date" required="required">
							</div>
						</div>
						<div class="form-group">
						  <label class="control-label col-sm-3" for="user_active">User Active</label>
							<div class="col-sm-8">
								<input type="text" class="form-control" id="user_active" name="user_active" placeholder="User Active Y/N" required="required">
							</div>
						</div>
						<div class="form-group">        
							<div class="col-sm-offset-3 col-sm-8">
								<button type="submit" class="btn btn-default">Submit</button>
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
			</div>
		</div>
	</body>
</html>

