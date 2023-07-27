

<?php
session_start();
$product_ids=array();
//session_destroy();

//to check add to cart button is submittes 
if(filter_input(INPUT_POST, 'add_to_cart')){
  if(isset($_SESSION['shopping_cart'])){

    //To keep track of how many products are in cart
    $count=count($_SESSION['shopping_cart']);


    //create sequential array for matching array in the shopping cart
    $product_ids=array_column($_SESSION['shopping_cart'], 'id');

    if(!in_array(filter_input(INPUT_GET, 'id'),$product_ids)){


    $_SESSION['shopping_cart'][$count]=array(

      'id'=> filter_input(INPUT_GET, 'id'),
      'name'=> filter_input(INPUT_POST, 'name'),
      'price'=>filter_input(INPUT_POST, 'price'),
      'quantity'=>filter_input(INPUT_POST, 'quantity'),
      'image'=>filter_input(INPUT_POST, 'image')



    );

    }
    else{
      // product already exist increse quantity
       //match array key to the id of the product added to the cart
      for($i=0 ;$i < count($product_ids);$i++){

        if($product_ids[$i]==filter_input(INPUT_GET, 'id')){
          //add item quantity to the exisiting product
          $_SESSION['shopping_cart'][$i]['quantity']+=filter_input(INPUT_POST, 'quantity');
        }
      }

    }



  }else{// if shopping cart doiest exist create first product with key 0
    //create array using submitted form data,start from key 0 and fill it with values

    $_SESSION['shopping_cart'][0]=array(

      'id'=> filter_input(INPUT_GET, 'id'),     
      'name'=> filter_input(INPUT_POST, 'name'),
      'price'=>filter_input(INPUT_POST, 'price'),
      'quantity'=>filter_input(INPUT_POST, 'quantity'),
      'image'=>filter_input(INPUT_POST, 'image')


    );

  }

}



if(filter_input(INPUT_GET, 'action')=='delete'){

//loop through all products of the shopping cart until it matches with the GET id variable
  foreach($_SESSION['shopping_cart'] as $key=> $product){
    if($product['id']==filter_input(INPUT_GET, 'id')){
      //removes the product from shopping cart when it matches with the get id
      unset($_SESSION['shopping_cart'][$key]);
    //reset session array keys so they match woith the product_ids numeric keys
    $_SESSION['shopping_cart']=array_values($_SESSION['shopping_cart']);
  }

  }


}


//pre_r($_SESSION);

?>






<!DOCTYPE html>
<html>
<head>
  <title></title>


</head>
<body>


  


<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="style1.css">




















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
  <a class="navbar-brand" href="index.php">Home</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
 
</nav>




<div class="imgg">
<img  src="<?php echo filter_input(INPUT_POST, 'image'); ?>">
</div>









<div class="container">
<div style="clear:both;"></div>

<br />

<div class="table-responsive-md"  class="table table-bordered">

<table>
    <tr>
      <th colspan="5"><h3>Order Details</h3></th></tr>
      <tr>
        <th width="40%">Product name</th>r
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
          <a href="home1.php?action=delete&id=<?php echo $product['id']; ?>">

            <div class="btn-danger">Remove</div>
          </a>
        </td>
      </tr>
      <?php

      $total=$total + (intval($product['quantity'],10) * intval($product['price'],10));

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
        <a href="signup.php"><button class="button-secondary pure-button">Check Out</button></a>
       <?php endif; endif; ?>
    </td>

  </tr>
  <?php

endif;
  ?>




</table>



</div>


</div>








</body>
</html>