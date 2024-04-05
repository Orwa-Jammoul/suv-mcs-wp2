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
      <!-- <h1>asdasd</h1> -->
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
          <!-- <div class="img-frame cover">
            <img  src="./assets/icons/categories/FluentEmojiHighContrastDress.svg" alt="">
          </div> -->
          <a class="icon-frame pcc" href="./products.php?group=dresses">
            <img  src="./assets/icons/categories/FluentEmojiHighContrastDress.svg" alt="">
            <div class="title">Dress</div>
          </a>
        </div>
        <div class="cat cat-02" style="--i:2">
          <!-- <div class="img-frame cover">
            <img  src="./assets/images/Orwa-photo.jpg" alt="">
          </div> -->
          <a class="icon-frame pcc" href="./products.php?group=pants">
            <img  src="./assets/icons/categories/IconoirPantsPockets.svg" alt="">
            <div class="title">Pants</div>
          </a>
        </div>
        <div class="cat cat-03" style="--i:3">
          <!-- <div class="img-frame cover">
            <img  src="./assets/images/Orwa-photo.jpg" alt="">
          </div> -->
          <a class="icon-frame pcc" href="./products.php?group=shirts">
            <img  src="./assets/icons/categories/MajesticonsTShirtLine.svg" alt="">
            <div class="title">Shirts</div>
          </a>
        </div>
        <div class="cat cat-04" style="--i:4">
          <!-- <div class="img-frame cover">
            <img  src="./assets/images/Orwa-photo.jpg" alt="">
          </div> -->
          <a class="icon-frame pcc" href="./products.php?group=shoses">
            <img  src="./assets/icons/categories/IconParkOutlineHighHeeledShoes.svg" alt="">
            <div class="title">Shoses</div>
          </a>
        </div>
      </div>
      <a class="our-products-btn pcc" href="./products.php">
        <p class="mb-0">OUR PRODUCTS</p> 
      </a>
    </div>
    <!-- <div class="img-frame">
      <img src="./assets/images/header/header-01.jpg" alt="">
    </div> -->
    <!-- <div class="header-title pcc">
      <h1>Orwa Jammoul</h1>
      <h5 class="pt-3">Front-end developer, UI/UX designer, Teacher & Trainer</h5>
      <p>Feel free to contact me if you need any service</p>
      <button onclick="goto('./ContactMe.php')">Contact With Me</button>
    </div> -->
    <!-- <div class="header-swiper-frame">
      <div class="header-swiper pcc">
        <div class="slide active">
          <img src="./assets/images/sliders/16.jpg" alt="">
          <div class="des pcc">
            <h1>Front-End Developement</h1>
            <p>My front-end development service focuses on creating visually appealing and user-friendly interfaces for websites and web applications.</p>
          </div>
        </div>
        <div class="slide ">
          <img src="./assets/images/sliders/15.png" alt="">
          <div class="des pcc">
            <h1>UI/UX Designing</h1>
            <p>My goal is to craft interfaces that not only look aesthetically pleasing but also provide a smooth and engaging user journey, ultimately enhancing user satisfaction.</p>
          </div>
        </div>
        <div class="slide ">
          <img src="./assets/images/sliders/14.png" alt="">
          <div class="des pcc">
            <h1>Teaching & Training</h1>
            <p>I provide a comprehensive Mechatronics and programming teaching service, From learning the basics of electronics and mechanical systems and microcontrollers to advanced levels</p>
          </div>
        </div>
        <div class="sliders-control pcc">
          <button class="me-2" onclick="previusSlide()">Previus</button>
          <button onclick="nextSlide()">Next</button>
        </div>
      </div>
    </div> -->
  </section>

  <section class="about-us pcc flex-column">
    <h1 class="title">Our Vision</h1>
    <p class="des">
    Filly Fashion envisions to be a leading online platform for women’s fashion, offering a diverse range of products across four main categories: dresses, shirts, pants, and shoes. We aim to provide an unparalleled shopping experience by delivering exceptional customer service and great value products at affordable prices. Our goal is to empower every woman to express her unique style and personality through our carefully curated collections. As we transition into the digital world, we remain committed to sustaining the quality and trust that our customers have come to associate with Filly Fashion.
    </p >
  </section>

  <?php
    // $bestOffers = array(
    //   array(
    //       "id" => "1",
    //       "title" => "Elegant Evening Gown",
    //       "description" => "A stunning floor-length gown perfect for any formal event.",
    //       "price" => 500000,
    //       "image" => "image/ElegantEveningGownImage.jpg",
    //       "categoryId" => 1,
    //       "offerRate" => 10
    //   ),
    //   array(
    //       "id" => "2",
    //       "title" => "Casual Summer Dress",
    //       "description" => "A light and airy dress ideal for warm summer days.",
    //       "price" => 20000,
    //       "image" => "image/CasualSummerDressImage.jpg",
    //       "categoryId" => 1,
    //       "offerRate" => 10
    //   ),
    //   array(
    //       "id" => "3",
    //       "title" => "Classic Little Black Dress",
    //       "description" => "A timeless classic that every woman should have in her wardrobe.",
    //       "price" => 150000,
    //       "image" => "image/ClassicLittleBlackDressImage.jpg",
    //       "categoryId" => 1,
    //       "offerRate" => 20
    //   ),
    //   array(
    //       "id" => "4",
    //       "title" => "Boho Chic Maxi Dress",
    //       "description" => "A trendy boho chic dress with a flattering silhouette.",
    //       "price" => 80000,
    //       "image" => "image/BohoChicMaxiDressImage.jpg",
    //       "categoryId" => 1,
    //       "offerRate" => 10
    //   )
    // );
    $bestOffers=bestOffers();
    $latest=latestProducts();
    // $bestOffers=allproducts();
    // print_r( allproducts());
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