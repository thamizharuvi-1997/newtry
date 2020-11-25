<!DOCTYPE html>
<html>
<head>
	<title>Exam</title>
	<link rel="stylesheet" type="text/css" href="style3.css">
	<link rel="stylesheet" type="text/css" href="footer.css">
</head>
<style >
	.but {
		height: 200px;
		width: 300px;
		background-color: grey;
		border-color: violet;
		margin-left: 200px;
		padding-bottom: 25px;
	}
	button {
		height: 30px;
		width: 150px;
		margin-left: 60px;	}
</style>
<body>
<?php

   include "header1.php";

?>

 </div>

<h1 style="color: orange; font-style: bold; text-align: center;">Choose Exam</h1>
<div class="but" >
	
	<h4 id="1" style="color: orange; font-style: bold; padding-top: 25px;">BASIC</h4>
	<h4 id="2" style="color: blue;">TOTAL QUESTION</h4>
	<h4 id="3" style="color: blue;">TIME DURATION:10 MINUTES</h4><br>
	<button style="color: white; background-color: green; "><a href="next1.php" style="color: white; text-decoration: none;">START EXAM</a></button>
</div>


<?php

  include "footer.php";

?>
</body>
</html>