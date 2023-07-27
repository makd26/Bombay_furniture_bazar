
<?php
session_start();

$conn=mysqli_connect('localhost', 'root','');

if(!$conn){
    echo "<br>Not Connected to server";
}


if(!mysqli_select_db($conn,'Bombay_Furniture')){

    echo "<br> Not Connected to data Base";
}

if(isset($_POST['login'])){


  $email=$_POST['name'];

$psw=$_POST['psw'];

    $sql="select * from AdminDetails where EmailId='".$email."' AND  Password = '".$psw."' limit 1";  
    $result = mysqli_query($conn,$sql);
  if(mysqli_num_rows($result)==1){
  //echo "you have successfully logged in";
  $_SESSION['admin']='Yes';
    ob_start();
    header('Location: http://localhost/furniture%20bazaar/adminindex.php');
    ob_end_flush();
 

   }
  else
  {
    $_SESSION['admin']='No';
  echo "you have enter incorrect password";
  echo " ".$psw." ".$name;


  exit();
}
}

?>