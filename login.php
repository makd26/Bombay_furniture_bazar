<?php
$host="localhost";
$user="root";
$password="";
$db="Bombay_Furniture";
$dblink = mysqli_connect($host,$user,$password);
mysqli_select_db($dblink,$db);
if(isset($_POST['uname']))
{
  $uname = $_POST['uname'];
  $password = $_POST['psw'];

   $sql="select * from Signup where Emailid='".$uname."' AND  Password = '".$password."' limit 1";  
    $result = mysqli_query($dblink,$sql);
  if(mysqli_num_rows($result)==1){
  echo "you have successfully logged in";
  exit();
   }
  else
  {
  echo "you have enter incorrect password";
  exit();
}}
?>