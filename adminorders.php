


<!DOCTYPE html>
<html>
<head>
  <title>BOMBAY FURNITURE BAZAAR</title>
  <link rel="stylesheet" type="text/css" href="style1.css">
</head>
<body>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  









  <img src="logo.png" align="left">
<h1 color="blue" align="center"> BOMBAY FURNITURE BAZAAR </h1>




<div style="text-align:center;color:black">
  

  <a href="know more about.html" >
    <strong align="right" >Know more about bfbbazaar</strong>
  </a>

<hr>
<marquee>Grab the BEST furniture exchange deal ever. Get 80% extra value on your old sofa at bfbbazaaar.</marquee>
<hr>


</div>





<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="navbar-header"><a class="navbar-brand" href="adminindex.php">Home</a></div>
  <div class="navbar-header"><a class="navbar-brand active" href="adminorders.php">Check Orders</a></div>
  
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  
</nav>








<div class="container">

<?php


$conn=mysqli_connect('localhost', 'root','');

if(!$conn){
    echo "<br>Not Connected to server";
}


if(!mysqli_select_db($conn,'Bombay_Furniture')){

    echo "<br> Not Connected to data Base";
}

$query='SELECT * FROM OrderDetails ORDER by ID DESC';
$result=mysqli_query($conn,$query);

if($result):
  if(mysqli_num_rows($result)):
    while ($product=mysqli_fetch_assoc($result)) :
      ?>
      <div class="col-sm-4 col-md-3" style="float: left;">
        <form method="POST" action="home1.php?action=add&id=<?php echo $product['id'];  ?>">
          <div class="product">
            <img src="<?php echo $product['image'];?>" class="img-fluid" style="float:left;"/>
            <h4 class="text-info"> <?php echo $product['ProductName'];?> </h4>
            <p id="sahil">
            <?php echo $product['ID'];?><br>
            <?php echo $product['Name'];?><br>
            <?php echo $product['Address'];?><br>
            <?php echo $product['Mobile'];?><br>
            <?php echo $product['PaymentMode'];?><br></p>
            
            <h4>Rs <?php echo $product['Price']; ?> </h4>

      <!--      <input type="submit" name="add_to_cart" class="btn btn-info"  value="Add to cart"> -->
          <input type="button" style="color: red " onClick="del(<?php echo $product["ID"]; ?>)" name="Delete" value="Deliver">  
                    

          </div>
          
        </form>


      </div>
      <?php

    endwhile;
  endif;
endif;
?>

<div style="clear:both;"></div>

<br />
<?php if(filter_input(INPUT_POST, 'add_to_cart')) {
  ?>
<div class="table-responsive-md">

<table>
    <tr>
      <th colspan="5"><h3>Order Details</h3></th></tr>
      <tr>
        <th width="40%">Product name</th>
        <th width="10%">Qunatity</th>
        <th width="20%">Price</th>
        <th width="15%">Total</th>
        <th width="5%">Action</th>
      </tr>

      <?php
      if(!empty($_SESSION['shopping_cart'])):
        $total=0.0;

        foreach ($_SESSION['shopping_cart'] as $key => $product):

      ?>






      <tr>
        <td><?php echo $product['name']; ?></td>
        <td><?php echo $product['quantity']; ?></td>
        <td><?php echo $product['price']; ?></td>
        <td><?php echo (intval($product['quantity'],10) * intval($product['price'])); ?></td>
        <td>

          <a href="index1.php?action=delete&id=<?php echo $product['id']; ?>">

            <div class="btn-danger">Remove</div>
          </a>
        </td>
      </tr>
      <?php

      $total=$total + (intval($product['quantity'],10) * intval($product['price'],10));
       echo gettype($product['price']);
        endforeach;

      ?>
      <tr>
        <td colspan="3" align="right">Total</td>
        <td align="right"><?php echo $total; ?></td>
      </tr>

      <tr>
      <!-- show checkout button only if shoppingcart is not empty -->

      <td colspan="5">

        <?php

        if(isset($_SESSION['shopping_cart'])):
        if(count($_SESSION['shopping_cart'])>0):  

        ?>
        <a href="http://localhost/wdlproject/signup.html" class="button">CheckOut</a>
       <?php endif; endif; ?>
    </td>

  </tr>
  <?php

endif;
  ?>

</table>




</div>

<?php  }

?>

</div>





















<div>
  
</div>

          <script language="javascript">
            function del(ID){
              if(confirm("Do you want Deliver??")){
                window.location.href="deliver.php?id=" +ID+ "";
                return true;
              }
            }
            function deleteme(delid){
              if(confirm("Do you want Delete!")){
                window.location.href="delete.php?id=" +delid+ "";
                return true;
              }
            }

            

          </script>



         <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>


