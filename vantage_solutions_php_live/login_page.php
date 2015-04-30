<!DOCTYPE html>
<html lang="en">
<head>
	<title> Login Page </title>
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
		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-3"></div>
				<div class="col-sm-6 article">
					<div id="formhead">Login Form </div>
					 <form class="form-horizontal" role="form" action="process_login_form.php" method="post">
						<div class="form-group">
						  <label class="control-label  col-sm-5" for="user_id">Enter User id :</label>
							<div class="col-sm-5">
								<input type="text" class="form-control" id="user_id" name="user_id" placeholder="User id" required="required">
							</div>
						</div>
						<div class="form-group">
						  <label class="control-label  col-sm-5" for="user_password">Enter Password :</label>
							<div class="col-sm-5">
								<input type="password" class="form-control" id="user_password" name="user_password" placeholder="Password" required="required">
							</div>
						</div>
						<div class="form-group">        
							<div class="col-sm-offset-5 col-sm-5">
								<button type="submit" class="btn btn-success">Login</button>
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
								$message	= 	'<div class="alert alert-danger" role="alert">Wrong Username or Password.</div>';
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

