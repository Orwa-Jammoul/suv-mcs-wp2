<?php
  require './components/footer.php';
  require './components/navbar.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" type="image/x-icon" href="./assets/logos/fillyFashion-logo-02.png">
  <title>Cart</title>

  <link rel="stylesheet" type="text/css" href="./style/main.css">
  <link rel="stylesheet" type="text/css" href="./style/cart.css">

  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.7.1.min.js" 
  integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo="
  crossorigin="anonymous"></script>

  <script src="./script/main.js" defer></script>
  <script src="./script/cart.js" defer></script>
</head>
<body>

  <?php echo navbar("cart")  ?>

  <section class="cart-page page-section">
    <div class="route">
      <a class="route-link" href="./">Home</a> / Cart
    </div>
    <div class="cart-items">

      <div class="cart-item header-row ">
        <p class="clm">Num</p>
        <p class="clm">Name</p>
        <p class="clm">Quantity</p>
        <p class="clm">Price</p>
        <p class="clm">Total Price</p>
        <p class="clm">Action</p>
      </div>
      <div id="cart-rows"></div>
      <div class="cart-item footer-row ">
        <p class="clm">Sum</p>
        <p class="clm"></p>
        <p id="tQty" class="clm">2</p>
        <p class="clm"></p>
        <p id="tPrice" class="clm">4000000</p>
        <p class="clm"></p>
      </div>
    </div>
    <div class="place-order pcc mb-5">
      <!-- <a class=" order-now border-animation" href="./order.php">Order Now</a> -->
      <button class="order-now border-animation" onclick="orderCart()">Order Now</button>
      <button class="empty-cart border-animation" onclick="emptyCartTable()">Empty Cart</button>
    </div>
  </section>

  <?php echo footer("cart")  ?>
</body>
</html>