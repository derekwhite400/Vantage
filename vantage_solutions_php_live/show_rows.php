<!DOCTYPE html>
<html lang="en">
<head>
	<title>Bootstrap Example</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
	
  <!-- Font Awesome -->
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
	<style> 
	body {
		font-family: calibri, verdana, tahoma;
		font-size: 1.5em;
	}
	h3 {
		text-align: center;
	}
	.article {
		margin-top: 10px;
		border: 1px solid lightblue;
		padding: 5px;
		min-height: 150px;
	}
	</style>  
</head>
	<body>

	<!-- Start Nav Bar -->
		<nav class="navbar navbar-inverse">
		  <div class="container-fluid">
			<div class="navbar-header">
			  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>                        
			  </button>
			  <a class="navbar-brand" href="#">Devstream</a>
			</div>
			<div class="collapse navbar-collapse" id="myNavbar">
			  <ul class="nav navbar-nav">
				<li class="active"><a href="#">Home</a></li>
				<li class="dropdown">
				  <a class="dropdown-toggle" data-toggle="dropdown" href="#">Services <span class="caret"></span></a>
				  <ul class="dropdown-menu">
					<li><a href="#">Web Design</a></li>
					<li><a href="#">Email Marketing</a></li>
					<li><a href="#">Social Media</a></li>
					<li><a href="#">Web Developer</a></li>
				  </ul>
				</li>
				<li><a href="#">Portfolio</a></li>
				<li><a href="#">Contact</a></li>
			  </ul>
			  <ul class="nav navbar-nav navbar-right">
				<li><a href="#"><i class="fa fa-facebook-official"></i> Facebook</a></li>
				<li><a href="#"><i class="fa fa-instagram"></i> Instagram</a></li>
			  </ul>
			</div>
		  </div>
		</nav>	
	<!-- End  Nav Bar -->
	
		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-5 article">
					<h2>Contact List</h2>
					
						<table class="table table-striped">
							<thead>
							  <tr>
								<th>Firstname</th>
								<th>Lastname</th>
								<th>Email</th>
							  </tr>
							</thead>
							<tbody>				
							<?php 
								require 'db_connect.php';								
								$link = getConnection();

								if($link)
								{
									$query = "SELECT * FROM contact";
									$result	=	mysqli_query($link, $query);
									
									while($row = mysqli_fetch_array($result))
									{
									?>
									  <tr>
										<td><?php echo $row["firstname"]; ?></td>
										<td><?php echo $row["lastname"]; ?></td>
										<td><?php echo $row["email"]; ?></td>
									  </tr>
									<?php
									}
									
									mysqli_free_result($result);
									mysqli_close ($link);
								}
							?>
							</tbody>
						</table>
				</div>
			</div>
		</div>
	</body>
</html>

