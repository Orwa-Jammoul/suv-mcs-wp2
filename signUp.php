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
  <title>Contact Us</title>

  <link rel="stylesheet" type="text/css" href="./style/main.css">
  <!-- <link rel="stylesheet" type="text/css" href="./style/login.css"> -->

  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.7.1.min.js" 
  integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo="
  crossorigin="anonymous"></script>

  <script src="./script/main.js" defer></script>
  <!-- <script src="./script/login.js" defer></script> -->
</head>
<body>

  <?php echo navbar("login")  ?>

  <section class="page-section">

  <h1>login</h1>
  </section>



  <?php echo footer("login")  ?>
</body>
</html>