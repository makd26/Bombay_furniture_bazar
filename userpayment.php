<?php
session_start();
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Bomaby Furniture Bazaar</title>
  </head>
  <body>
    
	
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="style1.css">
	
	 <?php echo"<h2>Login Succesfully ".$_SESSION['User']['name']."</h2>"; ?> 
	
	<form method="POST" action="OrdersData.php">
  <div class="form-group row">
    <label for="address" class="col-sm-2 col-form-label">Address</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputEmail3" placeholder="Enter your Address" name="address">
    </div>
  </div>
 <!-- <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
    </div> 
  </div> -->
  <fieldset class="form-group">
    <div class="row">
      <legend class="col-form-label col-sm-2 pt-0">Payment Options</legend>
      <div class="col-sm-10">
        <div class="form-check">
          <input class="form-check-input" type="radio" name="Radio" id="gridRadios1" value="Paytm" >
          <label class="form-check-label" for="paytm">
            Paytm
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="Radio" id="gridRadios2" value="Debit/Credit/ATM">
          <label class="form-check-label" for="DebitCard">
            Debit/Credit/ATM Card
          </label>
        </div>
        <div class="form-check ">
          <input class="form-check-input" type="radio" name="Radio" id="gridRadios3" value="Cash on Delivery" checked>
          <label class="form-check-label" for="cod">
            Cash on Delivery
          </label>
        </div>
      </div>
    </div>
  </fieldset>
 <!-- <div class="form-group row">
    <div class="col-sm-2">Checkbox</div>
    <div class="col-sm-10">
      <div class="form-check">
        <input class="form-check-input" type="checkbox" id="gridCheck1">
        <label class="form-check-label" for="gridCheck1">
          Example checkbox
        </label>
      </div>
    </div>
  </div>  -->
  <div class="container">
<div style="clear:both;"></div>

<br />

<div class="table-responsive-md"  class="table table-bordered">

<table>
    <tr>
      <th colspan="5"><h3>Order Details</h3></th></tr>
      <tr>
        <th width="30%">Product name</th>
        <th width="10%">Qunatity</th>
        <th width="20%">Price</th>
        <th width="15%">Total</th>
       
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
       
      </tr>
      <?php

      $total=$total + (intval($product['quantity'],10) * intval($product['price'],10));
	  

        endforeach;
		$_SESSION['total']=$total;

      ?>
	  
      <tr>
	  
        <td colspan="0" align="right">Total</td>
        <td colspan="0" align="right"><?php echo "Rs".$total; ?></td>
      </tr>

  <?php

  
endif;
  ?>

</table>



</div>


</div>
  
  
  <div class="form-group row">
    <div class="col-sm-10">
	&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
      <button type="submit" class="btn btn-primary" name="placeorder">Place Order</button>
    </div>
  </div>
</form>
	
	
	
	

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>