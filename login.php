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
  <title>Login</title>

  <link rel="stylesheet" type="text/css" href="./style/main.css">
  <link rel="stylesheet" type="text/css" href="./style/login.css">

  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.7.1.min.js" 
  integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo="
  crossorigin="anonymous"></script>

  <script src="./script/main.js" defer></script>
  <script src="./script/login.js" defer></script>
</head>
<body>

  <?php echo navbar("login")  ?>

  <section class="login-page page-section">
    <div class="route">
      <a class="route-link" href="./">Home</a> / Login
    </div>
    <div class="container-fluid my-5">
      <div class="row">
        <div class="left col col-12 col-lg-6">
          <h1 class="title">LOGIN</h1>
          <p class="benefits">
            ** Welcome back to Filly Fashion! Logging in to your account opens the door to a personalized shopping experience.
          </p>
          <form id="login-form" class="login-form pcc flex-column">
            <input id="email" class="input-item" type="email" name="email" placeholder="Email">
            <input id="password" class="input-item" type="password" name="password" placeholder="Password">
            <button id="submit" class="input-item submit border-animation" type="submit">Login</button>
          </form>
        </div>
        <div class="right col col-12 col-lg-6">
          <h1 class="title">SIGN-UP</h1>

          <p class="benefits">
            ** As a registered member, you’ll be the first to know about our latest products and special offers. You’ll receive exclusive updates and early access to our sales.
          </p>
          <p class="benefits">
            ** Save your shipping and billing information for a quicker and smoother checkout process. No need to enter your details every time you shop.
          </p>
          <form id="sign-up-form" class="sign-up-form pcc flex-column">
            <input id="sign-email" class="input-item" type="email" name="email" placeholder="Email">
            <input id="sign-password" class="input-item" type="password" name="password" placeholder="Password">
            <input id="sign-password-conforme" class="input-item" type="password" name="cpassword" placeholder="Confirm Your Password">
            <input id="sign-fName" class="input-item" type="text" name="fName" placeholder="Your First Name">
            <input id="sign-lName" class="input-item" type="text" name="lName" placeholder="Your Last Name">
            <input id="sign-phone" class="input-item" type="text" name="phone" placeholder="Phone">
            <input id="sign-birthday" class="input-item" type="date" name="birthday" placeholder="Birthday">
            
            <select id="sign-country" class="input-item" name="country">
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
            <button id="sign-submit" class="input-item submit border-animation">sign-up</button>
          </form>
        </div>
      </div>
    </div>
    <!-- <button onclick="sendData()">test</button> -->
  </section>


  <?php echo footer("login")  ?>
</body>
</html>