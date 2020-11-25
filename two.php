<!DOCTYPE html>
<html>
<head>
	<title>Welcome form</title>
	  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="style1.css">
</head>
<body>
	<form method="post">
		<div class="container">
			<h2 align="center" >Create an account!</h2>
			<div class="row">
				<div class="col">
					<input type="text" name="id" class="id" placeholder="login id">
				</div>
				<div class="col">
					<input type="text" name="name" class="name" placeholder="Name">
				</div>
			</div>
			<div class="row">
				<div class="col">
					<input type="email" name="email" class="email" placeholder="Email address">
				</div>
				<div class="col">
					<input type="number" name="number" class="number" placeholder="Mobile Number">
				</div>
			</div>
			<div class="row">
				<div class="col">
					<input type="password" name="password" class="password" placeholder="password">
				</div>
				<div class="col">
					<input type="password" name="password1" class="password1" placeholder="repeat password">
				</div>
			</div>
			<button class="submit btn btn-primary" id="reg"  type="submit" name="submit" ><a href="open.php" style="color: white; text-decoration: none;">Register Account</a></button>
			<hr>
			
			<center><a href="one.php">Already have an account.Login!</a></center>
<img src="login.png">
		</div>
	</form>


	

</body>
</html>