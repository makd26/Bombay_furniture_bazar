<?php
  session_start();
  $conn=mysqli_connect('localhost', 'root','');

    if(!$conn){
      echo "<br>Not Connected to server";
    }


  if(!mysqli_select_db($conn,'Bombay_Furniture')){

      echo "<br> Not Connected to data Base";
  }


  if(isset($_POST['placeorder'])){
	  
	  
	$name=$_SESSION['User']['name'];
	$phone=$_SESSION['User']['phone'];
	$email=$_SESSION['User']['mailId'];
    $address=$_POST['address'];
	$paymentMode=$_POST['Radio'];
	$total=$_SESSION['total'];
	
	foreach($_SESSION['shopping_cart'] as $key => $product){
  $prdtid=$product['id'];
 // $quant=$product['quantity'];
  $pricee=$product['price'];
  $namee=$product['name'];
  $image=$product['image'];

  


$sql="INSERT INTO OrderDetails (Name,Mobile,Email,Address,PaymentMode,ProductId,ProductName,Price,Total,image) VALUES ('$name','$phone','$email','$address','$paymentMode','$prdtid','$namee','$pricee','$total','$image')";

//$table=OrderDetails;
if(!mysqli_query($conn,$sql)){
    echo "<br>Not Inserted";
     die ('ERROR: Unable to insert data to ' . $table . ' table: ' . mysqli_error($conn));
}else{
    
   // echo '<br><a href="http://localhost/mobile/mobdatabase.php"> Click here to see database </a>' ;


}


}
	
  }
 echo"<p> THANK YOU, VISIT AGAIN!!!!</p>";
 
?>
<html>
<title>
<title>
<body>
<p> THANK YOU, VISIT AGAIN!!!!</p>
</body>
</html>