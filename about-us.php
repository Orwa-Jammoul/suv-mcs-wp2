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
  <title>About Us</title>

  <link rel="stylesheet" type="text/css" href="./style/main.css">
  <link rel="stylesheet" type="text/css" href="./style/aboutUs.css">

  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

  <script src="./script/main.js" defer></script>
  <script src="./script/aboutUs.js" defer></script>
</head>

<body>
  <?php echo navbar("about-us")  ?>

  <section class="about-us page-section">
    <div class="route">
      <a class="route-link" href="./">Home</a> / About Us
    </div>

    <div class="des-frame pcc">
      <div class="des">
        <h1>About Us</h1>
        <p>
          <span>Filly Fashion</span>, a name synonymous with style and elegance, aspires to be a premier online destination for women's fashion. Our vision is to offer an extensive and diverse range of products, spanning four key categories: dresses, shirts, pants, and shoes.
        </p>
        <p>
          Our mission is to provide an unparalleled shopping experience that goes beyond the ordinary. We strive to deliver exceptional customer service, ensuring that every interaction is a delightful journey for our customers. Our products, characterized by great value and affordable prices, are carefully selected to cater to a variety of tastes and preferences.
        </p>
        <p>
          At Filly Fashion, we believe in the power of individuality. <span> We aim</span> to empower every woman to express her unique style and personality through our meticulously curated collections. Our offerings are designed to inspire confidence and celebrate the distinct identity of each woman who shops with us.
        </p>
        <p>
  
          As we navigate the transition into the digital world, our commitment to quality remains unwavering. We understand that trust is earned, and we are dedicated to upholding the high standards that our customers have come to associate with the Filly Fashion brand.
        </p>
        <p>
          In an ever-evolving fashion landscape, <span>Filly Fashion stands as a beacon of consistency and reliability</span>. We invite you to join us on this exciting journey as we continue to redefine fashion, one outfit at a time. Welcome to Filly Fashion - where style meets substance.
        </p>
      </div>
    </div>

  </section>



  <?php echo footer("about-us")  ?>
</body>

</html>