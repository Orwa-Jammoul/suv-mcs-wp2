<?php
  require './components/footer.php';
  require './components/navbar.php';
  require './components/group-products.php';
  require './server.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" type="image/x-icon" href="./assets/logos/fillyFashion-logo-02.png">
  <title>Home</title>

  <link rel="stylesheet" type="text/css" href="./style/main.css">
  <link rel="stylesheet" type="text/css" href="./style/home.css">

  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.7.1.min.js" 
  integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo="
  crossorigin="anonymous"></script>

  <script src="./script/main.js" defer></script>
  <script src="./script/home.js" defer></script>
</head>
<body>

  <?php echo navbar("home")  ?>

  <section class="header">
    <video id="header-vid" class="video-frame" autoplay muted loop>
      <source src="assets/video/mainheader-02.mp4" type="video/mp4">
    </video>
    <div class="info pcc">
      
      <div class="waviy">
        <span style="--i:1">F</span>
        <span style="--i:2">I</span>
        <span style="--i:3">L</span>
        <span style="--i:4">L</span>
        <span style="--i:5">Y</span>
        <span style="--i:6"> &nbsp </span>
        <span style="--i:7">F</span>
        <span style="--i:8">A</span>
        <span style="--i:9">S</span>
        <span style="--i:10">H</span>
        <span style="--i:11">I</span>
        <span style="--i:12">O</span>
        <span style="--i:13">N</span>
      </div>
      <div class="our-categories">
        <div class="cat cat-01" style="--i:1">
          <a class="icon-frame pcc" href="./products.php?group=dresses">
            <img  src="./assets/icons/categories/FluentEmojiHighContrastDress.svg" alt="">
            <div class="title">Dress</div>
          </a>
        </div>
        <div class="cat cat-02" style="--i:2">

          <a class="icon-frame pcc" href="./products.php?group=pants">
            <img  src="./assets/icons/categories/IconoirPantsPockets.svg" alt="">
            <div class="title">Pants</div>
          </a>
        </div>
        <div class="cat cat-03" style="--i:3">
          <a class="icon-frame pcc" href="./products.php?group=shirts">
            <img  src="./assets/icons/categories/MajesticonsTShirtLine.svg" alt="">
            <div class="title">Shirts</div>
          </a>
        </div>
        <div class="cat cat-04" style="--i:4">
          <a class="icon-frame pcc" href="./products.php?group=shoes">
            <img  src="./assets/icons/categories/IconParkOutlineHighHeeledShoes.svg" alt="">
            <div class="title">Shoes</div>
          </a>
        </div>
      </div>
      <a class="our-products-btn pcc" href="./products.php">
        <p class="mb-0">OUR PRODUCTS</p> 
      </a>
    </div>
  </section>

  <section class="about-us pcc flex-column">
    <h1 class="title">Our Vision</h1>
    <p class="des">
    Filly Fashion envisions to be a leading online platform for women’s fashion, offering a diverse range of products across four main categories: dresses, shirts, pants, and shoes. We aim to provide an unparalleled shopping experience by delivering exceptional customer service and great value products at affordable prices. Our goal is to empower every woman to express her unique style and personality through our carefully curated collections. As we transition into the digital world, we remain committed to sustaining the quality and trust that our customers have come to associate with Filly Fashion.
    </p >
  </section>

  <?php
    $bestOffers=bestOffers();
    $latest=latestProducts();
  ?>

  <div class="latest-section container-fluid">
    <div class="pcc">
      <h1>Latest Products</h1>
    </div>
    <div class="best-offers-cards row">
      <?php echo productsCards($latest)  ?>
    </div>
  </div>

  <div class="best-offers-section container-fluid">
    <div class="pcc">
      <h1>Best Offers</h1>
    </div>
    <div class="best-offers-cards row">
      <?php echo productsCards($bestOffers)  ?>
    </div>
  </div>

  <?php echo footer("home")  ?>
</body>
</html>