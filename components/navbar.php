<?php function navbar($name) { ?>
  <div class="main-navbar">
    <div class="nav-top d-flex justify-content-between align-items-center">
      <div class="left  pcc">
        <a target="_blank" class="pcc me-1" href="mailto://Orwa_275311@svuonline.org">
          &#8277; Orwa_275311
        </a>
        <a target="_blank" class="pcc me-1" href="mailto://Mohamed_amer_265642@svuonline.org">
          &#8277; Mohamed_amer_265642
        </a>
        <a target="_blank" class="pcc me-1" href="mailto://mansour_265936@svuonline.org">
          &#8277; Mansour_265936
        </a>
      </div>
      <div class="right">
        <a href="mailto://support@fillyfashion.com">support@fillyfashion.com</a>
      </div>

    </div>
    <div class="nav-bottom">
      <div class="left">
        <img src="./assets/logos/fillyFashion-logo-05.png" alt="logo">
      </div>
      <div class="center pcc">
        <a class="nav-link <?php echo ($name == 'home' ? 'active' : ''); ?>" href="./index.php">Home</a>
        <a class="nav-link <?php echo ($name == 'products' ? 'active' : ''); ?>" href="./products.php">Products</a>
        <a class="nav-link <?php echo ($name == 'about-us' ? 'active' : ''); ?>" href="./about-us.php">About Us</a>
        <a class="nav-link <?php echo ($name == 'contact-us' ? 'active' : ''); ?>" href="./contact-us.php">Contact Us</a>
      </div>
      <div class="right d-flex justify-content-end align-items-center">
        <a class="cart-img pcc " href="./cart.php">
          <img src="./assets/icons/nav/MaterialSymbolsLightShoppingBagOutline.svg" alt="cart">
          <p id="cart-item-num" class="item-num">0</p>
        </a>

        <a id="loged-in" class="account-img hide pcc" href="./account.php">
          <img src="./assets/icons/nav/MaterialSymbolsLightAccountBoxOutline.svg" alt="account">
        </a>

        <a id="loged-out" class="account-img pcc" href="./login.php">
          <img src="./assets/icons/nav/MaterialSymbolsLightFramePersonOutlineSharp.svg" alt="account">
        </a>

        <div class="nav-bar-frame">
          <button class="nav-bar-toggler pcc" onclick="showNavbarDropDown();">
            <img class="nav-icon" src="./assets/icons/FluentNavigation20Filled.svg" alt="facebook">
          </button>
          <ul class="drdn-menu">
            <li>
              <a class="nav-link <?php echo ($name == 'home' ? 'active' : ''); ?>" href="./index.php">Home</a>
            </li>
            <li>
              <a class="nav-link <?php echo ($name == 'products' ? 'active' : ''); ?>" href="./products.php">Products</a>
            </li>
            <li>
              <a class="nav-link <?php echo ($name == 'about-us' ? 'active' : ''); ?>" href="./about-us.php">About Us</a>
            </li>
            <li>
              <a class="nav-link <?php echo ($name == 'contact-us' ? 'active' : ''); ?>" href="./contact-us.php">Contact Us</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
<?php } ?>