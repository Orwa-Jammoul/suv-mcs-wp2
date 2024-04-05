<?php function cardProduct($product){ ?>

  <div class="product-card">
    <div class="img-frame">
      <img src="./<?php echo $product["image"] ?>" alt="">
      <?php  echo $product["offerRate"]>0? 
        ('<p class="rate">'. $product["offerRate"].'%</p>'):
        '';
      ?>
      <p class="category-name"><?php echo $product["categoryName"] ?></p>
    </div>
    <div class="des">
      <h5><?php echo $product["title"] ?></h5>
      <p class="product-des"><?php echo $product["description"] ?></p>
      <div class="price-group pcc">
        <p class="price <?php echo $product['offerRate']>0? 'old':'' ?>"><?php echo $product["price"].'.S.P' ?></p>
        <?php  echo $product["offerRate"]>0? 
          ('<p class="new-price">'. (100-$product["offerRate"])*0.01*$product["price"] .'.S.P</p>'):
          '';
          
          $stringProduct =  json_encode($product);
        ?>
      </div>
      
      <!-- <script>
        function sss(p){
          console.log("out ", p);
          addOne(p);
        }
      </script> -->
      <button class="border-animation" onclick='<?php echo "addOne(".$stringProduct.")"; ?>'>Add to Cart</button>
    </div>
  </div>

<?php } ?>