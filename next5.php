<!DOCTYPE html>
<html>
<head>

	<title>question1</title>
	
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
<div class="con">
	<h3 style="font-size: 30px; margin-left: 30px;">  5. What is the correct way to end a PHP statement?</h3>
	<hr>
	<div>
<form action="next6.php" method="post">
		<p><input type="radio" name="lang[]" value="a" required=""> . </p>
		<p><input type="radio" name="lang[]" value="b" required="">  New line  <br></p>
		<p><input type="radio" name="lang[]" value="c" required="">//  <br></p>
		<p><input type="radio" name="lang[]" value="d" required=""> ; <br></p>
		
<a style="color: white; text-decoration: none;"  href="next6.php" > <input id="button" type="submit" name="submit"> Get Result</a>
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