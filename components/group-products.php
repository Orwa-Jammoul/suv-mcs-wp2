<?php 

require './components/card-product.php';
function productsCards($products){ for ($i=0; $i < count($products); $i++) { ?>

  <div class="card-frame col-lg-3 col-md-4 col-sm-6">
    <?php echo cardProduct($products[$i])  ?>
  </div>

<?php } } ?>