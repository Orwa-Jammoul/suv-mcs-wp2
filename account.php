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
  <title>Account</title>

  <link rel="stylesheet" type="text/css" href="./style/main.css">
  <link rel="stylesheet" type="text/css" href="./style/account.css">

  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.7.1.min.js" 
  integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo="
  crossorigin="anonymous"></script>

  <script src="./script/main.js" defer></script>
  <script src="./script/account.js" defer></script>
</head>
<body>

  <?php echo navbar("login")  ?>

  <section class="account-page page-section">
    <div class="route">
      <a class="route-link" href="./">Home</a> / <span id="user-name-head"></span> (account)
    </div>
    <div class="container-fluid w-100 m-0 p-0 mb-5">
      <div class="row w-100 m-0 ">
        <h1 id="user-name-info"></h1>
      </div>

      <div class="all-user-info row w-100 m-0 pt-2">
        <div class="col col-12 col-lg-3 col-md-4 col-sm-6 pcc">
          <h5 class="label">Email: </h5>&#160;
          <h5 class="info-item" id="email-info" ></h5>
        </div>
        <div class="col col-12 col-lg-3 col-md-4 col-sm-6 pcc">
          <h5 class="label">Phone: </h5>&#160;
          <h5 class="info-item" id="phone-info" ></h5>
        </div>
        <div class="col col-12 col-lg-3 col-md-4 col-sm-6 pcc">
          <h5 class="label">Country: </h5>&#160;
          <h5 class="info-item" id="country-info" ></h5>
        </div>
        <div class="col col-12 col-lg-3 col-md-4 col-sm-6 pcc">
          <h5 class="label">Birthday:</h5>&#160;
          <h5 class="info-item" id="birthday-info" ></h5>
        </div>


        <div class="logout-btn col col-12 col-lg-3 col-md-4 col-sm-6 pb-5">
          <button class="border-animation" onclick="logout()">Logout</button>
        </div>
        <hr>
      </div>
      <div class="orders-section row w-100 m-0 p-0">
        <div class="right col col-12 col-lg-12 p-0">
          <h1 class="title">Orders</h1>  
          <div class="order-items my-4 mx-1 mx-lg-5 mx-md-3">
            <div class="order-item header-row ">
              <p class="clm">Num</p>
              <p class="clm">to Country</p>
              <p class="clm">Address</p>
              <p class="clm">Price</p>
              <p class="clm">Quantity</p>
              <p class="clm">Shipping Method</p>
              <p class="clm">Additional cost</p>
              <p class="clm">Status</p>
            </div>
            <div id="order-rows"></div>
            <!-- <div class="order-item footer-row ">
              <p class="clm">Sum</p>
              <p class="clm"></p>
              <p id="tQty" class="clm">2</p>
              <p class="clm"></p>
              <p id="tPrice" class="clm">4000000</p>
              <p class="clm"></p>
            </div> -->
          </div>
        </div>
      </div>
    </div>
  </section>

  <?php echo footer("login")  ?>
</body>
</html>