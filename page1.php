


<?php





//echo "You have successfully sign up ".$name;


$conn=mysqli_connect('localhost', 'root','');

if(!$conn){
    echo "<br>Not Connected to server";
}


if(!mysqli_select_db($conn,'Bombay_Furniture')){

    echo "<br> Not Connected to data Base";
}


if(isset($_POST['register'])){

  $name=$_POST['name'];
$email=$_POST['email'];
$psw=$_POST['psw'];
$phone=$_POST['phone'];

$table='Signup';

$sql="INSERT INTO $table (Name,Emailid,Password,Mobile) VALUES ('$name','$email','$psw','$phone')";



if(!mysqli_query($conn,$sql)){
    echo "<br>Not Inserted";
     die ('ERROR: Unable to insert data to ' . $table . ' table: ' . mysqli_error($conn));
}else{
    
     ob_start();
    header('Location: http://localhost/furniture%20bazaar/userpayment.php');
    ob_end_flush();
    //echo '<br><a href="http://localhost/mobile/mobdatabase.php"> Click here to see database </a>' ;
   // echo "<br> <br> <br> <h2>THANK YOU ".$name;
}

}




if(isset($_POST['login'])){


  $email=$_POST['name'];

$psw=$_POST['psw'];

    $sql="select * from Signup where Emailid='".$email."' AND  Password = '".$psw."' limit 1";  
    $result = mysqli_query($conn,$sql);
  if(mysqli_num_rows($result)==1){
  //echo "you have successfully logged in";
  	$log=mysqli_fetch_assoc($result);
  	 $name=$log['Name'];
      $phone=$log['Mobile'];

    ob_start();
    header('Location: http://localhost/furniture%20bazaar/userpayment.php');
    ob_end_flush();
  

  if(mysqli_num_rows($result)){
    while ($log=mysqli_fetch_assoc($result)) {
      $name=$log['Name'];
      $phone=$log['Mobile'];

      
    }
  }




   }
  else
  {
  echo "you have enter incorrect password";
  echo " ".$psw." ".$name;


  exit();
}




}

session_start();
$_SESSION['User']=array(
  'name'=>$name,
  'mailId'=>$email,
  'phone'=>$phone,
);

include("home1.php");

foreach($_SESSION['shopping_cart'] as $key => $product){
  $prdtid=$product['id'];
  $quant=$product['quantity'];
  $pricee=$product['price'];
  $namee=$product['name'];
  


$sql="INSERT INTO Orders (Name,Mobile,Productid,Quantity,Price,ProductName,email) VALUES ('$name','$phone','$prdtid','$quant','$pricee','$namee','$email')";


if(!mysqli_query($conn,$sql)){
    echo "<br>Not Inserted";
     die ('ERROR: Unable to insert data to ' . $table . ' table: ' . mysqli_error($conn));
}else{
    
   // echo '<br><a href="http://localhost/mobile/mobdatabase.php"> Click here to see database </a>' ;


}


}

   echo "<br> <br> <br> <h2>THANK YOU ".$name;
   echo " You have successfully ordered";

   echo "<br><a href='Feedback.html'>Please give your Feedback</a>"

?>
