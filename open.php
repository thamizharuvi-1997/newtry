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
  
  <link rel="stylesheet" type="text/css" href="style2.css">
</head>
<body>
	<form method="post">
		<div class="container">
			<h2 align="center" >Welcome Back!</h2>
			<div class="alert alert-success">
    <center><strong>Successfully!</strong> Registered.</center>
  </div>
			<input type="text" class="username" name="username" placeholder="Enter loginid" > <br>
			<input  type="password" class="password" name="password" placeholder="password"><br>
			<button class="submit btn btn-primary submit" style="width: 455px; height: 50px;" type="submit" name="submit"><a href="exam1.php" style="text-decoration: none; color: white;"> Submit</a></button><br>
			<hr>
			<button type="button" class="btn btn-primary"><a href="admin.php" style="color: white; text-decoration: none;">Admin</a></button> 
			<button type="button" class="btn btn-primary"><a href="index.php" style="color: white; text-decoration: none;" >User</a></button>
			
			<center><a href="two.php">Create an account!</a></center>
<img src="login.png">
		</div>
	</form>

</body>
</html>