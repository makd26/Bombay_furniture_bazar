<?php 

$con=mysqli_connect('localhost', 'root','');

if(!$con){
	echo "<br>Not Connected to server";
}

if(!mysqli_select_db($con,'Bombay_Furniture')){

	echo "<br> Not Connected to data Base";
}

$name=$_POST["name"];
$email=$_POST["email"];
$difficulties=$_POST["difficulties"];
$quality=$_POST["quality"];
$visitagain=$_POST["question"];
$suggestion=$_POST["suggestions"];


$sql="INSERT INTO FeedBack (Name,email,Difficulties,Quality,VisitAgain,Suggestions) VALUES ('$name','$email','$difficulties','$quality','$visitagain','$suggestion')";

if(!mysqli_query($con,$sql)){
	echo "<br>Not Inserted";
	 die ('ERROR: Unable to insert data to FeedBack table: ' . mysqli_error($con));
}



 ?>

 	<!DOCTYPE html>
	<html>
	<head>
		<title>Bombay Furniture Bazaar</title>
		<style type="text/css">
			.center {
    display: block;
    margin-left: auto;
    margin-right: auto;
    width: 25%;
}
		</style>
		
	</head>
	<body>

		    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  

  <img src="logo.png" align="left">
<h1 color="blue" align="center"> BOMBAY FURNITURE BAZAAR </h1>


<div style="text-align:center;color:black">
  

  <a href="know more.html" >
    <strong align="right" >Know more about bfbbazaar</strong>
  </a>

<hr>
<marquee>Grab the BEST furniture exchange deal ever. Get 80% extra value on your old sofa at bfbbazaaar.</marquee>
<hr>


</div>





<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="navbar-header"><a class="navbar-brand" href="index.php">Home</a></div>
  
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  
</nav>


    <div >
	<h1 align="center" style="color: #2471a3;">Thank You <?php echo $name ;?></h1>
	<h1 align="center" style="color: #2471a3;">Visit Us Again</h1>
	</div>
	 <img src="feedback.png" alt="feedback" class="center"> 

	</body>
	</html>