<?php

          $conn = mysqli_connect("localhost", "root", "", "bombay_furniture");
          if($conn -> connect_error){
            die("connection failed".$conn-> connect_error);
          }

// delete function
          $sqlD = "DELETE FROM products WHERE id='$_GET[id]'";
// execute the query
if(mysqli_query($conn, $sqlD))
	header("refresh:1; url=adminindex.php");
else
	echo "Not Deleted";	          



// Adding new Product


if(isset($_POST['register'])){

  $name=$_POST['name'];
$img=$_POST['img'];
$psw=$_POST['psw'];
$price=$_POST['price'];

$table='products';

$sql="INSERT INTO $table (name,image,price) VALUES ('$name','$img','$price')";



if(!mysqli_query($conn,$sql)){
    echo "<br>Not Inserted";
     die ('ERROR: Unable to insert data to ' . $table . ' table: ' . mysqli_error($conn));
}else{
	 ob_start();
    header('Location: http://localhost/furniture%20bazaar/adminindex.php');
    ob_end_flush();
    
    //echo '<br><a href="http://localhost/mobile/mobdatabase.php"> Click here to see database </a>' ;
   // echo "<br> <br> <br> <h2>THANK YOU ".$name;
}

}




?>