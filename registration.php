<?php
require_once('config.php');
?>


<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Simple Registration Form | PHP</title>
</head>
<body>
		
	<div>
		<?php 
	if (isset($_POST['create'])){
	// code...
	$firstname		 = $_POST['firstname'];
	$lastname		 = $_POST['lastname'];
	$email 			 = $_POST['email'];
	$number 		 = $_POST['number'];
	$password 		 = $_POST['password'];

	$sql = "INSERT INTO users(firstname,lastname,email,number,password) VALUES(?,?,?,?,?)";
	$stminsert = $db->prepare($sql);
	$result = $stminsert->execute([$firstname,$lastname,$email,$number,$password]);
	if($result){
		echo 'User Information Saved';
	}else{
		echo 'There was an error';
	}
		}
		?>
		</div>



		<div>
			<form action="registration.php" method="post">
				<div class="container">
					<div class="row">
						<div class="col-sm-3">
					<h1>Registration Form:</h1>
					<p>Please fillup the form with correct values.</p>
					<hr class="mb-3">
					<label for="firstname"><b>First Name</b></label>
					<input class="form-control" type="name" name="firstname" required>
					
					<label for="lastname"><b>Last Name</b></label>
					<input class="form-control" type="name" name="lastname" required>
					
					<label for="email"><b>Email Address</b></label>
					<input class="form-control" type="email" name="email" required>
					
					<label for="number"><b>Phone Number</b></label>
					<input class="form-control" type="number" name="number" required>
					
					<label for="password"><b>Password</b></label>
					<input class="form-control" type="password" name="password" required>
					<hr class="mb-3">
					<input class="btn btn-primary" type="submit" name="create" value="Sign Up">
					
						</div>
					</div>
				</div>
			</form>
		</div>
</body>
</html>