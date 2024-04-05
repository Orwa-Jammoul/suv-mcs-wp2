<?php function footer($name) { ?>
  <section id="footer" class="footer container-fluid w-100">
    <div class="row">
      <div class="left col-lg-6 col-md-6 col-sm-12 pcc">
        <div class="logo-frame contain">
          <img src="./assets/logos/fillyFashion-logo-03.png" alt="">
        </div>
        <div class="developers mt-1 mb-2 pcc">
          <a target="_blank" class="developer pcc me-1" href="mailto://Orwa_275311@svuonline.org">
            &#8277; Orwa_275311
          </a>
          <a target="_blank" class="developer pcc me-1" href="mailto://Mohamed_amer_265642@svuonline.org">
            &#8277; Mohamed_amer_265642
          </a>
          <a target="_blank" class="developer pcc me-1" href="mailto://mansour_265936@svuonline.org">
            &#8277; Mansour_265936
          </a>
        </div>
      </div>
      
      <div class="right col-lg-6 col-md-6 col-sm-12 pcc">
        <!-- <h5>Links</h5> -->
        <ul class="footer-links my-5 d-flex">
          <li>
            <a class="footer-link <?php echo ($name == 'home' ? 'active' : ''); ?>" href="./index.php">Home</a>
          </li>
          <li>
            <a class="footer-link <?php echo ($name == 'products' ? 'active' : ''); ?>" href="./products.php">Products</a>
          </li>
          <li>
            <a class="footer-link <?php echo ($name == 'about-us' ? 'active' : ''); ?>" href="./about-us.php">About Us</a>
          </li>
          <li>
            <a class="footer-link <?php echo ($name == 'contact-us' ? 'active' : ''); ?>" href="./contact-us.php">Contact Us</a>
          </li>
        </ul>
      </div>
    </div>
  </section>
<?php } ?>