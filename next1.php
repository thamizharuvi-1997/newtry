<!DOCTYPE html>
<html>
<head>
	<title>question1</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>


</head>
<style>
	strong {
		color: orange;
	}
	.con {
		height: 450px;
		width: 1250px;
		border-radius: 30px;
		border: 3px solid grey;
		margin-left: 40px;
	}
	hr {
		margin-top: 10px;
		margin-bottom: 10px;
	}
	input {
		margin-bottom: 20px;
	}
	#button {
		height: 40px;
		width: 150px;
		margin-left: 30px;
		background-color: blue;
		border-radius: 15px;
	}
</style>
<body>
	<?php

   include "header1.php";

?>
  <center><h4>Subject Name:<strong>PHP</strong> Exam Name: <strong>Basic</strong> </h4></center>
<div class="con" method="post">
	<h3 style="font-size: 30px; margin-left: 30px;"> 1. What is PHP Stands for ?</h3>
	<hr>
	<div>
<form action="next2.php" method="post">
		<p><input type="radio" id="a" name="option" value="a" required="" >Private Home Page </p>
		<p><input type="radio" id="b" name="option" value="b" required=""> Personal Hypertext Processor  <br></p>
		<p><input type="radio" id="c" name="option" value="c" required="">PHP:Hypertext PreProcessor  <br></p>
		<p><input type="radio" id="d" name="option" value="d" required="">Hypertext Processor  <br></p>
<a style="color: white; text-decoration: none;"  href="next2.php" > <input id="button" type="submit" name="submit"> Next Question</a>
 </form>
	</div>

 
<div  style=" margin-top: 20px; background-color: orange; width: 500px; height: 25px; margin-left: 25px; ">
    <b>Warning!</b> Dont Refresh this page ..!
  </div>


</div>


<?php

  include "footer.php";

?>

</body>
</html>