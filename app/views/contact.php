<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');
include('config.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="/favicon.ico?v=2">
    <title>Contact Us</title>
    <?php include('header.php'); ?>
</head>

<body>
    <?php include('navigator.php'); ?>

    <div class="container">
        <div class="row">
            <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact mt-5">
      <div class="mapouter mx-auto"><div class="gmap_canvas"><iframe width="1450" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=Mindoro%20State%20University%20Victoria%20oriental%20mindoro&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://www.embedgooglemap.net/blog/divi-discount-code-elegant-themes-coupon/"></a><br><style>.mapouter{position:relative;text-align:right;height:500px;width:1110px; }</style><a href="https://www.embedgooglemap.net">google maps insert</a><style>.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:1110px;}</style></div></div>
      <div class="container" data-aos="fade-up">

        <div class="row mt-5">

          <div class="col-lg-4">
            <div class="info">
              <div class="address">
                <i class="fa-solid fa-location"></i>
                <h4>Location:</h4>
                <p>Oriental Mndoro, Philippines</p>
              </div>

              <div class="email">
                <i class="fa-solid fa-envelope"></i>
                <h4>Email:</h4>
                <p>minsu@gmail.com</p>
              </div>

              <div class="phone">
                <i class="fa-solid fa-phone"></i>
                <h4>Call:</h4>
                <p>+6391234567899</p>
              </div>
            </div>
          </div>

          <div class="col-lg-8 mt-5 mt-lg-0">
            <form action="<?php echo site_url('user/message'); ?>" method="post" role="form" id="contact-form" class="php-email-forms">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
              </div>
              <!-- <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
              </div> -->
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" id="message" rows="5" placeholder="Message" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message">Something went wrong! Please</div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><input type="submit" id="submit" name="submit" value="Send Message"></div>
            </form>
          </div>
        </div>
      </div>
    </section><!-- End Contact Section -->
            <?php include('footer.php'); ?>
        </div>
    </div>
</body>

</html>