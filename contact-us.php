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
  <link rel="stylesheet" type="text/css" href="./style/contactUs.css">

  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.7.1.min.js" 
  integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo="
  crossorigin="anonymous"></script>

  <script src="./script/main.js" defer></script>
  <script src="./script/contactUs.js" defer></script>
</head>
<body>

  <?php echo navbar("contact-us")  ?>

  <section class="contact-us page-section">
    <div class="route">
      <a class="route-link" href="./">Home</a> / Contact Us
    </div>

    <div class="des-frame pcc">
      <div class="des">
        <h1>Contact Us</h1>
        <p>
          At Filly Fashion, we value your feedback and inquiries. We’re here to help you and ensure your shopping experience is as smooth and enjoyable as possible.
        </p>
        <h3>Email Us</h3>
        <p>
          For any questions or concerns, please reach out to us at <span>support@fillyfashion.com</span>. Our dedicated customer service team will respond to your query within 24 hours.
        </p>
        <h3>Call Us</h3>
        <p>
          You can also reach us by phone at <span>(123) 456-7890</span>. Our customer service representatives are available from Monday to Friday, 9:00 AM to 5:00 PM.
        </p>
        <h3>Mailing Address</h3>
        <p>
          Filly Fashion <span>str123, Salamieh, Hama, Syria</span>
          </p>
        <p>
          We look forward to hearing from you and assisting you with your needs. Thank you for choosing Filly Fashion!
          </p>
        <p>
          Please note: For immediate assistance, please check out our FAQ page where we have answers to our most commonly asked questions.
        </p>
        <p>
  
        </p>
      </div>
    </div>

  </section>


  <?php echo footer("contact-us")  ?>
</body>
</html>