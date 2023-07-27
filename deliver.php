<?php

          $conn = mysqli_connect("localhost", "root", "", "bombay_furniture");
          if($conn -> connect_error){
            die("connection failed".$conn-> connect_error);
          }

// delete function
          $sqlD = "SELECT * FROM orderdetails WHERE ID='$_GET[id]'";
$result=mysqli_query($conn,$sqlD);
// execute the query
if($result){

  $od=mysqli_fetch_assoc($result);

  $name = $od['Name'];
  $add = $od['Address'];
  $mb = $od['Mobile'];
  $pm = $od['PaymentMode'];
  $price = $od['Price'];
  $email = $od['Email'];

//import PHPMailerAutoload.php file which located inside phpmailer folder
  require 'phpmailer/PHPMailerAutoload.php';
  
// create object of class PHPMailer
   $mail = new PHPMailer;
  
// print client server communication output if we don't want to print it we can use 3
   $mail->SMTPDebug = 4;  
  
// Set mailer to use SMTP
   $mail->isSMTP(); 
   
// Specify main and backup SMTP servers 
   $mail->Host = 'smtp.gmail.com';
   
// Enable SMTP authentication
   $mail->SMTPAuth = true;
  
// EDIT REQUIRED 
// SMTP username mainly it is sender gmail replace 'techifind@gmail.com' with your gmail   
   $mail->Username = 'msdongare26@gmail.com'; 
 
// EDIT REQUIRED   
// SMTP password it is your gmail password
   $mail->Password = 'Makdongare26@';
   
// Enable TLS encryption, `ssl` also accepted
   $mail->SMTPSecure = 'tls';  
 
// TCP port to connect to 
   $mail->Port = 587;
 
// EDIT REQUIRED    
// set from it show in from of your mail 
   $mail->setFrom('msdongare26@gmail.com', 'Makarand Dongare');
   
// EDIT REQUIRED
// Add a recipient it is address where you want to send your email you can add multiple here
   $mail->addAddress('msdongare26@gmail.com');
  // $mail->addAddress('vnaddagatla@gmail.com', 'no reply');
   $mail->addAddress('spn998@gmail.com', 'no reply');
   $mail->addAddress( "$email", 'no reply');
        
// $mail->addAddress('ellen@example.com');   // to send multiple email 
 
// EDIT REQUIRED
// set reply to 
   $mail->addReplyTo('msdongare26@gmail.com', 'no reply');

   
//set cc or bcc it is optional   
//$mail->addCC('cc@example.com');
//$mail->addBCC('bcc@example.com');
 
// Add attachments it is optional
// $mail->addAttachment('/var/tmp/file.tar.gz');         
// $mail->addAttachment('/tmp/image.jpg', 'new.jpg'); 
 
// Set email format to HTML if you want to send html document 
   $mail->isHTML(true);
   
// set subject of your email
   $mail->Subject = 'ORDER DETAILS';

   $message= "Hi $name, <br> Your Order is placed successfully and out for delivery <br>  Delivery Address :$add <br> Mobile No: $mb <br> Payment Method: $pm <br> Price: Rs. $price    ";
  
// write your body content we can use html    
   $mail->Body    = " $message" ;   $mail->AltBody = 'hello, Piche dekho piche';
//   $mail->Body    = "Dilivery Address :$add" ;   $mail->AltBody = 'hello, Piche dekho piche'; 
//  $mail->Body    = "Mobile No: $mb" ;   $mail->AltBody = 'hello, Piche dekho piche';
//   $mail->Body    = "Payment Method: $pm" ;   $mail->AltBody = 'hello, Piche dekho piche';
 //  $mail->Body    = "Price: $price" ;   $mail->AltBody = 'hello, Piche dekho piche';

          
/* finally send email if email send is success then print 'Message has been sent'
   if not then print 'Message could not be sent'
*/
   if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
   }  
   else  
   {
    echo 'Message has been sent';
   }
   
   // here we can change value dynamically with php variable as per required
   


	header("refresh:1; url=adminorders.php");

}
else
	echo "Not Deleted";	          








?>