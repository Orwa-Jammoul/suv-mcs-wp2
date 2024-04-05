<?php
  require './components/footer.php';
  require './components/navbar.php';
  require './server.php';
  require './components/group-products.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" type="image/x-icon" href="./assets/logos/fillyFashion-logo-02.png">
  <title>Products</title>

  <link rel="stylesheet" type="text/css" href="./style/main.css">
  <link rel="stylesheet" type="text/css" href="./style/products.css">

  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.7.1.min.js" 
  integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo="
  crossorigin="anonymous"></script>

  <script src="./script/main.js" defer></script>
  <script src="./script/products.js" defer></script>
</head>
<body>
  <?php echo navbar("products")  ?>

  <?php
    // print_r($_GET);
    // echo count($_GET);
    $group = '';
    if(count($_GET) !=0){
      $group = $_GET['group'];
    }else{
      $group = 'all';
    }

    $sName='';
    $sProducts=[];
    switch ($group) {
      case "dresses":
        $sName= "Dresses Category";
        $sProducts = productsByCategoryId(1);
        break;
      case "shirts":
        $sName= "Shirts Category";
        $sProducts = productsByCategoryId(2);
        break;
      case "pants":
        $sName= "Pants Category";
        $sProducts = productsByCategoryId(3);
        break;
      case "shoses":
        $sName= "Shoses Category";
        $sProducts = productsByCategoryId(4);
        break;
      case "latestProducts":
        $sName= "Latest Products";
        $sProducts = latestProducts();
        break;
      case "bestOffers":
        $sName= "Best Offers";
        $sProducts = bestOffers();
        break;
      default:
        // Return an error response if the data identifier is not found
        $sName= "All Products";
        $sProducts = allProducts();
    }
  ?>
  <section class="products">
    <div class="route">
      <a class="route-link" href="./">Home</a> / Products
    </div>
    
    <h4 class="page-title">Products</h4>
    <div class="group-btns d-flex pcs">
      <a class="products-group-btn <?php echo $sName=='All Products'?'active':'' ?>" 
      style="--i:1" href="./products.php">All</a>
      <a class="products-group-btn <?php echo $group=='dresses'?'active':'' ?>" style="--i:2" href="./products.php?group=dresses">Dresses</a>
      <a class="products-group-btn <?php echo $group=='shirts'?'active':'' ?>" style="--i:3" href="./products.php?group=shirts">Shirts</a>
      <a class="products-group-btn <?php echo $group=='pants'?'active':'' ?>" style="--i:4" href="./products.php?group=pants">Pants</a>  
      <a class="products-group-btn <?php echo $group=='shoses'?'active':'' ?>" style="--i:5" href="./products.php?group=shoses">Shose</a>
      <a class="products-group-btn <?php echo $group=='latestProducts'?'active':'' ?>" style="--i:6" href="./products.php?group=latestProducts">Latest Products</a>
      <a class="products-group-btn <?php echo $group=='bestOffers'?'active':'' ?>" style="--i:7" href="./products.php?group=bestOffers">Best Offers</a>
    </div>

  </section>

  <div class="products-section container-fluid">
    <div class="m-5 pcc">
      <h1><?php echo $sName ?></h1>
    </div>
    <div class="products-cards row">
      <?php echo productsCards($sProducts)  ?>
    </div>
  </div>

  <?php echo footer("products")  ?>
</body>
</html>