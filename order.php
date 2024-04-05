<?php
  require './components/footer.php';
  require './components/navbar.php';
  require './server.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" type="image/x-icon" href="./assets/logos/fillyFashion-logo-02.png">
  <title>Order</title>

  <link rel="stylesheet" type="text/css" href="./style/main.css">
  <link rel="stylesheet" type="text/css" href="./style/order.css">

  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.7.1.min.js" 
  integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo="
  crossorigin="anonymous"></script>

  <script src="./script/main.js" defer></script>
  <script src="./script/order.js" defer></script>
</head>
<body>

  <?php echo navbar("order")  ?>

  <section class="account-page page-section">
    <div class="route">
      <a class="route-link" href="./">Home</a> / <a class="route-link" href="./cart.php">Cart</a> / Order
    </div>
    <div class="container-fluid my-5">
      <div class="row pcc">
        <div class="right col col-12 col-lg-6">
          <h1 class="title">Order Registration</h1>
          <p class="benefits">
            ** As a registered member, you’ll be the first to know about our latest products and special offers. You’ll receive exclusive updates and early access to our sales.
          </p>
          <p class="benefits">
            ** Save your shipping and billing information for a quicker and smoother checkout process. No need to enter your details every time you shop.
          </p>
          <form id="order-form" class="order-form pcc flex-column">
            <!-- <input id="user-email" class="input-item" type="email" name="email" placeholder="Email">
            <input id="user-password" class="input-item" type="password" name="password" placeholder="Password"> -->

            <div class="w-100">
              <label class="mb-0 mt-2">Shipping to</label>
              <select id="to-country" class="input-item" name="country">

                <?php 
                  $countries= allCountries();
                  for ($i=0; $i < count($countries); $i++) { 
                    $id = $countries[$i]['id'];
                    $name= $countries[$i]['name'];
                    // echo '<option value="'.$id.'" >'.$name.'</option>';
                    if($id=='207'){
                      echo '<option value="'.$id.'" selected>'.$name.'</option>';
                    }else{
                      echo '<option value="'.$id.'" >'.$name.'</option>';
                    }
                  }
                ?>
                
              </select>
            </div>
            <input id="user-address" class="input-item" type="text" name="address" placeholder="Your Address">
            
            <div class="w-100">
              <label class="mb-0 mt-2">Shipping Method</label>
              <select id="user-shipping-method" class="input-item" name="shippingMethod">

                <?php 
                  $shippigMethods= shippigMethods();
                  for ($i=0; $i < count($shippigMethods); $i++) { 
                    $id = $shippigMethods[$i]['id'];
                    $name= $shippigMethods[$i]['name'];
                    $cost = $shippigMethods[$i]['cost'];
                    // echo '<option value="'.$id.'" >'.$name.'</option>';
                    if($id=='1'){
                      echo '<option value="'.$id.'" selected>'.$name.', Cost: '.$cost.'</option>';
                    }else{
                      echo '<option value="'.$id.'" >'.$name.', Cost: '.$cost.'</option>';
                    }
                  }
                ?>
                
              </select>
            </div>

            <button id="order-submit" class="input-item submit border-animation" type="submit">Order</button>
          </form>
        </div>
      </div>
    </div>
  </section>

  <?php echo footer("order")  ?>
</body>
</html>