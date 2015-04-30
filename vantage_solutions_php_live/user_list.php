<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>User List</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
	
  <!-- Font Awesome -->
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
	<style> 
</head>
	<body>
		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-5 article">
					<h2>User List</h2>
					
						<table class="table table-striped">
							<thead>
							  <tr>
								<th>User Id</th>
								<th>Type</th>
								<th>User Name</th>
								<th>Address line 1</th>	
								<th>Email</th>
								<th>Phone</th>
								<th>Date</th>
								<th>Active</th>																
							  </tr>
							</thead>
							<tbody>				
							<?php
								error_reporting(E_ALL);
								ini_set('display_errors', 1);
								print_r($_POST);							
								require 'db_connect_vantagedb.php';							 
								
								$link = getConnection();

								if($link)
								{
									$query = "SELECT * FROM user";
									$result	=	mysqli_query($link, $query);
									
									while($row = mysqli_fetch_array($result))
									{
									?>
									  <tr>
										<td><?php echo $row["user_id"]; ?></td>
										<td><?php echo $row["user_type"]; ?></td>
										<td><?php echo $row["user_name"]; ?></td>
										<td><?php echo $row["User_add_line1"]; ?></td>
										<td><?php echo $row["user_email"]; ?></td>
										<td><?php echo $row["user_phone"]; ?></td>
										<td><?php echo $row["user_create_date"]; ?></td>
										<td><?php echo $row["user_active"]; ?></td>
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

